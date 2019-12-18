<?php
session_start();
// Connect databasse
require '../model/connect.php';
// SEO Google
require '../model/home.php';
//Admin Page
require '../model/category.php';
require '../model/product.php';
require '../model/account.php';
require '../model/award.php';
require '../model/banner.php';
require '../model/comment.php';
require '../model/contact.php';
require '../model/upload.php';
require '../model/help.php';
//Lading Page
require '../model/landing-page/intro.php';
require '../model/landing-page/library.php';
require '../model/landing-page/plan.php';
require '../model/landing-page/evaluate.php';
require '../model/landing-page/order.php';
require '../model/landing-page/home.php';

if(isset($_SESSION['account'])){
    $login_admin = new account();
    $result_account = $login_admin->getAccountByEmail($_SESSION['account']);
    extract($result_account);
    if($level == 1){
require '../view/admin/header.php';
if (isset($_GET["go"]))
$go = $_GET["go"];
else if (isset($_POST["go"]))
$go = $_POST["go"];
else 
$go = "home";
switch ($go) {
    case "home":
        require '../view/admin/home.php';
    break;
    case "setting":
        require '../view/admin/seo/meta.php';
    break;
    case "category":
        require '../view/admin/category.php';
    break;
    case "comment":
    require '../view/admin/comment.php';
    break;
    case "check_comment":
    require '../view/admin/check_comment.php';
    break;
    case "contact":
    require '../view/admin/contact.php';
    break;
    case "acction_insert_category":
        if (isset($_POST['insert'])) {
            $name_category = $_POST['name_category'];
            $db = new category();
            $db -> add_category($name_category);
            require '../view/admin/category.php';
        }else {
            require '../view/admin/category.php';
        }
    break;
    case "update_category":
        require '../view/admin/update_category.php';
    break;
    case "product":
        require "../view/admin/product.php";
    break;
    case "add_product":
        require '../view/admin/add_product.php';
    break;
    case "acction_insert_product":
        if (isset($_POST['insert'])) {
            // Lay kich thuoc hinh anh
        $fileinfo = @getimagesize($_FILES["image_product"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "png",
            "PNG",
            "jpg",
            "JPG",
            "jpeg",
            "JPEG"
        );
        
        // Lay phan mo rong hinh anh
        $file_extension = pathinfo($_FILES["image_product"]["name"], PATHINFO_EXTENSION);
        
        // Xác thực nhập tệp để kiểm tra nếu không trống
        if (! file_exists($_FILES["image_product"]["tmp_name"])) {
            echo '<script>alert("Bạn chưa chọn file upload hình ảnh");
                          window.location.assign("admin.php?go=product");
                  </script>';
        }

        // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
        else if (! in_array($file_extension, $allowed_image_extension)) {
            echo '<script>alert("Vui lòng upload hình ảnh có dạng png,jpg,jpeg");
                          window.location.assign("admin.php?go=product");
                  </script>';
        } 
        else {
            // $target = "public/site/images/" . basename($_FILES["image_product"]["name"]);
            if (move_uploaded_file($_FILES['image_product']['tmp_name'],getcwd().'/'.$path_img_product.$_FILES['image_product']['name']))
            {
            $name_product = $_POST['name_product'];
            $price_product = $_POST['price_product'];
            $sale_product = $_POST['sale_product'];
            $image_product = $_FILES['image_product']['name'];
            move_uploaded_file($_FILES['image_product_2']['tmp_name'],getcwd().'/'.$path_img_product.$_FILES['image_product_2']['name']);
            $image_product_2 = $_FILES['image_product_2']['name'];
            $describe_product = $_POST['describe_product'];
            $des_seo = $_POST['des_seo'];
            $key_seo = $POST['key_seo'];
            if(isset($_POST['vip_product'])) {
            if($_POST['vip_product']) {
            $vip_product = 1;
            }else {
            $vip_product = 0;
            }
            }else {
            $vip_product = 0;
            }
            $id_category = $_POST['id_category'];
            $db = new product();
            $db -> insert_product($name_product, $price_product, $sale_product, $image_product, $image_product_2, $describe_product, $des_seo, $key_seo, $vip_product, $id_category);
            echo '<script>alert("Lỗi upload ảnh");
                          window.location.assign("admin.php?go=product");
                  </script>';
                }
            else {
                echo '<script>alert("Lỗi upload ảnh");
                          window.location.assign("admin.php?go=product");
                  </script>';
            }
        }
    }
    break;
    case "update_product":
        require '../view/admin/update_product.php';
    break;
    case "check_product":
        require '../view/admin/check_product.php';
    break;
    case "award":
        require '../view/admin/award.php';
    break;
    case "insert_award":
    if (isset($_POST["upload_submit"])) {
        // Lay kich thuoc hinh anh
        $fileinfo = @getimagesize($_FILES["images_award"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "png",
            "PNG",
            "jpg",
            "JPG",
            "jpeg",
            "JPEG"
        );
        
        // Lay phan mo rong hinh anh
        $file_extension = pathinfo($_FILES["images_award"]["name"], PATHINFO_EXTENSION);
        
        // Xác thực nhập tệp để kiểm tra nếu không trống
        if (! file_exists($_FILES["images_award"]["tmp_name"])) {
            $response = array(
                "type" => "danger",
                "message" => "Bạn chưa chọn file upload hình ảnh"
            );
        }

        // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
        else if (! in_array($file_extension, $allowed_image_extension)) {
            $response = array(
                "type" => "danger",
                "message" => "Vui lòng upload hình ảnh có dạng png,jpg,jpeg"
            );
        } 
        else {
            // $target = "public/site/images/" . basename($_FILES["images_award"]["name"]);
            if (move_uploaded_file($_FILES['images_award']['tmp_name'],getcwd().'/'.$path_img_award.$_FILES['images_award']['name']))
            {
                $get_img = $_FILES['images_award']['name'];
                $db = new award();
                $db -> insert_award($get_img);
                }
            else {
                $response = array(
                    "type" => "danger",
                    "message" => "Lỗi upload hình ảnh."
                );
            }
        }
    }
    require '../view/admin/award.php';
    break;
    case "check_award":
        require '../view/admin/check_award.php';
    break;
    case "banner":
        require '../view/admin/banner.php';
    break;
    case "insert_banner":
    if (isset($_POST['submit_banner'])) {
        // Lay kich thuoc hinh anh
        $fileinfo = @getimagesize($_FILES["images_banner"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "png",
            "PNG",
            "jpg",
            "JPG",
            "jpeg",
            "JPEG"
        );
        
        // Lay phan mo rong hinh anh
        $file_extension = pathinfo($_FILES["images_banner"]["name"], PATHINFO_EXTENSION);
        
        // Xác thực nhập tệp để kiểm tra nếu không trống
        if (! file_exists($_FILES["images_banner"]["tmp_name"])) {
            echo '<script>alert("Bạn chưa chọn file upload hình ảnh");
                          window.location.assign("admin.php?go=banner");
                  </script>';
        }

        // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
        else if (! in_array($file_extension, $allowed_image_extension)) {
            echo '<script>alert("Vui lòng upload hình ảnh có dạng png,jpg,jpeg");
                          window.location.assign("admin.php?go=banner");
                  </script>';
        } 
        else {
            // $target = "public/site/images/" . basename($_FILES["images_banner"]["name"]);
            if (move_uploaded_file($_FILES['images_banner']['tmp_name'],getcwd().'/'.$path_img_banner.$_FILES['images_banner']['name']))
            {
                $get_img_banner = $_FILES['images_banner']['name'];
                $title_banner = $_POST['title_banner'];
                $des_banner = $_POST['des_banner'];
                $link_banner = $_POST['link_banner'];
                $db = new banner();
                $db -> insert_banner($get_img_banner,$title_banner,$des_banner,$link_banner);
                require '../view/admin/banner.php';
                }
            else {
                echo '<script>alert("Lỗi upload hình ảnh.");
                          window.location.assign("admin.php?go=banner");
                  </script>';
            }
        }
                
    }
        
    break;
    case "update_banner":
        require '../view/admin/update_banner.php';
    break;
    case 'account':
        require '../view/admin/account/account.php';
    break;
    case 'update_account':
        require '../view/admin/account/update_account.php';
    break;
    case 'action_insert_account':
        if(isset($_POST['update'])){
            $email_account = $_POST['email_account'];
            $pass_account= $_POST['pass_account'];
            $name_account = $_POST['name_account'];
            $address_account = $_POST['address_account'];
            $phone_account = $_POST['phone_account'];
            $level = $_POST['level'];
            $id_account = $_POST['id_account'];
            $db = new account();
            $db -> update_account($name_account, $email_account, $pass_account, $phone_account, $address_account, $level, $id_account);
            echo '<script>alert("Cập nhật thành công.");
                          window.location.assign("admin.php?go=account");
                  </script>';
        }
            require '../view/admin/account/account.php';
    break;
    case 'action_update_account':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fullname = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $function = $_POST['function'];
            $id = $_POST['id_account'];
            $db = new account();
            $db -> updateAccount($email,$password,$avatar,$fullname,$phone,$address,$function,$id);
            require '../view/admin/account/account.php';
    break;

    // Landing Page Controller
    
    case 'setting_landingpage':
        require '../view/landing-page/seo/meta.php';
    break;
    case 'intro':
        require '../view/landing-page/intro.php';
    break;
    case 'update_intro':
        require '../view/landing-page/update_intro.php';
    break;
    case 'plan':
        require '../view/landing-page/plan.php';
    break;
    case 'insert_plan':
    
    break;
    case 'update_plan':
        require '../view/landing-page/update_plan.php';
    break;
    case 'library':
        require '../view/landing-page/library.php';
    break;
    case 'insert_library':
    if (isset($_POST["upload_submit"])) {
        // Lay kich thuoc hinh anh
        $fileinfo = @getimagesize($_FILES["images"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "png",
            "PNG",
            "jpg",
            "JPG",
            "jpeg",
            "JPEG"
        );
        
        // Lay phan mo rong hinh anh
        $file_extension = pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION);
        
        // Xác thực nhập tệp để kiểm tra nếu không trống
        if (! file_exists($_FILES["images"]["tmp_name"])) {
            $response = array(
                "type" => "danger",
                "message" => "Bạn chưa chọn file upload hình ảnh"
            );
        }

        // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
        else if (! in_array($file_extension, $allowed_image_extension)) {
            $response = array(
                "type" => "danger",
                "message" => "Vui lòng upload hình ảnh có dạng png,jpg,jpeg"
            );
        } 
        else {
            // $target = "public/site/images/" . basename($_FILES["images"]["name"]);
            if (move_uploaded_file($_FILES['images']['tmp_name'],getcwd().'/'.$path_img_library.$_FILES['images']['name']))
            {
                $get_img = $_FILES['images']['name'];
                $db = new library();
                $db -> insert_library($get_img);
                    require '../view/landing-page/library.php';
                }
            else {
                $response = array(
                    "type" => "danger",
                    "message" => "Lỗi upload hình ảnh."
                );
            }
        }
    }

    break;
    case "check_library":
        require '../view/landing-page/check_library.php';
    break;
    case 'evaluate':
        require '../view/landing-page/evaluate.php';
    break;
    case 'insert_evaluate':
    if (isset($_POST['submit_evaluate'])) {
        // Lay kich thuoc hinh anh
        $fileinfo = @getimagesize($_FILES["images"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "png",
            "PNG",
            "jpg",
            "JPG",
            "jpeg",
            "JPEG"
        );
        
        // Lay phan mo rong hinh anh
        $file_extension = pathinfo($_FILES["images"]["name"], PATHINFO_EXTENSION);
        
        // Xác thực nhập tệp để kiểm tra nếu không trống
        if (! file_exists($_FILES["images"]["tmp_name"])) {
            echo '<script>alert("Bạn chưa chọn file upload hình ảnh");
                          window.location.assign("admin.php?go=evaluate");
                  </script>';
        }

        // Xác thực nhập tệp để kiểm tra xem có mở rộng hợp lệ không
        else if (! in_array($file_extension, $allowed_image_extension)) {
            echo '<script>alert("Vui lòng upload hình ảnh có dạng png,jpg,jpeg");
                          window.location.assign("admin.php?go=evaluate");
                  </script>';
        } 
        else {
            if (move_uploaded_file($_FILES['images']['tmp_name'],getcwd().'/'.$path_img_evaluate.$_FILES['images']['name']))
            {
                $get_img_evaluate = $_FILES['images']['name'];
                $name = $_POST['name'];
                $text = $_POST['text'];
                $db = new evaluate();
                $db -> insert_evaluate($name, $text, $get_img_evaluate);
                require '../view/landing-page/evaluate.php';
                }
            else {
                echo '<script>alert("Lỗi upload hình ảnh.");
                          window.location.assign("admin.php?go=evaluate");
                  </script>';
            }
        }
                
    }
    break;
    case 'update_evaluate':
        require '../view/landing-page/update_evaluate.php';
    break;
    case 'order':
        require '../view/landing-page/order.php';
    break;

}
require '../view/admin/footer.php';
}
else {
    echo '<script>alert("Bạn không có quyền vào trang này");
    </script>';
    echo 'Nguyễn Ngọc Sáng - Team FpolyHub Developer';
}
}else {
    echo '<script>alert("Bạn không có quyền vào trang này");
    </script>';
    echo 'Nguyễn Ngọc Sáng - Team FpolyHub Developer';
}
?>