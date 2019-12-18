<?php
// if (isset($_GET['del'])) {
//     $id = $_GET['del'];
//     $db = new intro();
//     $db->delete_intro($id);
// }
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
                                <h5 class="card-title"></h5>
                                <?php
                                    $db = new intro();
                                    $result = $db -> getAllintro();
                                ?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Nội dung 1</b></th>
                                                <th><b>Nội dung 2</b></th>
                                                <th><b>Nội dung 3</b></th>
                                                <th><b>Nội dung 4</b></th>
                                                <th><b>Nguồn gốc</b></th>
                                                <th><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                        extract($result);
                                        echo '
                                            <tr>
                                                <td>'.$intro.'</td>
                                                <td>'.$intro_2.'</td>
                                                <td>'.$intro_3.'</td>
                                                <td>'.$intro_4.'</td>
                                                <td width="40%">'.$root.'</td>
                                                <td>
                                                <a href="admin.php?go=update_intro&id_update='.$id_lp_intro.'">
                                                <button type="button" class="btn btn-success btn-sm mr-2"><i class="fa fa-lg fa-edit mr-2"></i> Sửa</button></a>
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

