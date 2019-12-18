<?php


class banner
{
    var $id_banner = null;
    var $images_banner = null;
    var $title_banner = null;
    var $des_banner = null;
    var $link_banner = null;

    public function __construct()
    {
    }

    // Lấy tất cả banner
    function getAllbanner()
    {
        $db = new connect();
        $select = "select * from banner ORDER BY id_banner DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin banner theo ID
    function getbannerById($id)
    {
        $db = new connect();
        $select = "select * from banner where id_banner=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm banner
    function insert_banner($images_banner,$title_banner,$des_banner,$link_banner)
    {
        $db = new connect();
        $query = "INSERT INTO banner(images_banner,title_banner,des_banner,link_banner) VALUES ('$images_banner','$title_banner','$des_banner','$link_banner')";
        $db->exec($query);
    }

    //Cập nhật banner
    function update_banner($images_banner,$title_banner,$des_banner,$link_banner,$id_banner)
    {
        $db = new connect();
        $query = "UPDATE banner set images_banner='$images_banner', title_banner='$title_banner', des_banner = '$des_banner', link_banner='$link_banner' where id_banner='$id_banner'";
        $db->exec($query);
    }
    
    // Update banner no image
    function update_banner_noimage($title_banner,$des_banner,$link_banner,$id_banner)
    {
        $db = new connect();
        $query = "UPDATE banner set title_banner='$title_banner', des_banner = '$des_banner', link_banner='$link_banner' where id_banner='$id_banner'";
        $db->exec($query);
    }
    
    //Xóa banner
    function delete_banner($id)
    {
        $db = new connect();
        $query = "delete from banner where id_banner = '$id'";
        $db->exec($query);
    }

    //Đếm số lượng cửa hàng
    // ==================================================
    function countbannerList()
    {
        $db = new connect();
        $select = "select count(*) as total from banner";
        $result = $db->getInstance($select);
        return $result;
    }
}