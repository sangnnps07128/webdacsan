<?php
class comment
{
    var $id_commnet = null;
    var $id_account = null;
    var $id_product = null;
    var $content = null;
    public function __construct()
    {
    }
    // ==================================================
    //Lấy danh sách bình luận
    // ==================================================

    function getcommentbyid($id)
    {
        $db = new connect();
        $select = "SELECT b.*, h.name_product FROM comment b JOIN product h ON h.id_product=b.id_product WHERE b.id_product=$id ORDER BY id_comment DESC LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }

    // ==================================================
    //Đếm số lượng cửa hàng
    // ==================================================
    function count_cmt()
    {
        $db = new connect();
        $select = "select count(*) as TotalComment from comment";
        $result = $db->getInstance($select);
        return $result;
    }
    // ==================================================
    // Thêm bình luận
    // ==================================================
    function insert_comment($id_account, $name_comment, $id_product, $content, $email_comment)
    {
        $db = new connect();
        $query = "INSERT INTO comment(id_account, name_comment, id_product, content, email_comment) VALUES ('$id_account', '$name_comment', '$id_product', '$content','$email_comment')";
        $db->exec($query);
    }
    //Xóa comment
    function delete_comment($id)
    {
        $db = new connect();
        $query = "delete from comment where id_comment = '$id'";
        $db->exec($query);
    }
    // Lấy tất cả comment
    function get_all_comment()
    {
        $db = new connect();
        $select = "select * from comment ORDER BY id_comment DESC";
        $result = $db->getList($select);
        return $result;
    }

    //Cập nhật comment new
    function update_comment_new($id_comment)
    {
        $db = new connect();
        $query = "UPDATE comment set status=1 where id_comment='$id_comment'";
        $db->exec($query);
    }
    
    // ==================================================
    //Đếm số lượng bình luận mới
    // ==================================================
    function count_comment_new()
    {
        $db = new connect();
        $select = "select count(*) as new_comments from comment WHERE status=0";
        $result = $db->getInstance($select);
        return $result;
    }
}


?>