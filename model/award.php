<?php


class award
{
    var $id_award = null;
    var $images_award = null;


    public function __construct()
    {
    }

    // Lấy tất cả
    function getAllAward()
    {
        $db = new connect();
        $select = "select * from award ORDER BY id_award DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin giải thưởng theo ID
    function getawardById($id)
    {
        $db = new connect();
        $select = "select * from award where id_award=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm giải thưởng
    function insert_award($images_award)
    {
        $db = new connect();
        $query = "INSERT INTO award(images_award) VALUES ('$images_award')";
        $db->exec($query);
    }


    //Xóa giải thưởng
    function delete_award($id)
    {
        $db = new connect();
        $query = "delete from award where id_award = '$id'";
        $db->exec($query);
    }

}