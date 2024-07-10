<?php
include_once 'model/m_pdo.php';
// user
function login($user,$pass){
    return pdo_query_one("SELECT * FROM user where user_name=? and user_pass=? ",$user,$pass);
}
function signin($fullname,$user,$address,$email,$pass,$img,$permission){
    return pdo_execute("INSERT INTO user(`user_fullname`,`user_name`,`user_address`,`user_email`,`user_pass`,`user_img`,`user_permission`) 
    values (?,?,?,?,?,?,?)",$fullname,$user,$address,$email,$pass,$img,$permission);
}
function checkMail($email){
    return pdo_query_one("SELECT * from user where user_email= ? ",$email);
}
function edit($id,$fullname,$name,$email,$pass,$img,$address){
    return pdo_execute("UPDATE user SET user_fullname=?,user_name=?,user_email=?,user_pass=?,user_img=?,user_address=?  where user_id=?"
                        ,$fullname,$name,$email,$pass,$img,$address,$id);
}
function user_getById($id){
    return pdo_query_one("SELECT * FROM user Where user_id= ?", $id);
   }


// admin

function ur_admin(){
    return pdo_query("SELECT * FROM user");
}
function ur_admin_add($fullname,$name,$address,$email,$pass,$img,$permission){
    return pdo_execute("INSERT INTO user(`user_fullname`,`user_name`,`user_address`,`user_email`,`user_pass`,`user_img`,`user_permission`) 
    values (?,?,?,?,?,?,?)",$fullname,$name,$address,$email,$pass,$img,$permission);
}
function ur_admin_del($id){
    return pdo_execute("DELETE FROM user WHERE user_id=?",$id);
}
function ur_admin_edit($id,$fullname,$name,$address,$email,$pass,$img,$permission){
    return pdo_execute("UPDATE user SET user_fullname=?, user_name=?, user_address=?, user_email=?, user_pass=?, user_img=?, user_permission= ?  
    where user_id=? ",$fullname,$name,$address,$email,$pass,$img,$permission,$id);
}
?>