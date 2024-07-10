<?php
include_once 'model/m_pdo.php';
   function all_pr($page=1){
      $batdau = ($page -1 )* 9;
        return pdo_query("SELECT * FROM product LIMIT $batdau,9");
   }
   function pr_page_total(){
      return pdo_query_value("SELECT COUNT(*) FROM product ");
   }

   function pr_rand(){
      return pdo_query("SELECT * FROM `product` ORDER BY rand() LIMIT 8");
   }
   function pr_day(){
      return pdo_query("SELECT * FROM `product` ORDER BY product_day DESC LIMIT 8");
   }

   function pr_detail($id){
      return pdo_query_one("SELECT * FROM product p 
      INNER JOIN brand c on p.brand_id = c.brand_id
      INNER JOIN categorys a ON p.categorys_id= a.categorys_id where product_id = $id ");
   }

   function pr_search($key,$page=1){
      $batdau = ($page -1 )* 6;
      // 1 trang lấy 9 đôi bắt đầu từ 0 
      return pdo_query("SELECT * FROM product WHERE product_name LIKE '%$key%' LIMIT $batdau,6 ");
   }
   function pr_search_total($key){
      return pdo_query_value("SELECT COUNT(*) FROM product WHERE product_name LIKE '%$key%' ");
   }
/// produc admin 

   function pr_admin(){
      return pdo_query("SELECT * FROM product p       
                        INNER JOIN brand b on p.brand_id = b.brand_id
                        INNER JOIN categorys c ON p.categorys_id= c.categorys_id");
   }
   function check_pr($name){
      return pdo_query("SELECT * FROM product where product_name=?",$name);
   }
   function pr_admin_add($name,$price,$brand,$category,$img,$day,$description){
      return pdo_execute("INSERT INTO product(`product_name`, `product_price`,`brand_id`,`categorys_id`,`product_img`,`product_day`,`product_description`) 
      values (?,?,?,?,?,?,?)",$name,$price,$brand,$category,$img,date('Y-m-d H:i:s'),$description);
   }
   function pr_admin_edit($id,$name,$price,$brand,$category,$img,$day,$description){
      return pdo_execute("UPDATE product SET product_name=?, product_price=?,brand_id=? ,categorys_id=?,product_img=?,product_day=?,product_description=?  
      where product_id=? ", $name,$price,$brand,$category,$img,date('Y-m-d H:i:s'),$description,$id);
   }
   function product_getbyid($id){
      return pdo_query_one("SELECT * FROM product where product_id=?",$id);
   }
   function pr_admin_del($id){
      return pdo_execute("DELETE FROM product where product_id=?",$id);
   }


?>