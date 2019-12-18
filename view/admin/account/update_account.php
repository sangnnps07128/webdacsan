<?php

if (isset($_GET['id_update'])) {
    $id_update = $_GET['id_update'];
    $db = new account();
    $print = $db->getaccountById($id_update);
    extract($print);
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
                        <h4 class="page-title">Cập nhật tài khoản</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cập nhật tài khoản</li>
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
                            <form class="forms-sample" action="admin.php?go=action_insert_account" method="post">
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Họ & Tên:</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id_account" value="<?php echo $id_account;?>">
                                <input type="text" class="form-control col-md-6" name="name_account" value="<?php echo $name_account;?>">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-6" name="email_account" value="<?php echo $email_account;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mật khẩu:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control col-md-6" name="pass_account" value="<?php echo $pass_account;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Điện thoại:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-6" name="phone_account" value="<?php echo $phone_account;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Địa chỉ:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-6" name="address_account" value="<?php echo $address_account;?>" required>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Cấp bậc:</label>
                            <div class="col-sm-9">
                            <select name="level" class="form-control col-sm-3">
                            <?php
                            if($level == 1 ){
                                $name_level = "Quản lí";
                                $level = 1;
                                echo '<option value="'.$level.'">'.$name_level.'</option>
                                <option value="0">Thành viên</option>';
                            }else {
                                $name_level  = "Thành viên";
                                $level = 0;
                                echo '<option value="'.$level.'">'.$name_level.'</option>
                                <option value="1">Quản lí</option>';
                            }?>
                            </select>
                            </div>
                            </div>
                                <a href="admin.php?go=account" class="btn btn-danger">Quay lại</a>
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

