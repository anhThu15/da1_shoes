<?php
            include_once 'model/m_user.php';

if(isset($_GET['act']) ){
    switch($_GET['act'] ){
        case 'login':
            if(isset($_POST['submit']) ){
                // print_r($_POST);
                $kq = login($_POST['user'],$_POST['pass']);
                if($kq){
                    $_SESSION['user'] = $kq;
                    if($kq['user_permission'] == 3){
                        header('Location: ?mod=admin&act=dashboard');
                    }elseif($kq['user_permission'] == 2){
                        header('Location: ?mod=page&act=blog');
                    }else{
                        header('Location: ?mod=page&act=home');
                    }
                }else{
                    $_SESSION['loi'] = 'Fail: User name or Password wrong';
                }
            }

            $view_name = 'user_login';
            break;
        case 'signin':
            if(isset($_POST['submit']) ){
                $fullname = $_POST['fullname'];
                $user= $_POST['user'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $kq = checkMail($email);
                if($kq){
                    //trùng mail không cho tạo
                    $_SESSION['loi'] = 'Tài Khoản  <strong>'.$email.'</strong> đã dc dùng để đăng ký.';
                }else{
                    // email mới chưa đăng ký lần nào 
                    $pass = 123456;
                    $img = 'user.png';
                    $permission = 1;
                    signin($fullname,$user,$address,$email,$pass,$img,$permission);
                    $_SESSION['thongbao'] = 'Đã Tạo Tài Khoản với user name là <strong>'.$user.'</strong> 
                                               và mật khẩu mặc định là <strong> '.$pass.'</strong>';
                }
            }


            $view_name = 'user_signin';
            break;

        case 'logout':
            unset($_SESSION['user']);
            header('Location: ?mod=page&act=home');
            break;
            
        case 'in4':
            $id= $_SESSION['user']['user_id'];
            if(isset($_POST['submit']) ){
                $fullname = $_POST['fullname'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $img = $_FILES['img']['name'];
                $address = $_POST['address'];

                    edit($id,$fullname,$name,$email,$pass,$img,$address);

                    if($_FILES['img']['error']==0){
                        if($img){
                         // ảnh không lỗi 
                             $img = move_uploaded_file(
                               $_FILES['img']['tmp_name'],
                               "upload/avatar/".$_FILES['img']['name']
                            );
                        }
                      }
                      header("Location: ?mod=user&act=in4");
                }
                $idUs = user_getById($id);

            $view_name = 'user_in4';
            break;
        // case 'checkout':
        //     $view_name = 'page_checkout';
        //     break;
        // case 'cart':
        //     $view_name = 'page_cart';
        //     break;
        // case 'confirmation':
        //     $view_name = 'page_confirmation';
        //     break;
        // case 'contact':
        //     $view_name = 'page_contact';
        //     break;
        // case 'blog':
        //     $view_name = 'page_blog';
        //     break;
        // case 'blog_detail':
        //     $view_name = 'page_blog_detail';
        //     break;
        default:
             break;
    }
    include_once 'view/v_layout_user.php';
}

?>