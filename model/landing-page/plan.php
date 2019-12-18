<?php


class plan
{
    var $id_lp_plan = null;
    var $title = null;
    var $title_plan = null;
    var $text = null;
    var $images = null;

    public function __construct()
    {
    }

    // Lấy tất cả plan
    function getAllplan()
    {
        $db = new connect();
        $select = "select * from lp_plan ORDER BY id_lp_plan ASC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin plan theo ID
    function getplanById($id)
    {
        $db = new connect();
        $select = "select * from lp_plan where id_lp_plan=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm plan
    function insert_plan($title, $text, $images)
    {
        $db = new connect();
        $query = "INSERT INTO plan(title,text,images) VALUES ('$title','$text','$images')";
        $db->exec($query);
    }

    //Cập nhật plan
    function update_plan($title, $text, $images, $id_lp_plan)
    {
        $db = new connect();
        $query = "UPDATE lp_plan set title='$title', text='$text', images = '$images' where id_lp_plan='$id_lp_plan'";
        $db->exec($query);
    }
    
    //Cập nhật plan no image
    function update_plan_noimage($title, $text, $id_lp_plan)
    {
        $db = new connect();
        $query = "UPDATE lp_plan set title='$title', text='$text' where id_lp_plan='$id_lp_plan'";
        $db->exec($query);
    }

    //Xóa plan
    function delete_plan($id)
    {
        $db = new connect();
        $query = "delete from lp_plan where id_lp_plan = '$id'";
        $db->exec($query);
    }

    //Đếm số lượng cửa hàng
    // ==================================================
    function countplanList()
    {
        $db = new connect();
        $select = "select count(*) as total from lp_plan";
        $result = $db->getInstance($select);
        return $result;
    }
}