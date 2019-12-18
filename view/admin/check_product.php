<?php

if (isset($_POST['bulk_delete_submit'])) {
    $idArr = $_POST['checked_id'];
    $db = new product();
    foreach($idArr as $id){
    $get_image_db = $db->getproductById($id);
    $img = getcwd().'/'.$path_img_product.$get_image_db['image_product'];
    unlink($img);
        $db->delete_product($id);
    }
    echo '<script>alert("Đã xoá sản phẩm đã chọn");
    window.location.assign("admin.php?go=product");</script>';
}
?>