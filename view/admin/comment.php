<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db = new comment();
    $db->delete_comment($id);
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
                        <h4 class="page-title">Danh sách bình luận</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bình luận</li>
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
                                <h5 class="card-title">Danh sách thông tin bình luận</h5>
                                <?php
                                    $db = new comment();
                                    $result = $db ->get_all_comment();
                                ?>
                                <form name="bulk_action" action="admin.php?go=check_comment" method="POST" onsubmit="return deleteConfirm();">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="select_all" id="select_all" value="" /></th>
                                                <th><b>Tên</b></th>
                                                <th><b>Email</b></th>
                                                <th><b>Nội dung</b></th>
                                                <th><b>Sản phẩm</b></th>
                                                <th><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                        extract($result);
                                        $db -> update_comment_new($id_comment);
                                        echo '
                                            <tr>
                                                <td width="5%"><input type="checkbox" name="checked_id[]" class="checkbox" value="'.$id_comment.'"></td>
                                                <td>'.$name_comment.'</td>
                                                <td>'.$email_comment.'</td>
                                                <td>'.$content.'</td>
                                                <td><a target="_blank" href="/dac-san/'.$id_product.'.html">chi tiết</a></td>
                                                <td>
                                                <a href="admin.php?go=comment&del='.$id_comment.'">
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

