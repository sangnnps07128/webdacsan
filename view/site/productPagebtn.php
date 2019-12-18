<?php
require '../../model/connect.php';
require '../../model/product.php';

if (isset($_POST['postCategory']) && isset($_POST['postEntries'])) {
    $postCategory = $_POST['postCategory'];
    $postEntries = $_POST['postEntries'];
    $countProduct = new product();
    $countS = $countProduct->countProductListPage($postCategory);
    extract($countS);
    if ($total == 0) {
        echo "
            <script>
                $.post('../view/site/showproduct.php', {noEntries: 1}, function (data) {
                    $('#product').html(data);
                });
            </script>";
    } else {
        $finalCS = ceil($total / $postEntries);
        for ($i = 1; $i <= $finalCS; $i++) {
            echo "
                <input type='hidden' id='category$i' value='$postCategory'>
                <input type='hidden' id='entries$i' value='$postEntries'>
                <input type='hidden' id='page$i' value='$i'>
                <button type=\"submit\" id='submit$i' value='$i' class=\"btn btn-primary\">$i</button>
                ";
        }
        echo "
            <script>
                $.post('../view/site/showproduct.php', {postPage: 1, postEntries: $postEntries, postCategory: $postCategory}, function (data) {
                          $('#product').html(data);
                     });
                $('#numberPage').click(function(event) {
                    var page = $(event.target).val();
                    var category = $('#category' + page).val();
                    var entries = $('#entries' + page).val();
                        $.post('../view/site/showProduct.php', {postPage: page , postEntries: entries, postCategory: category}, function (data) {
                            $('#product').html(data);
                        });
                });
            </script>
            ";
    }
}
