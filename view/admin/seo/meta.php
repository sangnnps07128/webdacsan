<?php
    $db = new home_setting();
    $print = $db->getsetting(1);
    extract($print);

if (isset($_POST['update'])) {
    // Lay kich thuoc hinh anh
    $fileinfo = @getimagesize($_FILES["logo"]["tmp_name"]);
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
    $file_extension = pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
    
    // Xác thực nhập tệp để kiểm tra nếu không trống
    if (! file_exists($_FILES["logo"]["tmp_name"])) {
            $id_home_setting = $_POST['id_home_setting'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $keywords = $_POST['keywords'];
            $db = new home_setting();
            $db->update_home_noimage($title, $description, $keywords, $id_home_setting);
            echo "<script>window.location.assign('admin.php?go=setting');</script>";
    }

    // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "danger",
            "message" => "Vui lòng upload hình ảnh có dạng png,jpg,jpeg"
        );
    } 
    else {
        if (move_uploaded_file($_FILES['logo']['tmp_name'],getcwd().'/'.$path_img_logo.$_FILES['logo']['name']))
        {
            $id_home_setting = $_POST['id_home_setting'];
            $get_logo = $_FILES['logo']['name'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $keywords = $_POST['keywords'];
            $db = new home_setting();
            $db->update_home($title, $description, $keywords, $get_logo, $id_home_setting);
            echo '<script>alert("'.getcwd().'/'.$path_img_logo.$_FILES['logo']['name'].'");</script>';
            // echo "<script>window.location.assign('admin.php?go=setting');</script>";
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
                        <h4 class="page-title">Cài đặt website</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cài đặt website</li>
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
                            <form class="forms-sample" action="admin.php?go=setting" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="1" name="id_home_setting">
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tiêu đề:</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id_account" value="<?php echo $title;?>">
                                <input type="text" class="form-control col-md-6" name="title" value="<?php echo $title;?>">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mô tả (155 kí tự):</label>
                            <div class="col-sm-9">
                                <textarea class="form-control col-md-6" name="description" rows="3"><?php echo $description;?></textarea>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Từ khóa (160 kí tự) :</label>
                            <div class="col-sm-9">
                                <textarea class="form-control col-md-6" name="keywords" rows="3"><?php echo $keywords;?></textarea>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Upload logo:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control col-md-6" name="logo">
                                <div style="width:50%"><img src="../controller/uploaded/<?php echo $logo;?>" class="img-thumbnail mt-3"/></div>
                            </div>
                            </div>
                                <a href="admin.php?go=account" class="btn btn-danger">Quay lại</a>
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

