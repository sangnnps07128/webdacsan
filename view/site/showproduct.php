<?php
require '../../model/connect.php';
require '../../model/product.php';
require '../../model/category.php';
require '../../model/help.php';

if (isset($_POST['noEntries'])) {
    echo "<p style='text-align: center;'>Không có sản phẩm !</p>";
}
if (isset($_POST['postEntries']) && isset($_POST['postPage']) && isset($_POST['postCategory'])) {
    $postCategory = $_POST['postCategory'];
    $postPage = $_POST['postPage'];
    $postEntries = $_POST['postEntries'];

    $db = new product();
    $print = $db->getProductByPage($postEntries, $postCategory, $postPage);

    foreach ($print as $print) {
        extract($print);
        $kq_percent = 100 - $sale_product;
        $kq2_percent = $kq_percent/100;
        $price = $price_product * $kq2_percent;
        $new_name = utf8tourl(utf8convert($name_product));
        ?>
        <?php echo '
                <div class="col-sm-4 col-lg-4">
                <div class="item prd-'.$id_category.'" id="hg-'.$id_product.'">
                    <a href="'.base_url('').'dac-san/chi-tiet/'.$id_product.'/'.$new_name.'.html">
                        <figure>
                            <div class="box"><img src="'.base_url('').'controller/uploaded/product/'.$image_product.'" alt="'.$name_product.'"></div>
                            <div class="box__item"><span class="item__top--left">Mới</span><span class="item__top--right">-'.$sale_product.'%</span></div>
                            <figcaption>
                                <h5>'.$name_product.'</h5>
                                <div class="price">
                                        <p class="currency"><span class="price-prd-'.$id_category.'">Giá: '.number_format($price).' VNĐ</span>
                                        </p>
                                        </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
                ';
            } 
        }
?>