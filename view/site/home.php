<section class="fekit-slider-1">
        <article class="owl-carousel owl-theme list-items">
            <?php
            $db_banner = new banner();
            $result_db_banner = $db_banner -> getAllbanner();
            foreach ($result_db_banner as $result_db_banner) {
                extract($result_db_banner);
                echo '
            <div class="item">
                <figure>
                    <div class="box__img"></div><img src="'.base_url('').'controller/uploaded/banner/'.$images_banner.'" alt="">
                    <figcaption>
                        <h3>'.$title_banner.'</h3>
                        <p>'.$des_banner.'</p><a class="btn btn-outline-fekit" href="'.$link_banner.'" target="_blank">Xem thêm</a><a class="btn btn-outline-fekit-2" href="javascript:void(0)">Mua ngay</a></figcaption>
                </figure>
            </div>
            ';} ?>
        </article>
</section>
    <!-- START MAIN CONTENT-->
    <main>
        <section class="fekit-carousel-2">
            <div class="container">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#loai01" role="tab" aria-controls="loai01" aria-selected="true">Sản phẩm nổi bật</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#loai02" role="tab" aria-controls="loai02" aria-selected="false">Top sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#loai03" role="tab" aria-controls="loai03" aria-selected="false">Sản phẩm mới nhất</a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="loai01" role="tabpanel" aria-labelledby="pills-home-tab">
                        <article class="owl-carousel owl-theme list-items">
                            <?php
                            $db_product = new product();
                            $result_db_product_hot = $db_product->getproductbyvip();
                            foreach ($result_db_product_hot as $result_db_product_hot)
                            {
                                extract($result_db_product_hot);
                                $kq_percent = 100 - $sale_product;
                                $kq2_percent = $kq_percent/100;
                                $price = $price_product * $kq2_percent;
                                $new_name = utf8tourl(utf8convert($name_product));
                                echo '
                            <div class="item">
                                <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                    <figure>
                                        <div class="box"><img class="hinh-1" src="'.base_url('').'controller/uploaded/product/'.$image_product.'" alt="'.$name_product.'"><img class="hinh-2" src="'.base_url('').'controller/uploaded/product/'.$image_product_2.'" alt="'.$name_product.'"><i class="fas fa-utensils"></i></div>
                                        <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                                        <figcaption>
                                            <h3>'.$name_product.'</h3>
                                            <div class="count">
                                                <div class="discount text-center">Giá: '.number_format($price).' VNĐ/1Kg<br><span style="color:green">(Đã bao gồm phí ship <10Km)</span></div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            ';}?>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="loai02" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <article class="owl-carousel owl-theme list-items">
                            <?php
                            $result_db_product_sale = $db_product->getproductbysale();
                            foreach ($result_db_product_sale as $result_db_product_sale)
                            {
                                extract($result_db_product_sale);
                                $kq_percent = 100 - $sale_product;
                                $kq2_percent = $kq_percent/100;
                                $price = $price_product * $kq2_percent;
                                echo '
                            <div class="item">
                                <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                    <figure>
                                        <div class="box"><img class="hinh-1" src="'.base_url('').'controller/uploaded/product/'.$image_product.'" alt="'.$name_product.'"><img class="hinh-2" src="'.base_url('').'controller/uploaded/product/'.$image_product_2.'" alt=""><i class="fas fa-utensils"></i></div>
                                        <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                                        <figcaption>
                                            <h3>'.$name_product.'</h3>
                                            <div class="count">
                                                <div class="discount text-center">Giá: '.number_format($price).' VNĐ/1Kg<br><span style="color:green">(Đã bao gồm phí ship <10Km)</span></div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            ';}?>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="loai03" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <article class="owl-carousel owl-theme list-items">
                        <?php
                            $result_db_product = $db_product->getproductlimit();
                            foreach ($result_db_product as $result_db_product)
                            {
                                extract($result_db_product);
                                $kq_percent = 100 - $sale_product;
                                $kq2_percent = $kq_percent/100;
                                $price = $price_product * $kq2_percent;
                                $new_name = utf8tourl(utf8convert($name_product));
                                echo '
                            <div class="item">
                                <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                    <figure>
                                        <div class="box"><img class="hinh-1" src="'.base_url('').'controller/uploaded/product/'.$image_product.'" alt="'.$name_product.'"><img class="hinh-2" src="'.base_url('').'controller/uploaded/product/'.$image_product_2.'" alt="'.$name_product.'"><i class="fas fa-utensils"></i></div>
                                        <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                                        <figcaption>
                                            <h3>'.$name_product.'</h3>
                                            <div class="count">
                                                <div class="discount text-center">Giá: '.number_format($price).' VNĐ/1Kg<br><span style="color:green">(Đã bao gồm phí ship <10Km)</span></div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            ';}?>
                        </article>
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col d-flex"><a class="fekit-button" href="#">Xem thêm</a></div>-->
                <!--</div>-->
            </div>
        </section>
        <section class="fekit-box-15" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/cakhonieu/c-3.jpg')">
            <div class="container">
                <div class="title">
                    <h2><strong>Cá kho</strong> trần luận</h2>
                    <p>Lấy con người và môi trường làm trọng tâm, cùng chia sẻ kết quả với đối tác,
                        <br> theo đuổi đến cùng mục tiêu kinh doanh.</p>
                    <div class="separator"><i class="hoa-ban" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/hoaban.png')"></i></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <article class="owl-carousel owl-theme list-items">
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/cakhonieu/c-01.png" alt="Đặc sản tây bắc"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/cakhonieu/c-02.png" alt="Đặc sản tây bắc"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/cakhonieu/c-03.png" alt="Chợ đặc sản sạch"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/cakhonieu/c-04.png" alt="Đặc sản tây bắc"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/cakhonieu/c-06.png" alt="Chợ đặc sản sạch"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <div class="content">
                            <p>Món cá kho làng Vũ Đại hay còn gọi là Cá kho Đại Hoàng là đặc sản nổi tiếng của làng Nhân Hậu, xã Hòa Hậu, huyện Lý Nhân, tỉnh Hà Nam. Món ăn này có từ rất lâu, do là vùng trũng nên trong làng ngày trước nhiều ao hồ, cứ đến tết tát ao, chọn những con cá trắm đen to và ngon nhất để kho theo công thức gia truyền cùng với gia vị là gừng, giềng, hành, ớt, nước cốt chanh, nước cốt cua đồng....đặc biệt là cá được kho trong niêu đất, trên bếp lửa trong thời gian 16 đến 20 tiếng nên vừa có vị thơm của lửa, vừa phảng phất những hương vị đồng quê, ăn rất tốn cơm, người già trẻ nhỏ không lo hóc xương, ai ai cũng thích.</p>
                            <p>Những mặt hàng đặc sản của đồng bào dân tộc sinh sống ở vùng núi cao Tây Bắc, đặc biệt là dân tộc Thái như thịt trâu khô, thịt bò khô, thịt lợn khô, mắc khén, chẳm chéo, gạo tám Điện Biên … được làm và chế biến một cách thủ công, có rất nhiều khách hàng trên cả nước ưa chuộng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <section class="fekit-carousel-2 pb-0">
            <div class="container">
                <div class="title">
                    <h2>ĐẶC SẢN <strong class="pr-1">Tây Bắc</strong></h2>
                    <p>Lấy con người và môi trường làm trọng tâm, cùng chia sẻ kết quả với đối tác,
                        <br> theo đuổi đến cùng mục tiêu kinh doanh.</p>
                    <div class="separator"><i class="taybac" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/titlebg.png')"></i></div>
                </div>
            </div>
        </section>
        <section class="fekit-carousel-2 product__noibat p-0">
            <div class="container">
                <div class="background d-none d-lg-block" style="background: url('https://photo-3-baomoi.zadn.vn/w1000_r1/18/02/17/328/24973253/1_86431.jpg')"></div>
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 content p-2 p-md-4">
                        <h4>Thịt lợn khô gác bếp</h4>
                        <p>Trải qua những đúc kết từ bao đời nay, người dân tộc vùng Tây Bắc đã tạo ra những món ăn riêng rất ngon và hấp dẫn mà không nơi nào có được. Những món ăn này là những “đặc sản” của núi cao, đem hương vị của núi, của rừng, của hồn người Tây Bắc</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="item"><a href="#"><span class="trangthai">40%</span><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/dacsanhagiang/d-01.png" alt="" width="100%"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fekit-box-14">
            <div class="container">
                <div class="title">
                    <h2><strong>Ẩm thực</strong> Hà Giang</h2>
                    <p>Lấy con người và môi trường làm trọng tâm, cùng chia sẻ kết quả với đối tác,
                        <br> theo đuổi đến cùng mục tiêu kinh doanh.</p>
                    <div class="separator"><i class="hoa-ban" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/hoaban.png')"></i></div>
                </div>
                <div class="row">
                <?php
                    $result_db_product_kho = $db_product -> getproductbycategory(2);

                    // $price = ($price_product * ($sale_product / 100));
                    foreach ($result_db_product_kho as $result_db_product_kho)
                    {
                        extract($result_db_product_kho);
                        $kq_percent = 100 - $sale_product;
                        $kq2_percent = $kq_percent/100;
                        $price = $price_product * $kq2_percent;
                        $new_name = utf8tourl(utf8convert($name_product));
                        echo '
                    <div class="col-sm-6 col-lg-3">
                        <div class="item ha-giang" id="hg-'.$id_product.'">
                            <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                <figure>
                                    <div class="box"><img src="'.base_url('').'/controller/uploaded/product/'.$image_product.'" alt=""></div>
                                    <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                                    <figcaption>
                                        <h5>'.$name_product.'</h5>
                                        <div class="price">
                                            <p class="currency"><span class="price-hg">Giá: '.number_format($price).' VNĐ</span>
                                            <br><span style="color:green">(Đã bao gồm phí ship <10Km)</span></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    ';}?>
                </div>
                <div class="row">
                    <div class="col d-flex"><a class="fekit-button" href="https://chodacsansach.vn/dac-san/2/dac-san-ha-giang.html">Xem thêm</a></div>
                </div>
            </div>
        </section>
        <section class="fekit-box-13" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/pattern/p-3.png')">
            <div class="container">
                <div class="title">
                    <h2><strong>Tin hoa</strong> núi rừng</h2>
                    <p>Lấy con người và môi trường làm trọng tâm, cùng chia sẻ kết quả với đối tác,
                        <br> theo đuổi đến cùng mục tiêu kinh doanh.</p>
                    <div class="separator"><i class="hoa-ban" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/hoaban.png')"></i></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 content">
                        <p>Trải qua những đúc kết từ bao đời nay, người dân tộc vùng Tây Bắc đã tạo ra những món ăn riêng rất ngon và hấp dẫn mà không nơi nào có được. Những món ăn này là những “đặc sản” của núi cao, đem hương vị của núi, của rừng, của hồn người Tây Bắc. Với mục đích giới thiệu và cung cấp những mặt hàng đặc sản của vùng núi cao Tây Bắc đến tất cả mọi người, chúng tôi đã thành lập Đại lý đặc sản dân tộc vùng cao Hoàng Lâm</p>
                        <p>Những mặt hàng đặc sản của đồng bào dân tộc sinh sống ở vùng núi cao Tây Bắc, đặc biệt là dân tộc Thái như thịt trâu khô, thịt bò khô, thịt lợn khô, mắc khén, chẳm chéo, gạo tám Điện Biên … được làm và chế biến một cách thủ công, có rất nhiều khách hàng trên cả nước ưa chuộng.</p>
                        <p>Với tôn chỉ hoạt động: “Cam kết đảm bảo chất lượng sản phẩm với thái độ phục vụ thân thiện”, chúng tôi đã tạo dựng được uy tín trong lòng khách hàng, thu hút được có nhiều khách hàng quen thuộc thường xuyên lựa chọn và tin tưởng vào Hoàng Lâm.</p>
                    </div>
                    <div class="col-md-6">
                        <article class="owl-carousel owl-theme list-items">
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/tinhhoa/t-01.png" alt="Chợ đặc sản sạch"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/tinhhoa/t-02.png" alt="Chợ đặc sản sạch"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/tinhhoa/t-03.png" alt="Cá Kho Trần Luận"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo base_url('');?>public/site/asset/img/dacsantaybac/tinhhoa/t-04.png" alt="Đặc sản Tây Bắc"></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
            <section class="fekit-box-14">
            <div class="container">
                <div class="row">
                <?php
                    $result_db_product_kho = $db_product -> getproductbycategory(8);

                    // $price = ($price_product * ($sale_product / 100));
                    foreach ($result_db_product_kho as $result_db_product_kho)
                    {
                        extract($result_db_product_kho);
                        $kq_percent = 100 - $sale_product;
                        $kq2_percent = $kq_percent/100;
                        $price = $price_product * $kq2_percent;
                        $new_name = utf8tourl(utf8convert($name_product));
                        echo '
                    <div class="col-sm-6 col-lg-3">
                        <div class="item">
                            <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                                <figure>
                                    <div class="box"><img src="'.base_url('').'/controller/uploaded/product/'.$image_product.'" alt=""></div>
                                    <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                                    <figcaption>
                                        <h5>'.$name_product.'</h5>
                                        <div class="price">
                                            <p class="currency">Giá: '.number_format($price).' VNĐ/1Kg</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    ';}?>
                </div>
                <div class="row">
                    <div class="col d-flex"><a class="fekit-button" href="https://chodacsansach.vn/dac-san/8/cac-loai-kho-mien-cao.html">Xem thêm</a></div>
                </div>
            </div>
        </section>

        <section class="fekit-carousel-3">
            <div class="container">
                <div class="title">
                    <h2><strong>Giải thưởng</strong> ẩm thực</h2>
                    <p>Lấy con người và môi trường làm trọng tâm, cùng chia sẻ kết quả với đối tác,
                        <br> theo đuổi đến cùng mục tiêu kinh doanh.</p>
                    <div class="separator"><i class="hoa-ban" style="background: url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/hoaban.png')"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <article class="owl-carousel owl-theme list-items">
                        <?php
                        $db_award = new award();
                        $result_db_award = $db_award->getAllAward();
                        foreach($result_db_award as $result_db_award){
                            extract($result_db_award);
                            echo '
                            <div class="item">
                                <a href="#"><img src="'.base_url('').'controller/uploaded/award/'.$images_award.'" alt="Giải thưởng chợ đặc sản"></a>
                            </div>
                        ';}?>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>