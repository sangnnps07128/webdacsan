<?php

if (isset($_POST['bulk_delete_submit'])) {
    $idArr = $_POST['checked_id'];
    $db = new award();
    foreach($idArr as $id){
        $get_image_db = $db->getawardById($id);
        $img = getcwd().'/'.$path_img_award.$get_image_db['images_award'];
        unlink($img);
        $db->delete_award($id);
    }
    echo '<script>alert("Đã xóa tất cả giải thưởng.");
    window.location.assign("admin.php?go=award");</script>';
}
?>