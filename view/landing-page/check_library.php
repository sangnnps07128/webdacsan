<?php

if (isset($_POST['bulk_delete_submit'])) {
    $idArr = $_POST['checked_id'];
    $db = new library();
    foreach($idArr as $id){
        $get_image_db = $db->getlibraryById($id);
        $img = getcwd().'\\'.$path_img_library.$get_image_db['images'];
        unlink($img);
        $db->delete_library($id);
    }
    echo '<script>alert("Users have been deleted successfully.");
    window.location.assign("admin.php?go=library");</script>';
}
?>