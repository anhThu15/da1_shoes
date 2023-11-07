<?php

if(isset($_GET['act']) ){
    switch($_GET['act'] ){
        case 'dashboard':
            $view_name = 'admin_dashboard';
            break;
        case 'account':
            $view_name = 'admin_account';
            break;
            case 'account_add':
                $view_name = 'admin_account_add';
                break;
        // case 'detail':
        //     $view_name = 'page_detail';
        //     break;
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
    include_once 'view/v_layout_admin.php';
}

?>