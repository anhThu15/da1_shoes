<?php
include_once 'model/m_pdo.php';

function all_pr_br($id){
   return pdo_query("SELECT * FROM product where brand_id = $id ");
}
function all_pr_ct($id){
    return pdo_query("SELECT * FROM product where categorys_id = $id ");
 }

   function all_ct(){
      return pdo_query("SELECT * FROM categorys");
   }
   function all_br(){
      return pdo_query("SELECT * FROM brand");
   }    


   // admin
   function check_br($name){
      return pdo_query("SELECT * FROM brand where brand_name=?",$name);
   }
   function br_admin_add($name,$description,$day){
      return pdo_execute("INSERT INTO brand(`brand_name`,`brand_description`,`brand_day`) 
      values (?,?,?)",$name,$description,$day);
   }
   function br_admin_edit($id,$name,$description,$day){
      return pdo_execute("UPDATE brand SET brand_name=?,brand_description=?,brand_day=?  
      where brand_id=? ", $name,$description,$day,$id);
   }
   function brand_getbyid($id){
      return pdo_query_one("SELECT * FROM brand where brand_id=?",$id);
   }
   function br_admin_del($id){
      return pdo_execute("DELETE FROM brand where brand_id=?",$id);
   }

   
?>