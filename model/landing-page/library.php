<?php
class library
{
    var $id_lp_library = null;
    var $images = null;


    public function __construct()
    {
    }

    // Lấy tất cả
    function getlibrary()
    {
        $db = new connect();
        $select = "select * from lp_library ORDER BY id_lp_library DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin giải thưởng theo ID
    function getlibraryById($id)
    {
        $db = new connect();
        $select = "select * from lp_library where id_lp_library=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm giải thưởng
    function insert_library($images)
    {
        $db = new connect();
        $query = "INSERT INTO lp_library(images) VALUES ('$images')";
        $db->exec($query);
    }


    //Xóa giải thưởng
    function delete_library($id)
    {
        $db = new connect();
        $query = "delete from lp_library where id_lp_library = '$id'";
        $db->exec($query);
    }

}