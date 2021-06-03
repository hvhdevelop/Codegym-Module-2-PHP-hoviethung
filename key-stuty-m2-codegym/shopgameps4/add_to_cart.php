<?php
//khởi tạo session
session_start();


//lấy id sản phẩm
$id_product = $_GET['id'];

//kiểm tra session gio hang đã được khởi tạo chưa
if( isset( $_SESSION['cart'] ) ){
    $cart = $_SESSION['cart'];
}else{
    $cart = [];
}

//kiểm tra id_sp đã có trong giỏ chưa 
if( isset( $cart[$id_product] ) ){
    $cart[$id_product] += 1; //nếu có thì cộng 1
}else{
    $cart[$id_product] = 1; //nếu không thì = 1
}

//đặt lại session gio hang
$_SESSION['cart'] = $cart;

//chuyển hướng về trang sản phẩm
header("Location: product_detail.php?id=".$id_product);