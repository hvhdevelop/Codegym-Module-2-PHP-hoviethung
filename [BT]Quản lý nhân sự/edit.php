<?php
    require_once 'classes/EmployeeManager.php';
    require_once 'classes/Employee.php';
    
    //khởi tạo đối tượng EmployeeManager
    use Classes\EmployeeManager;
    use Classes\Employee;

    //lấy dữ liệu theo ID trên url
    $id = $_REQUEST['id'];

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $objEmployeeManager = new EmployeeManager();
        //gọi tới phương thức them và truyền dữ liệu vào
        $objEmployeeManager->sua( $id , $_REQUEST );
    }

    
   
    $objEmployee = new Employee();
    $nhan_vien = $objEmployee->lay_du_lieu_theo_id( $id );

?>
<?php include_once 'header.php'; ?>
<div style="margin-bottom:20px;">
    <a href="index.php" class="btn btn-sm btn-primary float-right">Trở Về</a>
</div>
<div style="margin-bottom:20px;">
    <form action="" method="POST">
        <div class="form-group">
            <label for="ho_va_ten">Tên</label>
            <input type="text" name="ho_va_ten" id="ho_va_ten" class="form-control"
            value="<?php echo $nhan_vien->ho_va_ten;?>"
            >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control"
            value="<?php echo $nhan_vien->email;?>"
            >
        </div>

        <div class="form-group">
            <label for="so_dien_thoai">Số điện thoại</label>
            <input type="text" name="so_dien_thoai" id="so_dien_thoai" class="form-control"
            value="<?php echo $nhan_vien->so_dien_thoai;?>"
            >
        </div>

        <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Cập Nhật">
        </div>
    </form>
</div>
<?php include_once 'footer.php'; ?>