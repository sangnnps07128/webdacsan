<?php
session_start();
require 'model/connect.php';
require 'model/category.php';
require 'model/product.php';
require 'model/banner.php';
require 'model/award.php';
require 'model/account.php';
require 'model/comment.php';
require 'model/contact.php';
require 'model/help.php';
require 'model/home.php';
require 'model/paging.php';



if (isset($_GET['page']) || isset($_POST['page']))  {

    if (isset($_POST['page'])){
        $page = $_POST['page'];
    }else{
        $page = $_GET['page'];
    }
    switch ($page) {
    case "home":
        define('logo',$logo);
		require 'view/site/header.php';
        require '../view/site/home.php';
    break;
	case "dac-san":
	    if(isset($_GET['id'])){
    	$id = $_GET['id'];
    	$db_cate = new category();
        $r_db_cate_id = $db_cate -> getCategoryById($id);
        extract($r_db_cate_id);
        }
        define('title',$name_category);
        define('des_seo',$name_category);
        define('key_seo',$name_category);
		require 'view/site/header.php';
        require 'view/site/dac-san.php';
    break;
    case "dac-san-chi-tiet":
        if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = new product();
		$result = $data -> getproductById($id);
		extract($result);
		}else {
			echo '<script>window.location.assign("index.php");</script>';
		}
		define('title', $name_product);
		define('des_seo', $des_seo);
		define('key_seo', $key_seo);
        require 'view/site/header.php';
        require 'view/site/dac-san-chi-tiet.php';
    break;
	case "lien-he":
		define('title','Liên Hệ | Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
        define('des_seo','Liên Hệ | Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
		require 'view/site/header.php';
        require 'view/site/lien-he.php';
    break;
	case "gioi-thieu":
	    define('title','Giới thiệu về Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
        define('des_seo','Giới thiệu về Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
		require 'view/site/header.php';
        require 'view/site/gioi-thieu.php';
    break;
    case "tim-kiem":
        if(isset($_GET['key'])){
            define('title',''.$_GET['key'].' | ChoDacSanSach.VN');
        }else {
            define('title','Tìm kiếm | ChoDacSanSach.VN');
        }
        define('des_seo','Tìm kiếm | ChoDacSanSach.VN');
		require 'view/site/header.php';
        require 'view/site/search.php';
    break;
	case "dang-ki":
	    define('title','Đăng kí | Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
        define('des_seo','Đăng kí | Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
		require 'view/site/header.php';
    	if(isset($_POST['dangki'])) {
    		$name_account = $_POST['name'];
    		$email_account = $_POST['email'];
            $pass_account = $_POST['password'];
            $phone_account = $_POST['phone'];
            $address_account = $_POST['address'];
    		$db = new account();
    		$db -> insert_account($name_account, $email_account, $pass_account, $address_account, $phone_account);
    		echo '<script>alert("Đăng kí thành công");window.location.assign("dang-nhap.html");</script>';
    	}else {
    		require 'view/site/dang-ki.php';
        }
    break;
	case 'action_login':
			require 'view/site/header.php';
            $email = $_POST['email'];
            $password = $_POST['password'];
            $db_login = new account();
            $check = $db_login->check_account($email, $password);
            if ($check == true) {
                $_SESSION['account'] = $email;
                echo '<script>window.location.assign("index.php");</script>';
            } else {
                $_SESSION['message'] = 'Thông tin đăng nhập chưa chính xác';
                echo '<script>alert("Sai tài khoản hoặc mật khẩu !");</script>';
                require 'view/site/dang-nhap.php';
            }

            break;
	case "dang-nhap":
	    define('title','Đăng nhập | Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
        define('des_seo','Đăng nhập | Chợ Đặc Sản Sạch | ChoDacSanSach.VN');
		require 'view/site/header.php';
    	require 'view/site/dang-nhap.php';
    break;
    case "quen-mat-khau":
    require '../view/site/quen-mat-khau.php';
    break;
	case "update_account":
		require 'view/site/header.php';
        if(isset($_POST['update_acc'])){
            $images_account=$_FILES['images_account']['name'];
            $name_account=$_POST['name_account'];
            $address_account=$_POST['address_account'];
            $phone_account=$_POST['phone_account'];
            $email_account=$_POST['email_account'];
            $pass_account=$_POST['pass_account'];
            $id_account=$_POST['id_account'];
            $data_acc = new account();
            $data_acc -> update_account($name_account, $email_account, $pass_account, $images_account, $phone_account, $address_account, $id_account);
            echo '<script>alert("Cập nhật thành công");window.location.assign("index.php?page=info_account");</script>';
        }
    	require '../view/site/update_account.php';
    break;
    case 'logout':
            unset($_SESSION['account']);
            echo '<script>window.location.assign("index.php");</script>';
    break;
	case "contact_submit":
		require 'view/site/header.php';
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $content = $_POST['content'];
            $db = new contact();
            $db -> insert_contact($name, $email, $phone, $content);
            echo '<script>alert("Thông tin của bạn đã được gửi. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.");</script>';
            require 'view/site/lien-he.php';    
        }
        break;
        case "404":
            define('title','Trang bạn tìm không tồn tại');
            define('des_seo','404 error');
            require 'view/site/header.php';
            require "view/site/404.php";
        break;

            }
        } else {
            $db_seo_home = new home_setting();
            $r_db_seo = $db_seo_home -> getsetting(1);
            extract($r_db_seo);
            define('title',$title);
            define('des_seo',$description);
            define('key_seo',$keywords);
            define('logo',$logo);
            require 'view/site/header.php';
            require 'view/site/home.php';
        }
require 'view/site/footer.php';

?>