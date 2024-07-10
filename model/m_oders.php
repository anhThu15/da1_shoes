<?php
include_once 'model/m_pdo.php';

function oders_check($ur_id){
    return pdo_query_one("SELECT * from orders where user_id = ? and orders_paymentStatus = ? ",$ur_id , 'not-yet');
}

function oders_add($ur_id){
    pdo_execute("INSERT INTO orders(`user_id`,`orders_paymentStatus`,`orders_totalPrice`,`orders_day`) 
                            values(?,?,?,?)",$ur_id,'not-yet',0,date('Y-m-d H:i:s'));
}

function oders_addToCart($or_id,$pr_id){
    pdo_execute("INSERT INTO orders_detail(`orders_id`,`product_id`,`order_quality`,`orders_detail_day`) 
                            values(?,?,?,?)",$or_id, $pr_id, 0, date('Y-m-d H:i:s'));
}

function oders_load($ur_id){
    return pdo_query("SELECT * FROM orders o  INNER JOIN orders_detail d on o.orders_id = d.orders_id 
                                              INNER JOIN product p on d.product_id = p.product_id 
                                              WHERE o.user_id = ? and o.orders_paymentStatus=? ",$ur_id,'not-yet');
}
function cart_del($idOd,$idPr){
    return pdo_execute("DELETE FROM orders_detail where orders_id=? and product_id=? ",$idOd,$idPr);
}

function deal($idOd,$status,$day){
    return pdo_execute("UPDATE orders SET orders_paymentStatus=?,orders_day=? 
    where orders_id=?",$status,date('Y-m-d H:i:s'), $idOd);
}
function totalCart($idUr){
    return pdo_query_one("SELECT SUM(p.product_price) as total FROM product p INNER JOIN orders_detail od ON od.product_id = p.product_id
                                                                          INNER JOIN orders o ON od.orders_id = o.orders_id
                                                                          INNER JOIN user u ON u.user_id =o.user_id
                                                                          WHERE u.user_id = ? AND o.orders_paymentStatus=?",$idUr,'not-yet');
}
/////////////////////////// cart end /////////////////////

function bill($id){
    return pdo_query("SELECT * FROM orders o INNER JOIN user u ON o.user_id = u.user_id
                                             INNER JOIN orders_detail os ON os.orders_id = o.orders_id
                                             INNER JOIN product p ON os.product_id = p.product_id WHERE u.user_id = ? and o.orders_paymentStatus=?  ",$id,'deal');
}

function total($idUr){
    return pdo_query_one("SELECT SUM(p.product_price + 50000) as total FROM product p INNER JOIN orders_detail od ON od.product_id = p.product_id
                                                                          INNER JOIN orders o ON od.orders_id = o.orders_id
                                                                          INNER JOIN user u ON u.user_id =o.user_id
                                                                          WHERE u.user_id = ? AND o.orders_paymentStatus=?",$idUr,'deal');
}
function in4($id){
    return pdo_query_one("SELECT * FROM orders o INNER JOIN user u ON o.user_id = u.user_id
                                                 INNER JOIN orders_detail os ON os.orders_id = o.orders_id
                                                 WHERE u.user_id = ? and o.orders_paymentStatus=?",$id,'deal');
}


//////////////////////////////////////bill end //////////////////////////////////


//////////////////////////////admin //////////////////////////
function orders_all(){
    return pdo_query("SELECT u.user_id,u.user_fullname,o.orders_day,u.user_email,u.user_address,o.orders_paymentStatus, 
                            COUNT(o.orders_id) as orders FROM  user u 
                            LEFT JOIN  orders o ON o.user_id = u.user_id
                            WHERE o.orders_paymentStatus='deal'
                            GROUP BY u.user_id,u.user_fullname,o.orders_day,u.user_email,u.user_address,o.orders_paymentStatus");
}
function orders_all_ship(){
    return pdo_query("SELECT u.user_id,u.user_fullname,o.orders_day,u.user_email,u.user_address,o.orders_paymentStatus, 
                            COUNT(o.orders_id) as orders FROM  user u 
                            LEFT JOIN  orders o ON o.user_id = u.user_id
                            WHERE o.orders_paymentStatus='ship'
                            GROUP BY u.user_id,u.user_fullname,o.orders_day,u.user_email,u.user_address,o.orders_paymentStatus");
}

function orders_one($id){
    return pdo_query("SELECT * FROM orders o 
                        INNER JOIN orders_detail od ON o.orders_id = od.orders_id
                        INNER JOIN product p ON od.product_id = p.product_id
                        WHERE o.user_id =? AND o.orders_paymentStatus=?",$id,'deal');
}


function totalAdmin($id){
    return pdo_query_one("SELECT SUM(p.product_price) as total FROM product p INNER JOIN orders_detail od ON od.product_id = p.product_id
                                                                          INNER JOIN orders o ON od.orders_id = o.orders_id
                                                                          INNER JOIN user u ON u.user_id =o.user_id
                                                                          WHERE u.user_id = ? AND o.orders_paymentStatus=?",$id,'deal');
}

function ship($idOd){
    return pdo_execute("UPDATE orders SET orders_paymentStatus=?,orders_day=? 
    where orders_id=?",'ship', date('Y-m-d H:i:s'),$idOd);
}

function ship_check($id){
    return pdo_query_one("SELECT * from orders where user_id = ? and orders_paymentStatus = ? ",$id ,'deal');
}


?>