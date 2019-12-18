<?php
class contact
{
    var $id_contact = null;
    var $name = null;
    var $email = null;
    var $phone = null;
    var $content = null;
    public function __construct()
    {
    }
    // ==================================================
    //Lấy danh sách bình luận
    // ==================================================

    function getcontactbyid($id)
    {
        $db = new connect();
        $select = "SELECT b.*, h.name_product FROM contact b JOIN product h ON h.id_product=b.id_product WHERE b.id_product=$id ORDER BY id_contact DESC LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }

    // ==================================================
    //Đếm số lượng cửa hàng
    // ==================================================
    function count_cmt()
    {
        $db = new connect();
        $select = "select count(*) as Totalcontact from contact";
        $result = $db->getInstance($select);
        return $result;
    }
    // ==================================================
    // Thêm bình luận
    // ==================================================
    function insert_contact($name, $email, $phone, $content)
    {
        $db = new connect();
        $query = "INSERT INTO contact(name, email, phone, content) VALUES ('$name', '$email', '$phone', '$content')";
        $db->exec($query);
    }
    
    //Xóa contact
    function delete_contact($id)
    {
        $db = new connect();
        $query = "delete from contact where id_contact = '$id'";
        $db->exec($query);
    }
    // Lấy tất cả contact
    function get_all_contact()
    {
        $db = new connect();
        $select = "select * from contact ORDER BY id_contact DESC";
        $result = $db->getList($select);
        return $result;
    }
    //Cập nhật contact new
    function update_contact_new($id_contact)
    {
        $db = new connect();
        $query = "UPDATE contact set status=1 where id_contact='$id_contact'";
        $db->exec($query);
    }
    
    // ==================================================
    //Đếm số lượng contact mới
    // ==================================================
    function count_contact_new()
    {
        $db = new connect();
        $select = "select count(*) as new_contacts from contact WHERE status=0";
        $result = $db->getInstance($select);
        return $result;
    }

}


?>