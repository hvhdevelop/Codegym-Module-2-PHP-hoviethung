<?php
    require_once 'classes/EmployeeManager.php';
    use Classes\EmployeeManager;
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        //khởi tạo đối tượng EmployeeManager
        $objEmployeeManager = new EmployeeManager();
        //gọi tới phương thức them và truyền dữ liệu vào
        $objEmployeeManager->them( $_REQUEST );
    }
?>
<?php include_once 'header.php'; ?>
<div style="margin-bottom:20px;">
    <a href="index.php" class="btn btn-sm btn-primary float-right">Trở Về</a>
</div>
<div style="margin-bottom:20px;">
    <form action="" method="POST">
        <div class="form-group">
            <label for="ho_va_ten">Tên</label>
            <input type="text" name="ho_va_ten" id="ho_va_ten" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="so_dien_thoai">Số điện thoại</label>
            <input type="text" name="so_dien_thoai" id="so_dien_thoai" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>
<?php include_once 'footer.php'; ?>