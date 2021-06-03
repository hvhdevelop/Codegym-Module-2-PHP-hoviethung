<?php  include 'dataBaseConnect.php'; ?>
<?php 
    //lấy id được truyền qua
    $id = $_GET['id'];//10
    
    //xóa dữ liệu
    $sql    = " DELETE FROM type_product WHERE id_type = $id";
    $stmt   = $connect->query( $sql );

    //chuyển hướng về trang danh sách
    header("Location: list-categories.php");

?>