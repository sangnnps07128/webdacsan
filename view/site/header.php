<!--////////////////////////////////////////////////////////////////////////////////////

Thien Hoang Son Team - We are Web Developers come form FPT College
Address: 778/B1 Nguyen Kiem, Ward 3, Phu Nhuan Distric, Ho Chi Minh City
Contact: 035 850 25 16 - Mr.Thien

////////////////////////////////////////////////////////////////////////////////////-->
<?php
$db_seo_home = new home_setting();
$r_db_seo = $db_seo_home -> getsetting(1);
extract($r_db_seo);
define('logo',$logo);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="theme-color" content="#0E0E0E">
    <title><?php echo title;?></title>
    <meta name="description" content="<?php echo des_seo;?>">
    <meta name="keywords" content="<?php echo key_seo;?>">
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
    <meta itemprop="description" content="<?php echo $description;?>">
    <meta itemprop="image" content="http://www.example.com/image.jp">
    <meta name="twitter:card" content="summary_large_imag">
    <meta name="twitter:site" content="@publisher_handl">
    <meta name="twitter:title" content="Page Titl">
    <meta name="twitter:description" content="Page description less than 200 character">
    <meta name="twitter:creator" content="@author_handl">
    <meta name="twitter:image:src" content="http://www.example.com/image.htm">
    <meta property="og:title" content="Title Here">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://www.example.com/">
    <meta property="og:image" content="https://chodacsan.vn/controller/uploaded/logo-white.png">
    <meta property="og:description" content="<?php echo $description;?>">
    <meta property="og:site_name" content="Site Name, i.e. Moz">
    <meta property="article:published_time" content="2013-09-17T05:59:00+01:00">
    <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00">
    <meta property="article:section" content="Article Section">
    <meta property="article:tag" content="Article Tag">
    <meta property="fb:admins" content="Facebook numberic ID">
    <base href="<?php echo base_url('');?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('');?>/public/site/asset/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('');?>/public/site/asset/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('');?>/public/site/asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('');?>/public/site/asset/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('');?>/public/site/asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url('');?>/public/site/asset/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="<?php echo base_url('');?>/public/site/asset/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#000000">
    <link href="<?php echo base_url('');?>/public/site/asset/style/brandsoul.965bf1dd7.css" rel="stylesheet">
    <link href="<?php echo base_url('');?>/public/site/asset/style/preloading.css" rel="stylesheet">
    <link href="<?php echo base_url('');?>/public/site/asset/style/freestyle.css" rel="stylesheet">
</head>

<body id="brandsoul">
<div class="wrapper">
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
</div>
    <!-- START HEADER-->
    <header class="fekit-header-h-2">
        <!-- Start headertop-->
        <section class="headertop">
            <div class="container">
                <div class="headertop--frame">
                    <div class="headertop__left">
                        <ul class="nav">
                            <li class="nav-items"><a class="nav-link" href="javascript:void(0)"><i class="strong fas fa-phone"></i>  Liên hệ: <span class="strong">0938.187.134</span></a></li>
                            <li class="nav-items"><a class="nav-link" href="javascript:void(0)"><i class="strong fas fa-envelope"></i>  Email: <span class="strong">hotro@chodacsansach.vn</span></a></li>
                            <li class="nav-items"><a class="nav-link" href="javascript:void(0)"><i class="strong fas fa-map-marker-alt"></i>  Địa chỉ: <span class="strong">184/17 Nguyễn Phúc Chu, P15, Q.Tân Bình, TP.HCM</span></a></li>
                        </ul>
                    </div>
                    <div class="headertop__right">
                        <ul class="nav">
                            <li class="nav-items">
                            <?php if (isset($_SESSION['account'])) {
                            $mail = $_SESSION['account'];
                            $email = new account();
                            $result_account = $email->getAccountByEmail($mail);
                            extract($result_account);
                                echo '<a class="nav-link" href="'.base_url('').'dang-xuat.html" data-toggle="tooltip" data-placement="bottom" title="Đăng xuất"><i class="strong fas fa-user"></i>'.$name_account.'</a>';
                            } else {
                                echo'
                            <a class="nav-link" href="'.base_url('').'dang-nhap.html"><i class="strong fas fa-user"></i>Tài khoản</a>
                            </li>
                            <li class="nav-items"><a class="nav-link" href="'.base_url('').'dang-ki.html"><span class="strong">Đăng kí</span></a></li>';}?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start headermain-->
        <section class="headermain">
            <div class="container-fluid">
                <div class="overlay"></div>
                <nav class="navbar navbar-expand-xl">
                    <!-- Logo-->
                    <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('');?>controller/uploaded/<?php echo logo;?>" alt="logo chodacsansach.vn"></a>
                    <button class="navbar-toggler"><i class="fas fa-bars"></i></button>
                    <!-- Navigation-->
                    <div class="navbar-collapse offcanvas-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Trang Chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="gioi-thieu.html">Giới thiệu</a></li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="dac-san.html" data-toggle="dropdown">Đặc sản</a>
                                <div class="dropdown-menu">
                                <?php
                                $db = new category();
                                $r_db = $db -> getAllCategory();
                                foreach($r_db as $r_db){
                                    extract($r_db);
                                    $new_name_cate = utf8tourl(utf8convert($name_category));
                                    echo '
                                <a class="dropdown-item" href="'.base_url('').'dac-san/'.$id_category.'/'.$new_name_cate.'.html">'.$name_category.'</a>
                                ';}?>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="lien-he.php">Liên hệ</a></li>
                            <?php if (isset($_SESSION['account']) && ($level == 1)) {
                                echo '<li class="nav-item"><a class="nav-link" href="controller/admin.php">Quản Lí Website</a></li>';}?>
                            <?php if (!isset($_SESSION['account'])) {
                            echo '
                            <li class="nav-item d-block d-xl-none"><a class="nav-link" href="?page=dang-ki">Đăng kí</a></li>
                            <li class="nav-item d-block d-xl-none"><a class="nav-link" href="?page=dang-nhap">Đăng nhập</a></li>
                            ';} else {
                                echo '<li class="nav-item d-block d-xl-none"><a class="nav-link" href=""><i class="strong fas fa-user"></i> Xin chào, '.$name_account.'</a></li>
                                <li class="nav-item d-block d-xl-none"><a class="nav-link" href="'.base_url('').'dang-xuat.html"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>';
                            }?>
                        </ul>
                    </div>
                    <!-- Menutool-->
                    <div class="menutool">
                        <div class="menutool__search">
                            <div class="search">
                                <button class="btn btn-outline-fekit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <!--//////////////////////////////////////////////////////////////-->
    <!-- START SEARCH TOOLS-->
    <!--//////////////////////////////////////////////////////////////-->
    <div class="fekit-header-h-2__search">
        <div class="search__header">
            <div class="search__header--title">Tìm kiếm</div>
            <button class="btn btn-outline-fekit"><i class="fas fa-times"></i></button>
        </div>
        <div class="search__body">
            <form action="index.php" class="search__body--form" method="get">
                <input type="hidden" name="page" value="tim-kiem">
                <input class="form-control" name="key" type="search" placeholder="Tìm kiếm">
            </form>
        </div>
    </div>

