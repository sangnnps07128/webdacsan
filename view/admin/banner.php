<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db = new banner();
    $get_image_db = $db->getbannerById($id);
    $img = getcwd().'/'.$path_img_award.$get_image_db['images_banner'];
    unlink($img);
    $db->delete_banner($id);
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
                        <h4 class="page-title">Danh mục banner</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lí banner</li>
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
                                        <form action="admin.php?go=insert_banner" method="post" enctype="multipart/form-data">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Tiêu đề:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="title_banner" placeholder="Nhập tiêu đề...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Mô tả:</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="des_banner"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Đường dẫn:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="link_banner" placeholder="Mẫu: http://websitecuaban.com/danh-muc/ten-san-pham">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Hình ảnh:</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" name="images_banner" required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        <button type="submit" class="btn btn-primary" name="submit_banner">Lưu lại</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                
                                <?php
                                    $db = new banner();
                                    $result = $db -> getAllbanner();
                                ?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Tiêu đề</b></th>
                                                <th><b>Mô tả</b></th>
                                                <th><b>URL</b></th>
                                                <th><b>Hình ảnh</b></th>
                                                <th><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                        extract($result);
                                        echo '
                                            <tr>
                                                <td>'.$title_banner.'</td>
                                                <td>'.$des_banner.'</td>
                                                <td>'.$link_banner.'</td>
                                                <td><img src="uploaded/banner/'.$images_banner.'"/ width="400px"></td>
                                                <td>
                                                <a href="admin.php?go=update_banner&id_update='.$id_banner.'">
                                                <button type="button" class="btn btn-success btn-sm mr-2"><i class="fa fa-lg fa-edit mr-2"></i> Sửa</button></a>
                                                <a href="admin.php?go=banner&del='.$id_banner.'">
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

