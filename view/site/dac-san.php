<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$db = new product();
    $results = $db -> getdacsan($id);

}else {
    $db = new product();
	$results = $db -> getAllproduct();
}
?>
    <script type="text/javascript" src="<?php echo base_url('');?>public/site/asset/script/jquery-3.4.0.min.js"></script>
    <script type="text/javascript">
                                    // Page Product
                                    function goToEntries(m, n) {
                                                    $.post('../view/site/productPageBtn.php', {
                                                        postEntries: m,
                                                        postCategory: n
                                                    }, function (data) {
                                                        $('#numberPage').html(data);
                                                    });
                                    }
                                    // Count Product
                                    <?php
                                    $c = new product();
                                    $cp = $c->countproductList();
                                    extract($cp);
                                    $fcp = ceil($total / 10);
                                    for ($i = 1; $i <= $fcp; $i++) {
                                        echo "
                                        $(document).ready(function () {
                                            var category = $('#category$i').val();
                                            var page = $('#page$i').val();
                                            var entries = $('#entries$i').val();
                                            $('#submit$i').click(function () {
                                                $.post('../view/site/showproduct.php', {postCategory: category, postPage: page , postEntries: entries}, function (data) {
                                                    $('#product').html(data);
                                                });
                                            });
                                        });
                                        ";
                                    }
                                    ?>
                                    // Show product
                                    $(document).ready(function () {
                                        $.post('../view/site/showproduct.php',{
                                            postCategory: <?php echo $_GET['id'];?>,
                                            postPage: 1,
                                            postEntries: 9
                                        }, function (data) {
                                            $('#product').html(data);
                                        });
                                    });
                                     </script>
                                    <?php
                                    // Xu li button
                                    // $countProduct = new product();
                                    // $countP = $countProduct->countProductListPage(2);
                                    // extract($countP);
                                    // $finalCP = ceil($total / 10);
                                    // for ($i = 1; $i <= $finalCP; $i++) {
                                    //     echo "
                                    //         <input type='hidden' id='category$i' value='2'>
                                    //         <input type='hidden' id='entries$i' value='10'>
                                    //         <input type='hidden' id='page$i' value='$i'>
                                    //         <button type=\"submit\" id='submit$i' value='$i' class=\"btn btn-primary\">$i</button>
                                    //         ";
                                    // }
                                    ?>
                               
    <!-- START MAIN CONTENT-->
    <section class="fekit-breakcrumb-2" style="background-image:url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/breakcrumb/b-02.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="content">
            <?php
                $db_cate = new category();
                $r_db_cate_id = $db_cate -> getcategoryById($_GET['id']);
                extract($r_db_cate_id);?>
                <h2><a href="lien-he.php"><?php echo $name_category?></a></h2>
                <h6><a href="index.php">Trang chủ</a><a class="active" href=""> <i class="fas fa-angle-right"></i> <?php echo $name_category?></a></h6></div>
        </div>
    </section>
    <main>
        <section class="fekit-shop-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="shop__sidebar">
                            <!-- product - accordion-->
                            <div class="block__catelogry">
                                <h3>Danh mục sản phẩm</h3>
                                <ul class="navbar-nav">
                                <?php
                                    $r_db_cate = $db_cate -> getAllCategory();
                                foreach ($r_db_cate as $r_db_cate){
                                    extract($r_db_cate);
                                        $r_count = $db -> count_prd_cate($id_category);
                                        extract($r_count);
                                    $new_name_cate = utf8tourl(utf8convert($name_category));
                                    echo '
                                    <li class="nav-item">
                                    <p style="padding:5px;margin-top:6px;margin-bottom:6px"><a href="'.base_url('').'dac-san/'.$id_category.'/'.$new_name_cate.'.html">'.$name_category.' </a>   ('.$total_cate.')</p>
                                    </li>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product__sidebar">
                            <div class="row">
                                <!--<div class="col-12">-->
                                <!--    <div class="banner mb-4"><img src="<?php echo base_url('')?>public/site/asset/img/dacsantaybac/banner/s-01.png" alt=""></div>-->
                                <!--</div>-->
                            </div>
                                <div class="clearfix"></div>

                            <div class="row" id="product">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="btn-toolbar" role="toolbar"
                                 aria-label="Toolbar with button groups" style="float: right;">
                                <div id="numberPage" class="btn-group mr-2" role="group" aria-label="First group">
                                    <?php
                                    // Xử lý số lượng nút
                                    $countProduct = new product();
                                    $countP = $countProduct->countProductListPage($_GET['id']);
                                    extract($countP);
                                    $finalCP = ceil($total / 10);
                                    echo "<p>Trang: &nbsp;";
                                    for ($i = 1; $i <= $finalCP; $i++) {
                                        echo "
                                            <input type='hidden' id='category$i' value='".$_GET['id']."'>
                                            <input type='hidden' id='entries$i' value='9'>
                                            <input type='hidden' id='page$i' value='$i'>
                                            <button type=\"submit\" id='submit$i' value='$i' class=\"btn btn-danger\" style=\"margin-right:0.5px\">$i</button>
                                            ";
                                    }
                                    echo "</p>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>