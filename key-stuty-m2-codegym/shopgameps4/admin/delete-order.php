<?php  include 'dataBaseConnect.php'; ?>
<?php 
    //lấy id được truyền qua
    $id = $_GET['id'];
    $sql_1 = "DELETE FROM `orderdetails` WHERE `orderdetails`.`id_order` = '$id'";
    $stmt   = $connect->query( $sql_1 );
    //xóa dữ liệu
    $sql    = " DELETE FROM orders WHERE id_order = '$id'";
    $stmt   = $connect->query( $sql );

    //chuyển hướng về trang danh sách
    header("Location: list-orders.php");

?>