<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db = new evaluate();
    $get_image_db = $db->getevaluateById($id);
    $img = getcwd().'/'.$path_img_evaluate.$get_image_db['images'];
    unlink($img);
    $db->delete_evaluate($id);
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
                        <h4 class="page-title">Quản lí đánh giá khách hàng</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item"><a href="/admin.php">Landing Page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đánh giá khách hàng</li>
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
                                <h5 class="card-title"></h5>
                                <p class="text-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class=" fas fa-plus-circle"></i>  Thêm mới
                                </button>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Thêm banner mới</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group row">
                                        <form action="admin.php?go=insert_evaluate" method="post" enctype="multipart/form-data">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Tên:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Nội dung:</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Hình ảnh:</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" name="images" required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        <button type="submit" class="btn btn-primary" name="submit_evaluate">Lưu lại</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                
                                <?php
                                    $db = new evaluate();
                                    $result = $db -> getAllevaluate();
                                ?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Họ và tên</b></th>
                                                <th><b>Nội dung</b></th>
                                                <th><b>Hình ảnh</b></th>
                                                <th><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                        extract($result);
                                        echo '
                                            <tr>
                                                <td>'.$name.'</td>
                                                <td>'.$text.'</td>
                                                <td><img src="uploaded/landing-page/evaluate/'.$images.'"/ width="100px"></td>
                                                <td>
                                                <a href="admin.php?go=update_evaluate&id_update='.$id_lp_evaluate.'">
                                                <button type="button" class="btn btn-success btn-sm mr-2"><i class="fa fa-lg fa-edit mr-2"></i> Sửa</button></a>
                                                <a href="admin.php?go=evaluate&del='.$id_lp_evaluate.'">
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-lg fa-trash"></i> Xóa</button></a>
                                                </td>
                                            </tr>
                                            ';}?>
                                        </tbody>
                                    </table>
                                </div>

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

