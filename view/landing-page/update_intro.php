<?php

if (isset($_GET['id_update'])) {
    $id_update = $_GET['id_update'];
    $db = new intro();
    $print = $db->getintroById($id_update);
    extract($print);
    }
if (isset($_POST['update_intro'])) {
    $id_lp_intro = $_POST['id_lp_intro'];
    $intro = $_POST['intro'];
    $intro_2 = $_POST['intro_2'];
    $intro_3 = $_POST['intro_3'];
    $intro_4 = $_POST['intro_4'];
    $root = $_POST['root'];
    $db = new intro();
    $db->update_intro($intro,$intro_2,$intro_3,$intro_4,$root,$id_lp_intro);
    echo "<script>window.location.assign('admin.php?go=intro');</script>";
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
                        <h4 class="page-title">Quản lí giới thiệu</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                <li class="breadcrumb-item"><a href="/admin.php">Landing Page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lí giới thiệu</li>
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
                            <h5 class="card-title">Sửa giới thiệu</h5>
                            <form action="admin.php?go=update_intro&id_update=<?php echo $id_lp_intro;?>" method="post">
                            <input type="hidden" name="id_lp_intro" value="<?php echo $id_lp_intro;?>">
                            <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Nội dung:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="intro" value="<?php echo $intro;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Nội dung 2:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="intro_2" value="<?php echo $intro_2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Nội dung 3:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="intro_3" value="<?php echo $intro_3;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Nội dung 4:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="intro_4" value="<?php echo $intro_4;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Nguồn gốc:</label>
                                        <div class="col-md-12">
                                            <textarea rows="10" class="form-control" name="root"><?php echo $root;?>"</textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="?go=intro" class="btn btn-secondary">Hủy</a>
                                        <button type="submit" class="btn btn-primary" name="update_intro">Lưu lại</button>
                                    </div>
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

