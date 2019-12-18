<?php


class product
{
    var $id_product = null;
    var $name_product = null;
    var $price_product = null;
    var $sale_product = null;
    var $image_product = null;
    var $describe_product = null;
    var $vip_product = null;
    var $id_category = null;

    public function __construct()
    {
    }
    // ==================================================
    //Lấy danh sách cửa hàng từ database
    // ==================================================

    function getAllproduct()
    {
        $db = new connect();
        $select = "select * from product ORDER BY id_product DESC";
        $result = $db->getList($select);
        return $result;
    }



    // ==================================================
    //Lấy thông tin danh mục theo ID
    // ==================================================
    function getproductById($id)
    {
        $db = new connect();
        $select = "select * from product where id_product=$id";
        $product_array = $db->getInstance($select);
        return $product_array;
    }
    // ==================================================
    //Lấy đặc sản
    // ==================================================
    function getdacsan($id)
    {
        $db = new connect();
        $select = "select * from product where id_category=$id LIMIT 13";
        $result = $db->getList($select);
        return $result;
    }

    // ==================================================
    //Lấy sản phẩm theo id category
    // ==================================================
    function getproductbycategory($id)
    {
        $db = new connect();
        $select = "select * from product where id_category=$id LIMIT 7";
        $result = $db->getList($select);
        return $result;
    }
    // ==================================================
    //Lấy sản phẩm theo id category
    // ==================================================
    function getproductbyvip()
    {
        $db = new connect();
        $select = "select * from product where vip_product=1 LIMIT 7";
        $result = $db->getList($select);
        return $result;
    }

    // ==================================================
    //Lấy sản phẩm theo giá
    // ==================================================
    function getproductbysale()
    {
        $db = new connect();
        $select = "SELECT * FROM product ORDER BY sale_product DESC LIMIT 7";
        $result = $db->getList($select);
        return $result;
    }

    // ==================================================
    //Lấy sản phẩm LIMIT
    // ==================================================
    function getproductlimit()
    {
        $db = new connect();
        $select = "SELECT * FROM product ORDER BY id_product DESC LIMIT 7";
        $result = $db->getList($select);
        return $result;
    }

    // ==================================================
    //Thêm danh mục
    // ==================================================
    function insert_product($name_product, $price_product, $sale_product, $image_product, $image_product_2, $describe_product, $des_seo, $key_seo, $vip_product, $id_category)
    {
        $db = new connect();
        $query = "INSERT INTO product(name_product, price_product, sale_product, image_product, image_product_2, describe_product, des_seo, key_seo, vip_product, id_category) VALUES ('$name_product', '$price_product', '$sale_product', '$image_product', '$image_product_2', '$describe_product', '$des_seo', '$key_seo', '$vip_product', '$id_category')";
        $db->exec($query);
    }



    // ==================================================
    //Cập nhật cửa hàng
    // ==================================================
    function update_product($name_product, $price_product, $sale_product, $image_product, $image_product_2, $describe_product, $vip_product, $id_category, $id_product)
    {
        $db = new connect();
        $query = "UPDATE product set name_product='$name_product', price_product='$price_product', sale_product='$sale_product', image_product='$image_product', image_product_2='$image_product_2', describe_product='$describe_product', vip_product='$vip_product', id_category='$id_category' where id_product='$id_product'";
        $db->exec($query);
    }

    // ==================================================
    //Cập nhật cửa hàng không hình
    // ==================================================
    function update_product_noimage($name_product, $price_product, $sale_product, $describe_product, $vip_product, $id_category, $id_product)
    {
        $db = new connect();
        $query = "UPDATE product set name_product='$name_product', price_product='$price_product', sale_product='$sale_product', describe_product='$describe_product', vip_product='$vip_product', id_category='$id_category' where id_product='$id_product'";
        $db->exec($query);
    }


    // ==================================================
    //Xóa danh mục
    // ==================================================
    function delete_product($id)
    {
        $db = new connect();
        $query = "delete from product where id_product = '$id'";
        $db->exec($query);
    }



    // ==================================================
    //Đếm số lượng cửa hàng
    // ==================================================
    function countproductList()
    {
        $db = new connect();
        $select = "select count(*) as total from product";
        $result = $db->getInstance($select);
        return $result;
    }

    // Tìm kiếm sản phẩm
    function search_product($key){
        $db = new connect();
        $select = "SELECT * FROM `product` WHERE name_product like '%$key%'";
        $result = $db ->getList($select);
        return $result;
    }

    // ==================================================
    //Hiển thị cửa hàng theo trang
    // ==================================================
    function getproductByPage($page, $entries)
    {
        if ($page == 1) {
            $tmpPage = $page - 1;
        } else {
            $tmpPage = (($page - 1) * $entries);
        }
        $db = new connect();
        $select = "select * from product order by sort limit $tmpPage, $entries";
        $result = $db->getList($select);
        return $result;
    }
}