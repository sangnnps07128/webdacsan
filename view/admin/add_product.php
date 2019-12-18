
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
                                    <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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
                            <h5 class="card-title">Thêm sản phẩm mới</h5>
                            <?php if(!empty($response)) { ?>
                                <div class="alert alert-<?php echo $response["type"]; ?>">
                                <?php echo $response["message"]; ?>
                                </div>
                                <?php }?>
                            <form enctype="multipart/form-data" class="forms-sample" action="admin.php?go=acction_insert_product" method="post">
                                            <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name_product" placeholder="Nhập tên sản phẩm...">
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
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Giá tiền</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="price_product" placeholder="Nhập số tiền (không chứa dấu . và , )">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Giảm giá (tính theo %)</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" maxlength="100" size="100" name="sale_product" placeholder="Nhập số (không chứa dấu %)">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image_product" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh 2(tải ở trang chủ)</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image_product_2" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mô tả (160 kí tự)</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3" name="des_seo" placeholder="Mô tả SEO bài viết"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Từ khóa (155 kí tự)</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3" name="key_seo" placeholder="Từ khóa SEO bài viết"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mô tả chi tiết</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="post_content" rows="4" name="describe_product"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Phổ biến</label>
                                    <div class="col-sm-9">
                                        <input type="checkbox" class="mt-2" name="vip_product"> 
                                    </div>
                                    </div>
                                        <a class="btn btn-primary" href="?go=product">Quay lại</a>
                                        <button name="insert" type="Submit" class="btn btn-success">Thêm mới</button>
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


