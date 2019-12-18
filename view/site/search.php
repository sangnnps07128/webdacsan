<?php
if(isset($_GET['key'])){
	$key = $_GET['key'];
	$db = new product();
    $results = $db -> search_product($key);
}else {
    echo '<script>window.location.assign("index.php");</script>';
}
?>

<section class="fekit-breakcrumb-2" style="background-image:url('https://chodacsansach.vn/public/site/asset/img/dacsantaybac/breakcrumb/b-02.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="content">
                <h2><a href="?page=tim-kiem>Tìm kiếm</a></h2>
                <h6><a href="index.php">Trang chủ</a><a class="active" href=""> <i class="fas fa-angle-right"></i> Tìm kiếm</a></h6></div>
        </div>
    </section>
    <!-- START MAIN CONTENT-->
    <main>
        <section class="fekit-shop-2">
            <div class="container">
                <div class="title">
                    <h1 style="font-size:20px"> Tìm kiếm từ khóa cho <a href="index.php?page=tim-kiem&key=<?php echo $_GET['key'];?>"><b><?php echo $_GET['key'];?></b></a></h1>
                    <h2 style="font-size:18px;margin-bottom:20px"><strong>Đặc sản</strong> Tây Bắc</h2>
                    <div class="separator"><i class="hoa-ban" style="background: url('https://chodacsansach.vn/public/site/asset/img/dacsantaybac/hoaban.png')"></i></div>
                </div>
                <div class="row">
                <?php
                foreach ($results as $results) {
                    extract($results);
                    $kq_percent = 100 - $sale_product;
                    $kq2_percent = $kq_percent/100;
                    $price = $price_product * $kq2_percent;
                    $new_name = utf8tourl(utf8convert($name_product));
                echo '
                                <div class="col-md-3">
                                    <div class="item">
                                        <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                            <figure>
                                                <div class="box"><img src="'.base_url('').'controller/uploaded/product/'.$image_product.'" alt=""></div>
                                                <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                                                <figcaption>
                                                    <h5>'.$name_product.'</h5>
                                                    <div class="price">
                                                        <p class="discount">'.number_format($price_product).' VNĐ</p>
                                                        <p class="currency">'.number_format($price).' VNĐ</p>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
        ';}?>
                </div>
            </div>
        </section>
    </main>