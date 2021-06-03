<?php  include 'dataBaseConnect.php'; ?>
<?php 
    //lấy id được truyền qua
    $id = $_GET['id'];//10
    
    //xóa dữ liệu
    $sql    = " DELETE FROM products WHERE id_product = $id";
    $stmt   = $connect->query( $sql );

    //chuyển hướng về trang danh sách
    header("Location: list-products.php");

?>