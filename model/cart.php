<?php
function add_item($id,$quantity){
    $pros = new product();
    $pro = $pros->getProductById($id);
    //Neu san pham da co trong gio hang, cap nhat so luong
    if(isset($_SESSION['cart'][$id])){
        $quantity += $_SESSION['cart'][$id]['qty'];
        update_item($id,$quantity);
        return;
    }
    $cost = $pro['price_product']*(1 - $pro['sales_product']/100);
    $total = $cost * $quantity;
    $item = array(
        'name' => $pro['name_product'],
        'image' => $pro['images_product'],
        'cost' => $cost,
        'qty' => $quantity,
        'total' => $total
    );
    $_SESSION['cart'][$id]=$item;   

}
// cap nhat san pham cung gio hang
function update_item($id, $quantity){
    $quantity = (int)$quantity;
    if($quantity<=0){
        unset($_SESSION['cart'][$id]);
    }else{
        $_SESSION['cart'][$id]['qty']=$quantity;
        $total = $_SESSION['cart'][$id]['cost']*$_SESSION['cart'][$id]['qty'];
        $_SESSION['cart'][$id]['total']=$total;
    }
}
//lay tong doanh thu cua gio hang
function get_subtotal(){
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item){
        $subtotal += $item['total'];
    }
    $subtotal = number_format($subtotal);
    return $subtotal;
}

?>