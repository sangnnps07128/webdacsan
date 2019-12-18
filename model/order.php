<?php

class orders
{
    var $id_order = null;
    var $id_account = null;
    var $email = null;
    var $full_name = null;
    var $phone = null;
    var $address = null;
    var $message = null;
    var $date_order = null;
    var $total = null;
    var $active = 0;
    public function __construct()
    {
    }
    //Lấy tất cả đơn hàng
     function getAllOrder()
    {
        $db = new connect();
        $select = "select * from orders ORDER BY id_order DESC";
        $result = $db->getList($select);
        return $result;
    }
    // ==================================================
    //Thêm đơn hàng
    // ==================================================

    function add_orders($id_account, $email, $full_name, $phone, $address, $message, $date_order, $total)
    {
        $db = new connect();
        $query = "INSERT INTO orders(id_account, email, full_name, phone, address, message, date_order, total) VALUES ('$id_account', '$email', '$full_name', '$phone', '$address', '$message', '$date_order', '$total')";
        $db->exec($query);
        $id_order = $db->getInstance("select id_order from orders order by id_order desc limit 1");
        return $id_order[0];
    }
}

class orders_detail
{
	var $id_orders_detail = null;
	var $id_order = null;
	var $id_product = null;
	var $amount = null;
	public function __construct()
    {
    }

    // ==================================================
    //Thêm chi tiết đơn hàng
    // ==================================================

    function add_orders_detail($id_order, $id_product, $amount)
    {
        $db = new connect();
        $query = "INSERT INTO orders_detail(id_order, id_product, amount) VALUES ('$id_order', '$id_product', '$amount')";
        $db->exec($query);
    }
    
    // Lấy ds order by id account
    function getIdOrderbyAcc($id_account){
        $db = new connect();
        $select = "select * from orders where id_account=$id_account";
        $result = $db->getList($select);
        return $result;
    }
    // lấy danh sách sản phẩm theo ID
    function getListODbyID($id_order){
        $db = new connect();
        $query = "select * from orders_detail where id_order=$id_order order by id_orders_detail desc";
        $result = $db ->getList($query);
        return $result;
    }
    //Xác nhận đơn hàng
    function cart_confirm($id_order){
    $db = new connect();
        $query = "UPDATE orders set active = 1 WHERE id_order=$id_order";
        $db->exec($query);
    }
    // Hủy đơn hàng
    function cancel_cart($id_order){
    $db = new connect();
        $query = "UPDATE orders set active = 2 WHERE id_order=$id_order";
        $db->exec($query);
    }
}