<?php

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $data = new product();
  $result = $data -> getproductById($id);
  extract($result);

  $data_category = new category();
  $result_category = $data_category -> getCategoryById($id_category);
  extract($result_category);
}
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
    // echo '<script>alert("'.$keyword.'");</script>';
// $title = "$name_product | ChoDacSanSach.VN";
// $description = "_substr($des_seo,155)";
// $keyword = _substr($key_seo,160);
?>
    <!-- START MAIN CONTENT-->
    <section class="fekit-breakcrumb-2" style="background-image:url('<?php echo base_url('');?>/public/site/asset/img/dacsantaybac/breakcrumb/b-02.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="content">
                <h3><a class="text-light" href="?page=chi-tiet-san-pham&id=<?php echo $id_product;?>">Chi tiết sản phẩm <?php echo $name_product;?></a></h3>
                <h6><a href="index.php">Trang chủ</a><a class="active" href=""> <i class="fas fa-angle-right"></i> <?php echo $name_product;?></a></h6></div>
        </div>
    </section>
    <main>
        <section class="fekit-shop-detail-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box-img"><img src="<?php echo base_url('');?>/controller/uploaded/product/<?php echo $image_product;?>" alt="'.$name_product.'"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="box__content">
                            <div class="container">
                                <div class="title">
                                    <h2>Tên sản phẩm: <?php echo $name_product;?></h2>
                                    <p class="price">Giá sản phẩm: <?php echo number_format($price_product);?> VNĐ</p>
                                </div>
                                <div class="detail">
                                    <h4>Mô tả ngắn</h4>
                                    <p><?php echo $des_seo;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                    <div class="col-md-12" style="font-size:16px">
                        <div class="container">
                        <h1 style="display:none"><?php echo $name_product;?></h1>
                        <h3 style="display:none"><?php echo $name_product;?></h3>
                        <h5 style="display:none">Đặc sản tây bắc</h5>
                        <h6 style="display:none">chodacsansach.vn</h6>
                    <?php echo $describe_product;?>
                        </div>
                    </div>
                </div>
                </div>

                <div class="box__feedback">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#loai01" role="tab" aria-controls="loai01" aria-selected="false">Từ khóa sản phẩm</a></li>
                                <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#loai02" role="tab" aria-controls="loai02" aria-selected="true">Đánh giá khách hàng</a></li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane active show" id="loai01" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="feedback__description">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                            <p>
                                            <?php echo _substr($key_seo,170)?>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $data_cmt = new comment();
                                $data_acc = new account();
                                
                                if(isset($_POST['comment'])) {
                                $name_comment = $_POST['name_comment'];
                                $id_account = $_POST['id_account'];
                                $id_product = $id;
                                $content = $_POST['content'];
                                $email_comment = $_POST['email_comment'];
                                $data_cmt -> insert_comment($id_account, $name_comment, $id_product, $content, $email_comment);
                                echo '<script>alert("Bình luận thành công");</script>';
                                }
                                ?>
                                <div class="tab-pane fade" id="loai02" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                        <?php
                                        $r_cmt = $data_cmt -> getcommentbyid($id);
                                            foreach ($r_cmt as $r_cmt){
                                            extract($r_cmt);
                                            echo '
                                            <div class="feedback__acount feedback__acount--first">
                                                <h3><strong>'.$name_comment.'</strong> - '.$email_comment.'</h3>
                                                <p>
                                                '.$content.'</p>
                                            </div>';}?>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-lg-6">
                                            <div class="feedback__form">
                                            <?php
                                            if(isset($_SESSION['account'])){
                                                $r_data_acc = $data_acc -> getAccountByEmail($mail);
                                                extract($r_data_acc);
                                                echo '
                                                <h3>Viết bình luận</h3>
                                                <form action="" method="post" novalidate="novalidate">
                                                <input type="hidden" name="id_account" value="'.$id_account.'">
                                                <input type="hidden" name="id_product" value="'.$id.'">
                                                    <p>
                                                        <label>Tên của bạn (*)
                                                            <br><span><input type="text" name="name_comment" value="'.$name_account.'" size="40" aria-required="true" aria-invalid="false"></span></label>
                                                    </p>
                                                    <p>
                                                        <label>Email liên hệ (*)
                                                            <br><span><input type="email_account" name="email_comment" value="'.$email_account.'" size="40" aria-required="true" aria-invalid="false"></span></label>
                                                    </p>
                                                    <p>
                                                        <label>Nội dung
                                                            <br><span><textarea name="content" cols="40" rows="5" aria-invalid="false"></textarea></span></label>
                                                    </p>
                                                    <p>
                                                        <input name="comment" class="btn btn-success btn-block" type="submit" value="Gửi">
                                                    </p>
                                                </form>
                                                ';}
                                                else {
                                                    echo "<h5>Bạn cần <a href=\"dang-nhap.html\" target=\"_blank\">đăng nhập</a> để viết bình luận.</h5>";
                                                }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box__relation">
                    <div class="title">
                        <h2><strong>Sản phẩm</strong> liên quan</h2>
                        <p>Lấy con người và môi trường làm trọng tâm, cùng chia sẻ kết quả với đối tác,
                            <br> theo đuổi đến cùng mục tiêu kinh doanh.</p>
                        <div class="separator"><i class="hoa-ban" style="background: url('<?php echo base_url('');?>/public/site/asset/img/dacsantaybac/hoaban.png')"></i></div>
                    </div>
                    <article class="owl-carousel owl-theme list-items">
                    <?php
                    $data_sp_cl = $data -> getproductbycategory($id_category);
                    foreach ($data_sp_cl as $data_sp_cl){
                    extract($data_sp_cl);
                    $kq_percent = 100 - $sale_product;
                    $kq2_percent = $kq_percent/100;
                    $price = $price_product * $kq2_percent;
                    $new_name = utf8tourl(utf8convert($name_product));
                    echo '
                        <div class="item">
                            <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                <figure>
                                    <div class="box"><img src="'.base_url('').'/controller/uploaded/product/'.$image_product.'" alt="'.$name_product.'"></div>
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
                        ';}?>
                    </article>
                </div>
            </div>
        </section>
    </main>