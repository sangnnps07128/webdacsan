<?php

if (isset($_GET['id_update'])) {
    $id = $_GET['id_update'];
    $db = new product();
    $print = $db->getproductById($id);
    extract($print);
    };
if (isset($_POST['update'])) {
    // if(($_FILES["image_product"]) && ($_FILES["image_product_2"]) == ""){
           
    // }
    // Lay kich thuoc hinh anh
    $fileinfo = @getimagesize($_FILES["image_product"]["tmp_name"]);
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
    $file_extension = pathinfo($_FILES["image_product"]["name"], PATHINFO_EXTENSION);
    
    // Xác thực nhập tệp để kiểm tra nếu không trống
    if (! file_exists($_FILES["image_product"]["tmp_name"])) {
         $id_product = $_POST['id_product'];
            $name_product = $_POST['name_product'];
            $price_product = $_POST['price_product'];
            $sale_product = $_POST['sale_product'];
            $describe_product = $_POST['describe_product'];
            if(isset($_POST['vip_product'])) {
               if($_POST['vip_product']) {
                    $vip_product = 1;
                }else {
                    $vip_product = 0;
                }
                }else {
                    $vip_product = 0;
                }
            $id_category = $_POST['id_category'];
            $db = new product();
            $db->update_product_noimage($name_product, $price_product, $sale_product, $describe_product, $vip_product, $id_category, $id_product);
            echo "<script>window.location.assign('admin.php?go=product')</script>";
    }

    // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "danger",
            "message" => "Vui lòng upload hình ảnh có dạng png,jpg,jpeg"
        );
    } 
    else {
        // $target = "public/site/images/" . basename($_FILES["image_product"]["name"]);
        if (move_uploaded_file($_FILES['image_product']['tmp_name'],getcwd().'/'.$path_img_product.$_FILES['image_product']['name']))
        {
            $id_product = $_POST['id_product'];
            $name_product = $_POST['name_product'];
            $price_product = $_POST['price_product'];
            $sale_product = $_POST['sale_product'];
            $image_product = $_FILES['image_product']['name'];
            $image_product_2 = $_FILES['image_product_2']['name'];
            $describe_product = $_POST['describe_product'];
            if(isset($_POST['vip_product'])) {
               if($_POST['vip_product']) {
                    $vip_product = 1;
                }else {
                    $vip_product = 0;
                }
                }else {
                    $vip_product = 0;
                }
            $id_category = $_POST['id_category'];
            $db = new product();
            move_uploaded_file($_FILES['image_product_2']['tmp_name'],getcwd().'/'.$path_img_product.$_FILES['image_product_2']['name']);
            $db->update_product($name_product, $price_product, $sale_product, $image_product, $image_product_2,  $describe_product, $vip_product, $id_category, $id_product);
            echo "<script>window.location.assign('admin.php?go=product')</script>";
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
                        <h4 class="page-title">Quản lí sản phẩm</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sửa tên sản phẩm</li>
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
                            <h5 class="card-title">Sửa tên sản phẩm</h5>
                            <?php if(!empty($response)) { ?>
                                <div class="alert alert-<?php echo $response["type"]; ?>">
                                <?php echo $response["message"]; ?>
                                </div>
                                <?php }?>
                            <form enctype="multipart/form-data" class="forms-sample" action="admin.php?go=update_product" method="post">
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id_product" value="<?php echo $id_product;?>"> 
                                        <input type="text" class="form-control" name="name_product" value="<?php echo $name_product;?>" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Chọn danh mục</label>
                                    <div class="col-sm-9">
                                        <select name="id_category" class="form-control">
                                                        <?php $dbc = new category();
                                                        $result = $dbc ->getAllCategory();
                                                        foreach ($result as $result){
                                                        extract($result);
                                                        ?>
                                                        <option value="<?php echo $id_category; ?>"><?php echo $name_category; ?></option>
                                                            <?php } ?>
                                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Giá tiền (VNĐ)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="price_product" value="<?php echo $price_product;?>" required>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Giảm giá (%)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="sale_product" value="<?php echo $sale_product;?>" required>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh</label>
                                <div style="width:350px"><img src="uploaded/product/<?php echo $image_product;?>" class=img-thumbnail mt-3"/></div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image_product">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh 2</label>
                                <div style="width:350px"><img src="uploaded/product/<?php echo $image_product_2;?>" class="img-thumbnail mt-3"/></div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image_product_2">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="post_content" name="describe_product" rows="5" required><?php echo $describe_product;?></textarea>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sản phẩm nổi bật</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" name="vip_product"> 
                                </div>
                                </div>
                                    <a href="admin.php?go=product" class="btn btn-danger">Quay lại</a>
                                    <input type="submit" name="update" class="btn btn-primary" value="Chỉnh sửa">
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

