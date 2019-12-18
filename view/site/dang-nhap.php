<!-- START MAIN CONTENT-->
<section class="fekit-breakcrumb-2" style="background-image:url('<?php echo base_url('');?>public/site/asset/img/dacsantaybac/breakcrumb/b-02.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="content">
                <h3><a class="text-light" href="?page=dang-nhap">Đăng nhập</a></h3>
                <h6><a href="index.php">Trang chủ</a><a class="active" href="?page=dang-nhap"> <i class="fas fa-angle-right"></i> Đăng nhập</a></h6></div>
        </div>
    </section>
<main>
    <section class="fekit-form-2">
        <div class="container">
            <div class="title">
                <h2>Đăng nhập</h2>
                <hr class="size">
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-lg-5">
                    <form action="dang-nhap-check" method="post">
                        <div class="form-group form__type form__type--01">
                            <label>
                                <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                                </svg>
                                <!-- <i class="fas fa-user"></i> --></label>
                            <input type="text" size="40" aria-required="true" aria-invalid="false" placeholder="Nhập email..." name="email">
                        </div>
                        <div class="form-group form__type form__type--01">
                            <label>
                                <svg class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
                                </svg>
                                <!-- <i class="fas fa-lock"></i> --></label>
                            <input type="password" aria-required="true" aria-invalid="false" placeholder="Mật khẩu" name="password">
                        </div>
                        <div class="form-group form__type form__type--02">
                            <label>
                                <input type="checkbox" aria-required="true" aria-invalid="false">Lưu mật khẩu</label><a href="?page=quen-mat-khau">Quên mật khẩu?</a></div>
                        <div class="form-group form__type">
                            <input class="btn btn-success btn-block" type="submit" value="Đăng nhập">
                        </div>
                        <div class="form-group form__type form__type--03">
                            <p>Đăng nhập bằng:
                                <a href="">
                                    <svg class="svg-inline--fa fa-facebook fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path>
                                    </svg>
                                    <!-- <i class="fab fa-facebook"></i> -->Facebook</a>
                                <a href="">
                                    <svg class="svg-inline--fa fa-google fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg>
                                    <!-- <i class="fab fa-google"></i> -->Google</a>
                            </p>
                            <p>Chưa có tài khoản?<a href="/dang-ki.html">Đăng kí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>