<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db = new orders_lp();
    $db->delete_order($id);
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
                        <h4 class="page-title">Quản lí đơn hàng</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item"><a href="/admin.php">Landing Page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lí đơn hàng</li>
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
                                <h5 class="card-title">Danh sách đơn hàng</h5>
                                <?php
                                    $db = new orders_lp();
                                    $result = $db -> getAllOrder();
                                    
                                ?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Tên</b></th>
                                                <th><b>Điện thoại</b></th>
                                                <th><b>Địa chỉ</b></th>
                                                <th><b>Nội dung</b></th>
                                                <th><b>Ngày đặt</b></th>
                                                <th><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                        extract($result);
                                        $db->update_order_new($id_lp_order);
                                        echo '
                                            <tr>
                                                <td>'.$name.'</td>
                                                <td>'.$phone.'</td>
                                                <td>'.$address.'</td>
                                                <td>'.$text.'</td>
                                                <td>'.$date.'</td>
                                                <td>
                                                <a href="admin.php?go=order&del='.$id_lp_order.'">
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

