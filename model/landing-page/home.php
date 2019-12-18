<?php


class lp_setting
{
    var $id_lp_setting = null;
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
        $select = "select * from lp_setting_setting ORDER BY id_lp_setting DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin setting theo ID
    function getsetting($id)
    {
        $db = new connect();
        $select = "select * from lp_setting where id_lp_setting=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    //Cập nhật danh mục
    function update_home($title, $description, $keywords, $logo, $id_home_setting)
    {
        $db = new connect();
        $query = "UPDATE lp_setting set title='$title', description='$description', keywords='$keywords', logo='$logo'  where id_lp_setting='$id_lp_setting'";
        $db->exec($query);
    }
    //Update home no image
    function update_home_noimage($title, $description, $keywords, $id_home_setting)
    {
        $db = new connect();
        $query = "UPDATE lp_setting set title='$title', description='$description', keywords='$keywords' where id_lp_setting='$id_lp_setting'";
        $db->exec($query);
    }
    
}