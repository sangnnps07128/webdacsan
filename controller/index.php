<?php
session_start();
require 'model/connect.php';
require 'model/home.php';
require 'model/category.php';
require 'model/product.php';
require 'model/banner.php';
require 'model/award.php';
require 'model/account.php';
require 'model/help.php';
require 'view/site/header.php';

if (isset($_GET['page']) || isset($_POST['page']))  {

    if (isset($_POST['page'])){
        $page = $_POST['page'];
    }else{
        $page = $_GET['page'];
    }
    switch ($page) {
    case "home":
        require '../view/site/home.php';
    break;
    case "dac-san":
        require 'view/site/dac-san.php';
    break;
    case "dac-san-chi-tiet":
        require '../view/site/dac-san-chi-tiet.php';
    break;
    case "lien-he":
        require '../view/site/lien-he.php';
    break;
    case "dang-ki":
    	if(isset($_POST['dangki'])) {
    		$name_account = $_POST['name'];
    		$email_account = $_POST['email'];
    		$pass_account = $_POST['password'];
    		$db = new account();
    		$db -> insert_account($name_account, $email_account, $pass_account);
    		require '../view/site/home.php';
    	}else {
    		echo "<script>alert('Lỗi')</script>";
    		require '../view/site/dang-ki.php';
        }
    break;
    case 'action_login':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $db_login = new account();
            $check = $db_login->check_account($email, $password);
            if ($check == true) {
                $_SESSION['account'] = $email;
                echo '<script>window.location.assign("index.php");</script>';
            } else {
                $_SESSION['message'] = 'Thông tin đăng nhập chưa chính xác';
                echo '<script>alert("Sai r!");</script>';
                require '../view/site/home.php';
            }

            break;
    case "dang-nhap":
    require '../view/site/dang-nhap.php';
    break;
    case "quen-mat-khau":
    require '../view/site/quen-mat-khau.php';
    break;
    case "update_account":
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
        

        }
} else {
    require 'view/site/home.php';
}
require 'view/site/footer.php';

?>