<?php


class home_setting
{
    var $id_home_setting = null;
    var $title = null;
    var $description = null;
    var $keywords = null;
    var $logo = null;


    public function __construct()
    {
    }

    // Lấy tất cả loại sản phẩm
    function gethome()
    {
        $db = new connect();
        $select = "select * from home_setting ORDER BY id_home_setting DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin setting theo ID
    function getsetting($id)
    {
        $db = new connect();
        $select = "select * from home_setting where id_home_setting=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    //Cập nhật danh mục
    function update_home($title, $description, $keywords, $logo, $id_home_setting)
    {
        $db = new connect();
        $query = "UPDATE home_setting set title='$title', description='$description', keywords='$keywords', logo='$logo'  where id_home_setting='$id_home_setting'";
        $db->exec($query);
    }
    //Update home no image
    function update_home_noimage($title, $description, $keywords, $id_home_setting)
    {
        $db = new connect();
        $query = "UPDATE home_setting set title='$title', description='$description', keywords='$keywords' where id_home_setting='$id_home_setting'";
        $db->exec($query);
    }
    
}