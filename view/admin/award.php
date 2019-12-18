<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db = new award();
    $get_image_db = $db->getawardById($id);
    $img = getcwd().'/'.$path_img_award.$get_image_db['images_award'];
    unlink($img);
    $db->delete_award($id);
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
                        <h4 class="page-title">Danh mục giải thưởng</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lí giải thưởng</li>
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
                                <?php if(!empty($response)) { ?>
                                <div class="alert alert-<?php echo $response["type"]; ?>">
                                <?php echo $response["message"]; ?>
                                </div>
                                <?php }?>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Thêm giải thưởng</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group row">
                                        <form action="admin.php?go=insert_award" method="post" enctype="multipart/form-data">
                                        <label for="fname" class="col-md-12 control-label col-form-label">Upload ảnh:</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control" name="images_award">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        <button type="submit" class="btn btn-primary" name="upload_submit">Lưu lại</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <?php
                                    $db = new award();
                                    $result = $db -> getAllAward();
                                ?>
                                <form name="bulk_action" action="admin.php?go=check_award" method="POST" onsubmit="return deleteConfirm();">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="select_all" id="select_all" value="" /></th>
                                                <th style="text-align:center"><b>Hình ảnh</b></th>
                                                <th style="text-align:center"><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                        extract($result);
                                        echo '
                                            <tr>
                                                <td width="5%"><input type="checkbox" name="checked_id[]" class="checkbox" value="'.$id_award.'"></td>
                                                <td align="center"><img src="uploaded/award/'.$images_award.'"/ width="200px"></td>
                                                <td align="center">
                                                <a href="admin.php?go=award&del='.$id_award.'">
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-lg fa-trash"></i> Xóa</button></a>
                                                </td>
                                            </tr>
                                            ';}?>
                                        </tbody>
                                        <tfoot>
                                        <td>
                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Xóa tất cả mục đã chọn" name="bulk_delete_submit">
                                        Xóa
                                        </button>
                                        </td>
                                        </tfoot>  
                                    </table>
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

