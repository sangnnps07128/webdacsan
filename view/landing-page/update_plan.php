<?php

if (isset($_GET['id_update'])) {
    $id_update = $_GET['id_update'];
    $db = new plan();
    $print = $db->getplanById($id_update);
    extract($print);
    }
if (isset($_POST['update'])) {
    // Lay kich thuoc hinh anh
    $fileinfo = @getimagesize($_FILES["images"]["tmp_name"]);
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
    $file_extension = pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION);
    
    // Xác thực nhập tệp để kiểm tra nếu không trống
    if (! file_exists($_FILES["images"]["tmp_name"])) {
            $id_lp_plan = $_POST['id_lp_plan'];
            $name = $_POST['title'];
            $text = $_POST['text'];
            $db = new plan();
            $db->update_plan_noimage($title, $text, $id_lp_plan);
            echo "<script>window.location.assign('admin.php?go=plan');</script>";
    }

    // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "danger",
            "message" => "Vui lòng upload hình ảnh có dạng png,jpg,jpeg"
        );
    } 
    else {
        if (move_uploaded_file($_FILES['images']['tmp_name'],getcwd().'\\'.$path_img_plan.$_FILES['images']['name']))
        {
            $id_lp_plan = $_POST['id_lp_plan'];
            $get_img_plan = $_FILES['images']['name'];
            $name = $_POST['title'];
            $text = $_POST['text'];
            $db = new plan();
            $db->update_plan($title, $text, $get_img_plan, $id_lp_plan);
            echo "<script>window.location.assign('admin.php?go=plan');</script>";
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
                        <h4 class="page-title">Quản lí quy trình</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                <li class="breadcrumb-item"><a href="/admin.php">landing Page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lí quy trình</li>
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
                            <h5 class="card-title">Sửa Quy Trình</h5>
                            <?php if(!empty($response)) { ?>
                                <div class="alert alert-<?php echo $response["type"]; ?>">
                                <?php echo $response["message"]; ?>
                                </div>
                                <?php }?>
                            <form class="forms-sample" action="admin.php?go=update_plan" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tiêu đề:</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id_lp_plan" value="<?php echo $id_lp_plan;?>">
                                <input type="text" class="form-control col-md-6" name="title" value="<?php echo $title;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nội dung:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-6" name="text" value="<?php echo $text;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control col-md-6" name="images" value="<?php echo $images;?>" required>
                            </div>
                            <img src="uploaded/landing-page/plan/<?php echo $images;?>" class="img-thumbnail mt-3" style="width:20%;height:40%">
                            </div>
                                <a href="admin.php?go=plan" class="btn btn-danger">Quay lại</a>
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

