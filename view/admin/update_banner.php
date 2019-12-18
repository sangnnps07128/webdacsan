<?php

if (isset($_GET['id_update'])) {
    $id_update = $_GET['id_update'];
    $db = new banner();
    $print = $db->getbannerById($id_update);
    extract($print);
    }
if (isset($_POST['update'])) {
    // Lay kich thuoc hinh anh
    $fileinfo = @getimagesize($_FILES["images_banner"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "PNG",
        "jpg",
        "JPG",
        "jpeg",
        "JPEG"
    );
    
    // Lay phan mo rong hinh anh
    $file_extension = pathinfo($_FILES["images_banner"]["name"], PATHINFO_EXTENSION);
    
    // Xác thực nhập tệp để kiểm tra nếu không trống
    if (! file_exists($_FILES["images_banner"]["tmp_name"])) {
        $id_banner = $_POST['id_banner'];
            $title_banner = $_POST['title_banner'];
            $des_banner = $_POST['des_banner'];
            $link_banner = $_POST['link_banner'];
            $db = new banner();
            $db->update_banner_noimage($title_banner,$des_banner,$link_banner,$id_banner);
            echo "<script>window.location.assign('admin.php?go=banner');</script>";
    }

    // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "danger",
            "message" => "Vui lòng upload hình ảnh có dạng png,jpg,jpeg"
        );
    } 
    else {
        // $target = "public/site/images/" . basename($_FILES["images_banner"]["name"]);
        if (move_uploaded_file($_FILES['images_banner']['tmp_name'],getcwd().'/'.$path_img_banner.$_FILES['images_banner']['name']))
        {
            $id_banner = $_POST['id_banner'];
            $get_img_banner = $_FILES['images_banner']['name'];
            $title_banner = $_POST['title_banner'];
            $des_banner = $_POST['des_banner'];
            $link_banner = $_POST['link_banner'];
            $db = new banner();
            $db->update_banner($get_img_banner,$title_banner,$des_banner,$link_banner,$id_banner);
            echo "<script>window.location.assign('admin.php?go=banner');</script>";
            }
        else {
            $response = array(
                "type" => "danger",
                "message" => "Lỗi upload hình ảnh."
            );
        }
    }
}
?>
<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Quản lí banner</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cập nhật banner</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Sửa tên banner</h5>
                            <?php if(!empty($response)) { ?>
                                <div class="alert alert-<?php echo $response["type"]; ?>">
                                <?php echo $response["message"]; ?>
                                </div>
                                <?php }?>
                            <form class="forms-sample" action="admin.php?go=update_banner" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tiêu đề banner:</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id_banner" value="<?php echo $id_banner;?>">
                                <input type="text" class="form-control col-md-6" name="title_banner" value="<?php echo $title_banner;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mô tả:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control col-md-6" name="des_banner" rows="5" required><?php echo $des_banner;?></textarea>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">URL:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-6" name="link_banner" value="<?php echo $link_banner;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control col-md-6" name="images_banner" value="<?php echo $images_banner;?>" required>
                            </div>
                            <img src="uploaded/banner/<?php echo $images_banner;?>" class="img-thumbnail mt-3" style="width:100%;height:400px">
                            </div>
                                <a href="admin.php?go=banner" class="btn btn-danger">Quay lại</a>
                                <button name="update" type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>                  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
 <!-- this page js -->

