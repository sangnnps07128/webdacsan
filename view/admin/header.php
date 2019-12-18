<!--

Nguyễn Ngọc Sáng (FpolyHub Team) - We are Web Developers come form FPT College
Address: 778/B1 Nguyen Kiem, Ward 3, Phu Nhuan Distric, Ho Chi Minh City
Contact: 035 900 3539 (Mr. Sáng)

-->
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../public/admin/assets/images/favicon.png">
    <title>Trang chủ Admin Control Panel | ChoDacSanSach</title>
    <!-- Custom CSS -->
    <link href="../public/admin/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../public/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="admin.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../public/admin/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <h4 class="mt-3">ChoDacSanSach</h4>
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../public/admin/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Xem trang <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/index.php" target="_blank">Trang Chủ Website</a>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://cakhotranluanhcm.chodacsansach.vn" target="_blank">Trang Landing Page</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin.php" target="_blank">Trang Chủ Admin</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                                                       <?php
                                                       // comment
                                                       $db_cmt = new comment();
                                                       $r_db_cmt = $db_cmt->count_comment_new();
                                                       extract($r_db_cmt);
                                                       
                                                       // contact
                                                       $db_contact = new contact();
                                                       $r_db_contact = $db_contact->count_contact_new();
                                                       extract($r_db_contact);
                                                       
                                                       // order
                                                       $db_order_new = new orders_lp();
                                                       $r_db_order_new = $db_order_new->count_order_new();
                                                       extract($r_db_order_new);
                                                       
                                                       $count_notification = $new_comments + $new_contacts + $new_orders;
                                                      ?>
                            <span style="position:absolute;top:6px;right:2px" class="badge badge-danger"><?php echo $count_notification;?></span></a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?go=comment">Bình luận <span class="ml-1 badge badge-pill badge-danger"><?php echo $new_comments;?></span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?go=contact">Thư phản hồi <span class="ml-1 badge badge-pill badge-danger"><?php echo $new_contacts;?></span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?go=order">Đơn hàng <span class="ml-1 badge badge-pill badge-danger"><?php echo $new_orders;?></span></a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../public/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="?go=account"><i class="ti-user m-r-5 m-l-5"></i> Tài khoản của tôi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/dang-xuat.html"><i class="fa fa-power-off m-r-5 m-l-5"></i> Đăng xuất</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Trang chủ</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-stackexchange"></i><span class="hide-menu">Quản lí Landing Page </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="?go=intro" class="sidebar-link"><i class="mdi mdi-panorama-fisheye"></i><span class="hide-menu"> Quản lí giới thiệu </span></a></li>
                                <li class="sidebar-item"><a href="?go=plan" class="sidebar-link"><i class="mdi mdi-panorama-fisheye"></i><span class="hide-menu"> Quản lí quy trình </span></a></li>
                                <li class="sidebar-item"><a href="?go=library" class="sidebar-link"><i class="mdi mdi-panorama-fisheye"></i><span class="hide-menu"> Quản lí thư viện </span></a></li>
                                <li class="sidebar-item"><a href="?go=evaluate" class="sidebar-link"><i class="mdi mdi-panorama-fisheye"></i><span class="hide-menu"> Quản lí đánh giá </span></a></li>
                                <li class="sidebar-item"><a href="?go=order" class="sidebar-link"><i class="mdi mdi-panorama-fisheye"></i><span class="hide-menu"> Đơn hàng</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=setting_landingpage" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Cài đặt landing page</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=banner" aria-expanded="false"><i class="mdi mdi-page-layout-header"></i><span class="hide-menu">Quản lí banner</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=category" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Quản lí danh mục</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=product" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Quản lí sản phẩm</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=comment" aria-expanded="false"><i class="mdi mdi-comment-processing"></i><span class="hide-menu">Quản lí bình luận</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=account" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Quản lí tài khoản</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=award" aria-expanded="false"><i class="mdi mdi-trophy-variant"></i><span class="hide-menu">Quản lí giải thưởng</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=contact" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Thư phản hồi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin.php?go=setting" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Cài đặt trang web</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->