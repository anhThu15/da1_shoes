<?php
include_once 'model/m_pdo.php';

function add_comment($user_id,$product_id,$coment_text,$coment_day){
   return pdo_execute("INSERT INTO coment(`user_id`,`product_id`,`coment_text`,`coment_day`) 
   values (?,?,?,?)",$user_id,$product_id,$coment_text,date('Y-m-d H:i:s'));
}

function load_comment($product_id){
   return pdo_query("SELECT * FROM coment c INNER JOIN user u ON c.user_id = u.user_id WHERE c.product_id=?",$product_id);
}
//   ahhahah a
?>