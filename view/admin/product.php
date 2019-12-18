<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $db = new product();
    $get_image_db = $db->getproductById($id);
    $img = getcwd().'/'.$path_img_product.$get_image_db['image_product'];
    unlink($img);
    $db->delete_product($id);
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
                        <h4 class="page-title">Danh sách sản phẩm</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin.php">Trang chủ Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quản lí sản phẩm</li>
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
                                <div class="text-right"><a href="?go=add_product" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm mới</a></div>
                                <!--<div class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcata"><i class="fa fa-plus-circle"></i> Thêm mới</button></div>-->
                                    <div class="modal fade" id="addcata" tabindex="-1" role="dialog" aria-labelledby="addcata" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel-2">Thêm sản phẩm</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <form enctype="multipart/form-data" class="forms-sample" action="admin.php?go=acction_insert_product" method="post">
                                            <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name_product" placeholder="Nhập tên...">
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
                                        <input type="text" class="form-control" name="price_product">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Giảm giá (%)</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" maxlength="100" size="100" name="sale_product">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image_product" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hình ảnh 2:</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image_product_2" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mô tả</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="4" name="describe_product"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Phổ biến</label>
                                    <div class="col-sm-9">
                                        <input type="checkbox" class="mt-2" name="vip_product"> 
                                    </div>
                                    </div>

                                        </div>
                                        <div class="modal-footer">
                                        <button name="insert" type="Submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php
                                        function _substr($str, $length, $minword = 3)
                                                {
                                                $sub = '';
                                                $len = 0;
                                                foreach (explode(' ', $str) as $word)
                                                {
                                                    $part = (($sub != '') ? ' ' : '') . $word;
                                                    $sub .= $part;
                                                    $len += strlen($part);
                                                    if (strlen($word) > $minword && strlen($sub) >= $length)
                                                    {
                                                      break;
                                                    }
                                                 }
                                                    return $sub . (($len < strlen($str)) ? '...' : '');
                                                }
                                    $db = new product();
                                    $result = $db -> getAllproduct();
                                    
                                ?>
                                
                                <form name="bulk_action" action="admin.php?go=check_product" method="POST" onsubmit="return deleteConfirm();">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="select_all" id="select_all" value="" /></th>
                                                <th><b>Hình ảnh</b></th>
                                                <th><b>Tên sản phẩm</b></th>
                                                <th><b>Giá tiền</b></th>
                                                <th><b>Mô tả</b></th>
                                                <th><b>Hành động</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($result as $result){
                                            
                                        extract($result);
                                        if($vip_product == 1){
                                            $showvip = "<img src='../public/admin/assets/images/hot_32.png'/>";
                                        }else {
                                            $showvip = "";
                                        }
                                        echo '
                                            <tr>
                                                <td width="5%"><input type="checkbox" name="checked_id[]" class="checkbox" value="'.$id_product.'"></td>
                                                <td width="20%"><img src="uploaded/product/'.$image_product.'" width="50%"/></td>
                                                <td width="30%">'.$name_product.' '.$showvip.'</td>
                                                <td>'.number_format($price_product).' VNĐ</td>
                                                <td>'._substr($des_seo,150).'</td>
                                                <td>
                                                <a href="admin.php?go=update_product&id_update='.$id_product.'">
                                                <button type="button" class="btn btn-success btn-sm mr-2"><i class="fa fa-lg fa-edit"></i> Sửa</button></a>
                                                <a href="admin.php?go=product&del='.$id_product.'">
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
