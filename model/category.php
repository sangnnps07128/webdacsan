<?php


class category
{
    var $id_category = null;
    var $name_category = null;


    public function __construct()
    {
    }

    // Lấy tất cả loại sản phẩm
    function getAllCategory()
    {
        $db = new connect();
        $select = "select * from category ORDER BY id_category DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Lấy thông tin danh mục theo ID
    function getCategoryById($id)
    {
        $db = new connect();
        $select = "select * from category where id_category=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // Thêm danh mục
    function add_category($name_category)
    {
        $db = new connect();
        $query = "INSERT INTO category(name_category) VALUES ('$name_category')";
        $db->exec($query);
    }

    //Cập nhật danh mục
    function update_category($name_category ,$id_category)
    {
        $db = new connect();
        $query = "UPDATE category set name_category='$name_category' where id_category='$id_category'";
        $db->exec($query);
    }

    //Xóa danh mục
    function delete_category($id)
    {
        $db = new connect();
        $query = "delete from category where id_category = '$id'";
        $db->exec($query);
    }

    //Đếm số lượng cửa hàng
    // ==================================================
    function countCategoryList()
    {
        $db = new connect();
        $select = "select count(*) as total from category";
        $result = $db->getInstance($select);
        return $result;
    }
}