<?php
session_start();

if(isset($_GET['mod']) ){
    switch($_GET['mod'] ){
        case 'page':
            $ctrl_name = 'page';
            break;
        case 'user':
            $ctrl_name = 'user';
            break;
        case 'admin':
            $ctrl_name = 'admin';
            break;            
        default:
             break;
    }
    include_once 'controller/c_'.$ctrl_name.'.php';
}else{
    header('Location: ?mod=page&act=home');
}
//  hahahaha aaahahhahahaha
?>
