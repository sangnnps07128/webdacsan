<?php

class orders_lp
{
    var $id_lp_order = null;
    var $name = null;
    var $phone = null;
    var $address = null;
    var $text = null;
    var $date = null;
    var $status = null;

    public function __construct()
    {
    }
    //Lấy tất cả đơn hàng
     function getAllOrder()
    {
        $db = new connect();
        $select = "select * from lp_order ORDER BY id_lp_order DESC";
        $result = $db->getList($select);
        return $result;
    }
    //Cập nhật order new
    function update_order_new($id_lp_order)
    {
        $db = new connect();
        $query = "UPDATE lp_order set status=1 where id_lp_order='$id_lp_order'";
        $db->exec($query);
    }
    // ==================================================
    //Thêm đơn hàng
    // ==================================================

    function add_orders($name, $phone, $address, $text, $date_order)
    {
        $db = new connect();
        $query = "INSERT INTO lp_order(name, phone, address, text, date) VALUES ('$name','$phone','$address','$text','$date_order')";
        $db->exec($query);
    }

    // ==================================================
    //Xóa đơn hàng
    // ==================================================
    function delete_order($id)
    {
        $db = new connect();
        $query = "delete from lp_order where id_lp_ordder = '$id'";
        $db->exec($query);
    }



    // ==================================================
    //Đếm số lượng đơn hàng
    // ==================================================
    function count_order()
    {
        $db = new connect();
        $select = "select count(*) as TotalAccount from lp_order";
        $result = $db->getInstance($select);
        return $result;
    }
    
    // ==================================================
    //Đếm số lượng đơn hàng mới
    // ==================================================
    function count_order_new()
    {
        $db = new connect();
        $select = "select count(*) as new_orders from lp_order WHERE status=0";
        $result = $db->getInstance($select);
        return $result;
    }

    // ==================================================
    //Đếm số lượng đơn hàng mới
    // ==================================================
    function count_order_old()
    {
        $db = new connect();
        $select = "select count(*) as old_orders from lp_order WHERE status=0";
        $result = $db->getInstance($select);
        return $result;
    }
}
