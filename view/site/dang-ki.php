<!-- START MAIN CONTENT-->
<section class="fekit-breakcrumb-2" style="background-image:url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/breakcrumb/b-02.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="content">
                <h3><a class="text-light" href="?page=dang-ki">Đăng kí</a></h3>
                <h6><a href="index.php">Trang chủ</a><a class="active" href="?page=dang-ki"> <i class="fas fa-angle-right"></i> Đăng kí</a></h6></div>
        </div>
    </section>
<main>
    <section class="fekit-form-3">
        <div class="container">
            <div class="title">
                <h2>Đăng kí</h2>
                <hr class="size">
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-xl-6">
                    <form action="dang-ki.html" method="post">
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group form__type form__type--01">
                                    <label>Họ và tên</label>
                                    <input type="text" aria-required="true" aria-invalid="false" name="name">
                                </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group form__type form__type--01">
                                    <label>Địa chỉ email</label>
                                    <input type="text" aria-required="true" aria-invalid="false" name="email">
                                </div>
                                <div class="form-group form__type form__type--01">
                                    <label>Địa chỉ cư trú</label>
                                    <input type="text" aria-required="true" aria-invalid="false" name="address">
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                            <div class="form-group form__type form__type--01">
                                    <label>Mật khẩu</label>
                                    <input type="password" aria-required="true" aria-invalid="false" name="password">
                                </div>
                                <div class="form-group form__type form__type--01">
                                    <label>Số điện thoại</label>
                                    <input type="text" aria-required="true" aria-invalid="false" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="form-group form__type">
                                    <input class="btn btn-success btn-block" type="submit" value="Tạo tài khoản" name="dangki">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>