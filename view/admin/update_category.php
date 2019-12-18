<?php

if (isset($_GET['id_update'])) {
    $id_update = $_GET['id_update'];
    $db = new category();
    $print = $db->getCategoryById($id_update);
    extract($print);
    }
if (isset($_POST['update'])) {
           $id_category = $_POST['id_category'];
           $name_category = $_POST['name_category'];
    $db = new category();
    $db->update_category($name_category ,$id_category);
    echo "<script>window.location.assign('admin.php?go=category');</script>";
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
                        <h4 class="page-title">Quản lí danh mục</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cập nhật danh mục</li>
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
                            <h5 class="card-title">Sửa tên danh mục</h5>
                            <form class="forms-sample" action="admin.php?go=update_category" method="post">
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tên danh mục:</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id_category" value="<?php echo $id_category;?>">
                                <input type="text" class="form-control col-md-6" name="name_category" value="<?php echo $name_category;?>">
                            </div>
                            </div>
                                <a href="admin.php?go=category" class="btn btn-danger">Quay lại</a>
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

