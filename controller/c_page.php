<?php
            include_once 'model/m_product.php';
            include_once 'model/m_brand&category.php';
            include_once 'model/m_comment.php';
            include_once 'model/m_oders.php';

if(isset($_GET['act']) ){
    switch($_GET['act'] ){
        case 'home':
            $rand = pr_rand();
            $day = pr_day();

            $view_name = 'page_home';
            break;
            // category
        case 'category':
            $allct = all_ct();
            $allbr = all_br();
            $page = 1;
                if(isset($_GET['page']) ){
                    $page = $_GET['page'];
                }
                $total = ceil(pr_page_total($page)/9) ;
                $all = all_pr($page);

            $view_name = 'page_category';
            break;
                case 'categoryList':
                    $all = all_pr();
                    $allct = all_ct();
                    $allbr = all_br();
                    $getid_categorys =  all_pr_ct($_GET['id']);
        
                    $view_name = 'page_categoryList';
                    break;
                    case 'brand':
                        $all = all_pr();
                        $allct = all_ct();
                        $allbr = all_br();
                        $getid_brand =  all_pr_br($_GET['id']);
        
                        $view_name = 'page_brand';
                        break;
                        case 'search':
                            $all = all_pr();
                            $allct = all_ct();
                            $allbr = all_br();
                            if(isset($_POST['key']) ){
                                // đổi từ post sang get
                                header("Location: ?mod=page&act=search&key=".$_POST['key']);
                            }
                            $page = 1;
                            if(isset($_GET['page']) ){
                                $page = $_GET['page'];
                            }
                            $search = pr_search($_GET['key'],$page);
                            $total = ceil(pr_search_total($_GET['key'])/6) ;

                            $view_name = 'page_search';
                            break;  
                            
        // category
        case 'detail':
            $pr_detail = pr_detail($_GET['id']);
            
            $coment = load_comment($_GET['id']);

            $view_name = 'page_detail';
            break;

                    case 'detail_comment':
                        include_once 'model/m_comment.php';
                        add_comment($_SESSION['user']['user_id'],$_POST['product_id'],$_POST['coment_text'],$_POST['coment_day']);
                        header("Location: ?mod=page&act=detail&id=".$_POST['product_id']);
                    break;
                
            // cart
            case 'cart':
                $ur_id = $_SESSION['user']['user_id'];
                $checks =  oders_check($ur_id);
                if( $checks ){
                    $load = oders_load($ur_id);
                    $total = totalCart($ur_id);
                }else{
                    $load = [];
                }

                $view_name = 'page_cart';
                break;
                case 'add_cart':
                    if( !isset($_SESSION['user']) ){
                        $_SESSION['loi'] = 'Bạn cần đăng nhập để có thể thêm vào giỏ hàng';
                        header("location: ?mod=page&act=login");
                        return;
                    }
                    include_once 'model/m_oders.php';
                    $ur_id = $_SESSION['user']['user_id'];
                    $pr_id = $_GET['id'];
                    try {
                        //code...
                        $checks =  oders_check($ur_id);
                    if($checks){
                        // nếu đá có giỏ hàng thì thêm sp vào thôi
                        oders_addToCart($checks['orders_id'],$pr_id);
                    }else{
                        // nếu chưa có giỏ hàng thì thêm giỏ hàng và thêm sản phẩm mới vào
                        oders_add($ur_id);
                        $checks =  oders_check($ur_id);
                        oders_addToCart($checks['orders_id'],$pr_id);
                    }
                    $_SESSION['thongbao'] = 'Đảk thêm sản phẩm vào giỏ hàng';
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                    
                    
                    header("Location: ?mod=page&act=detail&id=".$pr_id);

                    break;
                    case 'cart_del':
                        $id = $_SESSION['user']['user_id'];
                        $idPr = $_GET['id'];
                        $oder =  oders_check($id);
                        if($oder){
                            cart_del($oder['orders_id'],$idPr);
                        }
                        header("Location: ?mod=page&act=cart");
                        break;
                        case 'deal':
                            $id = $_SESSION['user']['user_id'];
                            $oder =  oders_check($id);
                            if($oder){
                                $status = 'deal';
                                $day = $_POST['day'];
                                deal($oder['orders_id'],$status,$day);
                            }
                            header("Location: ?mod=page&act=cart");
                            break;

            // cart
                        
            
        case 'bill':
            $id = $_SESSION['user']['user_id'];

            $bill = bill($id);
            $total = total($id);
            $in4 = in4($id);

            $view_name = 'page_bill';
            break;
        case 'checkout':
            $view_name = 'page_checkout';
            break;
        case 'confirmation':
            $view_name = 'page_confirmation';
            break;
        case 'contact':
            $view_name = 'page_contact';
            break;
        case 'blog':
            $view_name = 'page_blog';
            break;
        case 'blog_detail':
            $view_name = 'page_blog_detail';
            break;
        default:
             break;
    }
    include_once 'view/v_layout_user.php';
}

?>