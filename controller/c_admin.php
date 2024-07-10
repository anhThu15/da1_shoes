<?php
include_once 'model/m_product.php';
include_once 'model/m_user.php';
include_once 'model/m_brand&category.php';
include_once 'model/m_oders.php';
if(isset($_GET['act']) ){
    switch($_GET['act'] ){
        case 'dashboard':   
            $view_name = 'admin_dashboard';
            break;

            // account //
        case 'account':
            $all = ur_admin();

            $view_name = 'admin_account';
            break;
            case 'account_add':
                if(isset($_POST['submit']) ){
                    $fullname = $_POST['fullname'];
                    $name= $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $img = $_FILES['img']['name'];
                    $permission = $_POST['permission'];
                    // print_r($_POST);
                    // die();
                    $kq = checkMail($email);
                    if($kq){
                        $_SESSION['loi'] = 'Account <strong>'.$email.'</strong> was used to register.';
                    }else{
                        ur_admin_add($fullname,$name,$address,$email,$pass,$img,$permission);
                        if($_FILES['img']['error']==0){
                            if($img){
                                // ảnh không lỗi 
                                $img = move_uploaded_file(
                                    $_FILES['img']['tmp_name'],
                                    "upload/avatar/".$_FILES['img']['name']
                                );
                            }
                        }
                        $_SESSION['thongbao'] = '<strong> Account successfully created </strong>';
                    }
                }

                $view_name = 'admin_account_add';
                break;
                case 'account_edit':
                    $id = $_GET['id'];
                    if(isset($_POST['submit']) ){
                        $fullname = $_POST['fullname'];
                        $name= $_POST['name'];
                        $address = $_POST['address'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $img = $_FILES['img']['name'];
                        $permission = $_POST['permission'];
                        // print_r($_POST);
                        // die();
                        // $kq = checkMail($email);
                        // if($kq){
                        //     $_SESSION['loi'] = 'lỗi';
                        // }else{
                            ur_admin_edit($id,$fullname,$name,$address,$email,$pass,$img,$permission);
                            if($_FILES['img']['error']==0){
                                if($img){
                                    // ảnh không lỗi 
                                    $img = move_uploaded_file(
                                        $_FILES['img']['tmp_name'],
                                        "upload/avatar/".$_FILES['img']['name']
                                    );
                                }
                            }
                            $_SESSION['thongbao'] = '<strong>Updated successfully </strong>';
                            
                        }
                        $idEdit = user_getById($id);
                    // }
    
                    $view_name = 'admin_account_edit';
                    break;
                    case 'ur_admin_del':
                        ur_admin_del($_GET['id']);
                        header("Location: ?mod=admin&act=account");
                        break;
            // account //

            // prodcut // 
        case 'product':
            $all = pr_admin();

            $view_name = 'admin_product';
            break; 
            case 'product_add':
                $all = pr_admin();
                $all_ct = all_ct();
                $all_br = all_br();
                if(isset($_POST['submit']) ){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $brand = $_POST['brand'];
                    $category = $_POST['category'];
                    $img = $_FILES['img']['name'];
                    $day = $_POST['day'];
                    $description = $_POST['description'];
                    // print_r($_POST);
                    // die();
                    $check = check_pr($name);
                    if($check){
                        $_SESSION['loi'] = 'Product <strong>'.$name.'</strong> is available.';
                    }else{
                        pr_admin_add($name,$price,$brand,$category,$img,$day,$description);
                        if($_FILES['img']['error']==0){
                            if($img){
                                // ảnh không lỗi 
                                $img = move_uploaded_file(
                                    $_FILES['img']['tmp_name'],
                                    "upload/product/".$_FILES['img']['name']
                                );
                            }
                        }
                        $_SESSION['thongbao'] = '<strong> Product successfully created </strong>';
                    }
                }
                $view_name = 'admin_product_add';
                break;
                case 'product_edit':
                    $all = pr_admin();
                    $all_ct = all_ct();
                    $all_br = all_br();
                    $id=$_GET['id'];
                    if(isset($_POST['submit']) ){
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $brand = $_POST['brand'];
                        $category = $_POST['category'];
                        $img = $_FILES['img']['name'];
                        $day = $_POST['day'];
                        $description = $_POST['description'];
                        // print_r($_POST);
                        // die();
                        $check = check_pr($name);
                        if($check){
                            $_SESSION['loi'] = 'Product <strong>'.$name.'</strong> is available.';
                        }else{
                            pr_admin_edit($id,$name,$price,$brand,$category,$img,$day,$description);
                            if($_FILES['img']['error']==0){
                                if($img){
                                    // ảnh không lỗi 
                                    $img = move_uploaded_file(
                                        $_FILES['img']['tmp_name'],
                                        "upload/product/".$_FILES['img']['name']
                                    );
                                }
                            }
                            $_SESSION['thongbao'] = '<strong> Product successfully created </strong>';
                        }
                    }
                    $idUr = product_getById($id);
    
    
                    $view_name = 'admin_product_edit';
                    break;
                    case 'product_del':
                        pr_admin_del($_GET['id']);
                        header("Location: ?mod=admin&act=product");
                        break;
            // prodcut //

               // brand // 
        case 'brand':
            $all = all_br();

            $view_name = 'admin_brand';
            break; 
            case 'brand_add':
                if(isset($_POST['submit']) ){
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $day = $_POST['day'];
                    // print_r($_POST);
                    // die();
                    $check = check_br($name);
                    if($check){
                        $_SESSION['loi'] = 'Brand <strong>'.$name.'</strong> is available.';
                    }else{
                        br_admin_add($name,$description,$day);
                        $_SESSION['thongbao'] = '<strong> Product successfully created </strong>';
                    }
                }
                $view_name = 'admin_brand_add';
                break;
                case 'brand_edit':
                    $id = $_GET['id'];
                    if(isset($_POST['submit']) ){
                        $name = $_POST['name'];
                        $description = $_POST['description'];
                        $day = $_POST['day'];
                        // print_r($_POST);
                        // die();
                        $check = check_br($name);
                        if($check){
                            $_SESSION['loi'] = 'Product <strong>'.$name.'</strong> is available.';
                        }else{
                            br_admin_edit($id,$name,$description,$day);
                            $_SESSION['thongbao'] = '<strong> Product successfully created </strong>';
                        }
                    }
                    $idBr = brand_getbyid($id);
    
    
                    $view_name = 'admin_brand_edit';
                    break;
                    case 'brand_del':
                        br_admin_del($_GET['id']);
                        header("Location: ?mod=admin&act=brand");
                        break;
            // prodcut //


        case 'map':
            $view_name = 'page_contact';
            break;

            // orders
        case 'orders':

            $all = orders_all();
            $all_ship = orders_all_ship();

            $view_name = 'admin_orders';
            break;
            case 'orders_view':
                $id = $_GET['id'];
                $one = orders_one($id);
                $total = totalAdmin($id);

                $view_name = 'admin_orders_view';
                break;
                case 'orders_ship':
                    // if(isset($_POST['id']) ){
                    //     // đổi từ post sang get 
                    //     header("Location: ?mod=admin&act=orders_ship&id=".$_POST['id']);
                    // }
                    // if(isset($_GET['id']) ){
                        // }
                    $id = $_POST['id'];
                    $check = ship_check($id);
                    if($check){
                        ship($check['orders_id']);
                    }
                    header("Location: ?mod=admin&act=orders");
                    return;
                    // print_r($check);
                    // die();
                    break;
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
    include_once 'view/v_layout_admin.php';
}

?>