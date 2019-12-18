<?php

if (isset($_POST['bulk_delete_submit'])) {
    $idArr = $_POST['checked_id'];
    $db = new comment();
    foreach($idArr as $id){
        $db->delete_comment($id);
    }
    echo '<script>alert("Đã xoát tất cả bình luận.");
    window.location.assign("admin.php?go=comment");</script>';
}
?>