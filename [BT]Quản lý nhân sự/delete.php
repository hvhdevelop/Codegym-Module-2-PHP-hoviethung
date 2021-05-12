<?php
    require_once 'classes/EmployeeManager.php';
    require_once 'classes/Employee.php';
    
    //khởi tạo đối tượng EmployeeManager
    use Classes\EmployeeManager;

    //lấy dữ liệu theo ID trên url
    $id = $_REQUEST['id'];

    $objEmployeeManager = new EmployeeManager();
    //gọi tới phương thức them và truyền dữ liệu vào
    $objEmployeeManager->xoa( $id );

?>