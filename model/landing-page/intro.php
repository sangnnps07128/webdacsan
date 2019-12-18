<?php


class intro
{
    var $id_lp_intro = null;
    var $intro = null;
    var $intro_2 = null;
    var $intro_3 = null;
    var $intro_4 = null;
    var $root = null;


    public function __construct()
    {
    }

    // Lấy tất cả loại sản phẩm
    function getAllintro()
    {
        $db = new connect();
        $select = "select * from lp_intro ORDER BY id_lp_intro DESC";
        $result = $db->getList($select);
        return $result;
    }
    // Lấy Intro
    function getintro()
    {
        $db = new connect();
        $select = "select intro,intro_2,intro_3,intro_4 from lp_intro ORDER BY id_lp_intro DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin danh mục theo ID
    function getintroById($id)
    {
        $db = new connect();
        $select = "select * from lp_intro where id_lp_intro=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm danh mục
    function add_intro($intro,$intro_2,$intro_3,$intro_4,$root)
    {
        $db = new connect();
        $query = "INSERT INTO lp_intro(intro,intro_2,intro_3,intro_4,root) VALUES ('$intro','$intro_2','$intro_3','$intro_4','$root')";
        $db->exec($query);
    }

    //Cập nhật danh mục
    function update_intro($intro,$intro_2,$intro_3,$intro_4,$root,$id_lp_intro)
    {
        $db = new connect();
        $query = "UPDATE lp_intro set intro='$intro', intro_2='$intro_2', intro_3='$intro_3', intro_4='$intro_4', root='$root' where id_lp_intro='$id_lp_intro'";
        $db->exec($query);
    }

    //Xóa danh mục
    function delete_intro($id)
    {
        $db = new connect();
        $query = "delete from lp_intro where id_lp_intro = '$id'";
        $db->exec($query);
    }

    //Đếm số lượng cửa hàng
    // ==================================================
    function countintroList()
    {
        $db = new connect();
        $select = "select count(*) as total from lp_intro";
        $result = $db->getInstance($select);
        return $result;
    }
}