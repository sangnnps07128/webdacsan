<?php


class evaluate
{
    var $id_lp_evaluate = null;
    var $name = null;
    var $text = null;
    var $images = null;

    public function __construct()
    {
    }

    // Lấy tất cả evaluate
    function getAllevaluate()
    {
        $db = new connect();
        $select = "select * from lp_evaluate ORDER BY id_lp_evaluate DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin evaluate theo ID
    function getevaluateById($id)
    {
        $db = new connect();
        $select = "select * from lp_evaluate where id_lp_evaluate=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm evaluate
    function insert_evaluate($name, $text, $images)
    {
        $db = new connect();
        $query = "INSERT INTO lp_evaluate(name, text, images) VALUES ('$name','$text','$images')";
        $db->exec($query);
    }

    //Cập nhật evaluate
    function update_evaluate($name, $text, $images, $id_lp_evaluate)
    {
        $db = new connect();
        $query = "UPDATE lp_evaluate set name='$name', text='$text', images = '$images' where id_lp_evaluate='$id_lp_evaluate'";
        $db->exec($query);
    }
    
    //Cập nhật evaluate no image
    function update_evaluate_noimage($name, $text, $id_lp_evaluate)
    {
        $db = new connect();
        $query = "UPDATE lp_evaluate set name='$name', text='$text' where id_lp_evaluate='$id_lp_evaluate'";
        $db->exec($query);
    }

    //Xóa evaluate
    function delete_evaluate($id)
    {
        $db = new connect();
        $query = "delete from lp_evaluate where id_lp_evaluate = '$id'";
        $db->exec($query);
    }

    //Đếm số lượng cửa hàng
    // ==================================================
    function countevaluateList()
    {
        $db = new connect();
        $select = "select count(*) as total from evaluate";
        $result = $db->getInstance($select);
        return $result;
    }
}