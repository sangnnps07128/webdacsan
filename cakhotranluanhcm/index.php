<?php
require '../model/connect.php';
require '../model/landing-page/evaluate.php';
require '../model/landing-page/intro.php';
require '../model/landing-page/library.php';
require '../model/landing-page/plan.php';
require '../model/landing-page/order.php';
require '../model/landing-page/function.php';
require '../model/landing-page/home.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="theme-color" content="#0E0E0E">
    <?php
    $db_contact = new lp_setting();
    $r_db_contact = $db_contact->getsetting(1);
    extract($r_db_contact);
    ?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>">
    <meta name="keywords" content="<?php echo $keywords;?>">
    <meta name="google-site-verification" content="verificaion-code-from-google">
    <meta name="msvalidate.01" content="verificaion-code-from-bing">
    <meta name="yandex-verification" content="verificaion-code-from-yandex">
    <meta name="p:domain_verify" content="verificaion-code-from-pinterest">
    <meta name="geo.placename" content="Hanoi, Mỹ Đình, Việt Nam">
    <meta name="geo.region" content="VN">
    <meta name="geo.position" content="10.802338;106.740963">
    <meta name="ICBM" content="10.802338, 106.740963">
    <link rel="author" href="https://plus.google.com/[Google+_Profile]/posts">
    <link rel="publisher" href="https://plus.google.com/[Google+_Page_Profile]">
    <meta itemprop="name" content="The Name or Title Her">
    <meta itemprop="description" content="This is the page description">
    <meta itemprop="image" content="http://www.example.com/image.jp">
    <meta name="twitter:card" content="summary_large_imag">
    <meta name="twitter:site" content="@publisher_handl">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 character">
    <meta name="twitter:creator" content="@author_handl">
    <meta name="twitter:image:src" content="http://www.example.com/image.htm">
    <meta property="og:title" content="Title Here">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://cakhotranluanhcm.chodacsansach.vn/">
    <meta property="og:image" content="https://chodacsansach.vn/controller/uploaded/landing-page/logo/<?php echo $logo;?>">
    <meta property="og:description" content="Description Here">
    <meta property="og:site_name" content="Site Name, i.e. Moz">
    <meta property="article:published_time" content="2013-09-17T05:59:00+01:00">
    <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00">
    <meta property="article:section" content="Article Section">
    <meta property="article:tag" content="Article Tag">
    <meta property="fb:admins" content="326574188008659">
    <base href="<?php echo base_url('');?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('');?>img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('');?>img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('');?>img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('');?>img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('');?>img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('');?>img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('');?>img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('');?>img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('');?>img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('');?>img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('');?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('');?>img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('');?>img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url('');?>img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="<?php echo base_url('');?>img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#000000">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('');?>css/all.css">

    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo base_url('');?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>css/reponsive.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>css/jquery.fancybox.css" />
 
</head>

<body id="home">
  
    
    <header class="fekit-header-h-2">
        <!-- Start headertop-->
        <section class="headertop">
            <div class="container">
                <div class="headertop--frame">
                    <ul class="nav">
                        <li class="nav-items"><a class="nav-link" href="javascript:void(0)"><i
                                    class="strong fas fa-phone"></i> Liên hệ: <span
                                    class="strong">0938.187.134</span></a></li>
                        <li class="nav-items"><a class="nav-link" href="javascript:void(0)"><i
                                    class="strong fas fa-envelope"></i> Email: <span
                                    class="strong">dacsantaybachcmc@gmail.com</span></a></li>
                        <li class="nav-items"><a class="nav-link" href="javascript:void(0)"><i
                                    class="strong fas fa-map-marker-alt"></i> Địa chỉ: <span class="strong">184/17
                                    Nguyễn Phúc Chu, P15, Q.Tân Bình, TP.HCM</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Start headermain-->
        <section class="headermain">
            <div class="container-fluid">
                <div class="overlay"></div>
                <nav class="navbar navbar-expand-xl">
                    <!-- Logo-->
                    <a class="navbar-brand" href="index.html"><img src="https://chodacsansach.vn/controller/uploaded/landing-page/logo/<?php echo $logo;?>" alt="logo cakhotranluan"></a><button
                        class="navbar-toggler"><i class="fas fa-bars"></i></button>
                    <!-- Navigation-->
                    <div class="navbar-collapse offcanvas-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="https://chodacsansach.vn">Trang Chủ</a></li>
                            <li class="nav-item" data-scroll="about"><a class="nav-link">Giới thiệu</a></li>
                            <li class="nav-item" data-scroll="process"><a class="nav-link">Đặc sản</a></li>
                            <li class="nav-item" data-scroll="gallery"><a class="nav-link">Bộ sưu tập</a></li>
                            <li class="nav-item active" data-scroll="order"><a class="nav-link">Đặt hàng</a></li>
                        </ul>
                    </div>
                    <!-- Menutool-->
                </nav>
            </div>
        </section>
    </header>
    <section id="banner-area">
        <div class="banner-img"
            style="background-image: url(<?php echo base_url('');?>img/cakho/ca-kho-lang-vu-dai.jpg);"></div>
        <div class="container">
            <div class="row box-banner-text fullscreen wow fadeInUp animated">
                <div class="col-12 banner-content">
                    <span></span>
                    <h6 class="text-white">Món ăn ngon cho mọi gia đình</h6>
                    <h1 class="text-white">Cá Kho Trần Luận</h1>
                    <h2 class="text-white mb-3">Cá Kho Làng Vũ Đại</h2>
                    <a class="primary-btn" data-scroll="order">Đặt Hàng Ngay</a>
                    <span></span>
                </div>
            </div>
        </div>
    </section>
    <section data-anchor="about" id="about" style="background: url(<?php echo base_url('');?>img/pattern/p-2.png)">
        <div class="container">
            <div class="row">
                <?php
                $db_intro = new intro();
                $r_db_intro = $db_intro -> getAllintro();
                foreach ($r_db_intro as $r_db_intro) {
                    extract($r_db_intro);
                echo '
                <div class="col-xl-3 col-6">
                    <div class="wrap-top">
                        <p>'.$intro.'</p>
                        <div class="icon-about">
                            <i class="fas fa-medal"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="wrap-top">
                        <p>'.$intro_2.'</p>
                        <div class="icon-about">
                            <i class="fas fa-medal"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="wrap-top">
                        <p>'.$intro_3.'</p>
                        <div class="icon-about">
                            <i class="fas fa-medal"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="wrap-top">
                        <p>'.$intro_4.'</p>
                        <div class="icon-about">
                            <i class="fas fa-medal"></i>
                        </div>
                    </div>
                </div>
                <!-- Hết Intro -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="wrap-bottom">
                        <h2>Nguồn gốc cá kho trần luận</h2>
                        <p>'.$root.'</p>
                        <a class="primary-btn" data-scroll="order">Đặt Hàng Ngay</a>
                    </div>
                </div>
            </div>';}?>
        </div>
    </section>
    <section id="gia-tien">
    <div class="container">
        <div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="img/hinh-cakho-ngon.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trắm đen</h5>
                        <div class="price">
                            <p class="currency">Giá: 550,000 VNĐ/1Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="img/hinh-cakho-ngon.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trắm đen</h5>
                        <div class="price">
                            <p class="currency">Giá: 650,000 VNĐ/1,5Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="img/hinh-cakho-ngon.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trắm đen</h5>
                        <div class="price">
                            <p class="currency">Giá: 750,000 VNĐ/2Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="img/hinh-cakho-ngon.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trắm đen</h5>
                        <div class="price">
                            <p class="currency">Giá: 950,000 VNĐ/3Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="img/hinh-cakho-ngon.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trắm đen</h5>
                        <div class="price">
                            <p class="currency">Giá: 1,150,000 VNĐ/4Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="img/hinh-cakho-ngon.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trắm đen</h5>
                        <div class="price">
                            <p class="currency">Giá: 1,350,000 VNĐ/5Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn">
                <figure>
                    <div class="box"><img src="https://chodacsansach.vn/controller/uploaded/product/C%C3%A1-di%E1%BA%BFc.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá diếc</h5>
                        <div class="price">
                            <p class="currency">Giá: 700,000 VNĐ/2Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn/dac-san/chi-tiet/33/ca-bong-kho-nieu-lang-vu-dai.html">
                <figure>
                    <div class="box"><img src="https://chodacsansach.vn/controller/uploaded/product/Ca-trach.jpg" alt=""></div>
                    <figcaption>
                        <h5>Cá trạch diếc</h5>
                        <div class="price">
                            <p class="currency">Giá: 650,000 VNĐ/1Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
        <div class="item">
            <a href="https://chodacsansach.vn/dac-san/chi-tiet/33/ca-bong-kho-nieu-lang-vu-dai.html">
                <figure>
                    <div class="box"><img src="https://chodacsansach.vn/controller/uploaded/product/Ca-bong.png" alt=""></div>
                    <figcaption>
                        <h5>Cá bống diếc</h5>
                        <div class="price">
                            <p class="currency">Giá: 650,000 VNĐ/1Kg
                                <br><span style="color:green">(Miễn phí ship trong 10Km)</span></p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>
    </div>
    </section>
    <section data-anchor="process" id="process">
        <div class="container">
            <div class="title">
                <h2>Quy trình kho cá</h2>
                <hr class="size" />
            </div>
            <div class="process-wrap">
                <?php
                $db_plan = new plan();
                $r_db_plan = $db_plan -> getAllplan();
                foreach ($r_db_plan as $r_db_plan) {
                    extract($r_db_plan);
                echo '
                <div class="item"><img class="img_main" src="'.base_url_home('').'controller/uploaded/landing-page/plan/'.$images.'" alt="quy trình cá kho trần luân">
                    <div class="text">
                        <span>'.$id_lp_plan.'</span>
                        <h1>'.$title.'</h1>
                        <div class="wrap-effect">
                            <p class="animate-text">'.$text.'</p>
                            <img class="animate-img" src="'.base_url_home('').'controller/uploaded/landing-page/plan/'.$images.'" alt="Cá kho trần luân">
                        </div>
                        <img class="icon" src="./img/icon/double-up.png">
                    </div>
                </div>';}?>
                
        </div>
        </div>
    </section>
    <section data-anchor="gallery" id="gallery" style="background-image: url(<?php echo base_url('');?>img/pattern/p-3.png)">
        <div class="container wow fadeIn animated">
            <div class="title">
                <h2>Thư viện hình ảnh</h2>
                <hr class="size" />
            </div>
            <div id="wrap-gallery" class="wrap-gallery">
                <div class="transitions-enabled fluid masonry js-masonry grid" id="grid-container">
                <?php
                $db_lib = new library();
                $r_db_lib = $db_lib -> getlibrary();
                foreach ($r_db_lib as $r_db_lib){
                    extract($r_db_lib);
                    echo '    
                <a class="snake fancybox" rel="gallery1" href="'.base_url_home('').'controller/uploaded/landing-page/library/'.$images.'"
                        data-fancybox="preview">
                        <div class="overlay"><i class="title fas fa-search"></i></div>
                        <img class="img-responsive" src="'.base_url_home('').'controller/uploaded/landing-page/library/'.$images.'" />
                </a>';}?>
                </div>
            </div>
            <span id="button" class="btn-wrap-gallery">
                <span id="decs_ex"> Xem thêm</span>
            </span>
        </div>
    </section>
    <section id="feedback">
        <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url('');?>img/cakho/c-04.png)"></div>
        <div class="container animated wow fadeInUp">
            <div class="text-center">
                <div class="owl-carousel owl-theme">
                    <?php
                    $db_evaluate = new evaluate();
                    $r_db_evaluate = $db_evaluate -> getAllevaluate();
                    foreach ($r_db_evaluate as $r_db_evaluate){
                        extract($r_db_evaluate);
                        echo '
                    <div class="item">
                        <div class="avatar mx-auto m-avatar ">
                            <img src="'.base_url_home('').'controller/uploaded/landing-page/evaluate/'.$images.'" class="rounded-circle img-fluid" alt="Avatar image">
                        </div>
                        <h3>'.$name.'</h3>
                        <div class="conti">
                            <p class="conti-mb-p" title="#">'.$text.'</p>
                        </div>
                    </div>
                        ';}?>
                </div>
            </div>
        </div>
    </section>
    <section data-anchor="order" id="order">
        <div class="container">
            <div class="row">
            <?php
                if(isset($_POST['submit_order'])){
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $text = $_POST['text'];
                    $db = new orders_lp();
                    $db -> add_orders($name, $phone, $address, $text);
                    echo '<script>alert("Thông tin của bạn đã được gửi. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.");</script>';
            }?>
                <div class="order-left col-lg-5 col-md-12 col-sm-12 ">
                    <div class="page_head">
                        <h2><i class="icon-order fas fa-cart-plus"></i>Đặt hàng nhanh</h2>
                        <p>* Vui lòng điền đầy đủ thông tin trước khi đặt hàng !!!</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="name" required=""
                                    placeholder="Họ và Tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="phone" required=""
                                    placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="address" required="" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-sm input-inverse" name="text" rows="5"
                                    placeholder="Nội dung"></textarea>
                            </div>
                            <input type="submit" class="primary-btn" name="submit_order" value="Đặt hàng ngay">
                        </form>
                    </div>
                </div>
                <div class="order-right col-lg-7 col-md-12 col-sm-12 ">
                    <div class="row clear-md">
                        <div class="col-lg-4 col-md-4 col-sm-12 order-sm-3">
                            <div class="c-info">
                                <h4><i class="icon-order fas fa-map-marker-alt"></i>Địa chỉ</h4>
                                <p>184/17 Nguyễn Phúc Chu, P15, Q.Tân Bình, TP.HCM</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-sm-2">
                            <div class="c-info pb-sm-0">
                                <h4><i class="icon-order fas fa-envelope-open-text"></i>Điện thoại</h4>
                                <p><a href="mailto:dacsantaybachcmc@gmail.com">0934 061 273</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 order-sm-1">
                            <div class="c-info pb-sm-0">
                                <h4><i class="icon-order fas fa-mobile-alt"></i>Số điện thoại</h4>
                                <p><a href="tel:+84938187134">0938.187.134</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row clear-md">
                        <div class="col-12">
                            <div class="mbr-map map-wrapper"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1959.4150928226284!2d106.6365055!3d10.8243042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752964db25ff5b%3A0xe87f2e89db53507a!2zSOG6u20gTmd1eeG7hW4gUGjDumMgQ2h1LCBQaMaw4budbmcgMTUsIFTDom4gQsOsbmgsIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1559661232348!5m2!1svi!2s"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="fekit-footer-1 " style="background: url(<?php echo base_url('');?>img/pattern/p-2.png)">

        
        <div class="container wow fadeInUp animated">
            <div class="row justify-content-center align-items-start">
                <div class="col-12 col-sm-9 col-lg-4 footer__top">
                    <figure>
                        <div class="box-img"><img src="<?php echo base_url('');?>img/logo.png"></div>
                        <figcaption>
                            <div class="footer__content"><a href="javascript:void(0)">184/17 Nguyễn Phúc Chu, P15, Q.Tân
                                    Bình, TP.HCM</a><a href="javascript:void(0)"><span
                                        class="strong">Hotline:&nbsp&nbsp</span>0938 187 134 - 0934 061 273</a><a
                                    href="javascript:void(0)"><span
                                        class="strong">Email:&nbsp&nbsp&nbsp&nbsp</span>dacsantaybachcmc@gmail.com</a>
                                <a href="javascript:void(0)"><span
                                        class="strong">Website:</span>https://www.chodacsansach.vn</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class=" col-sm-6 col-lg-4 footer__mid">
                    <h5>Liên kết nhanh</h5>
                    <div class="footer__content"><a href="javascript:void(0)">Giới thiệu chợ đặc sản</a><a
                            href="javascript:void(0)">Liên hệ với chúng tôi</a><a href="javascript:void(0)">Đóng góp ý
                            kiến khách hàng</a></div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 footer__mid">
                    <h5>MẠNG XÃ HỘI</h5>
                    <div class="footer__content"></div>
                   <div class="fb-page" data-href="https://www.facebook.com/dacsantphcm/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dacsantphcm/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dacsantphcm/">CHỢ ĐẶC SẢN SẠCH</a></blockquote></div>
            </div>
            <div class="row copyright">
                <div class="col">© Copyright © 2019 Dacsantaybac.vn All right reserved. Designed by <a
                        href="https://www.facebook.com/FpolyHub-332282757626644" class="author">FpolyHub</a></div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url('');?>js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('');?>js/snake.min.js"></script>

    <script src="<?php echo base_url('');?>js/jquery.fancybox.js"></script>
    <script src="<?php echo base_url('');?>js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('');?>js/imagesloaded.min.js"></script>
    <script src="<?php echo base_url('');?>js/wow.js" type="text/javascript"></script>
    <script src="<?php echo base_url('');?>js/owl.carousel.js "></script>
    <script src="<?php echo base_url('');?>js/main.js" type="text/javascript"></script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=708841569559966&autoLogAppEvents=1"></script>
    <a href="#home" id="toTop" style="display: none;"></a>
    <div class="wrap-hotline">
        <a id="hot-phone" style="display: none;" href="tel:+84938187134">
            <i class="fas fa-phone"></i>
        </a>
        <a id="hot-email" style="display: none;" data-scroll="order" href="mailto:dacsantaybachcmc@gmail.com">
            <i class="fas fa-envelope-open-text"></i>
        </a>
        <!--<a id="hot-mess" style="display: none;">-->
        <!--    <i class="fab fa-facebook-messenger"></i>-->
             
 
        <!--</a>-->
    </div>
    <div id="hot-mobi">
        <ul>
            <li class="phone"><a href="tel:+84938187134"><i class="fas fa-phone"></i></a></li>
            <li class="email" data-scroll="order"><a><i class="fas fa-envelope-open-text"></i></a></li>
        </ul>
    </div>
  
      <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <!--Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="326574188008659"
  theme_color="#ff7e29">
</div>
</body>

</html>