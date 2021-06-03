<?php 
    include 'layout/header.php';
?>
<?php
    include 'layout/menu.php';
?>
<?php
    include 'ketnoicsdl.php';
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sinh_vien = $_REQUEST['sinh_vien'];
        if ($sinh_vien != ''){
            // thêm dữ liêu
            $spl = "insert into sinh_vien (ten_sinh_vien) values('$sinh_vien')";
            $stmt = $connect->query($spl);
            // chuyển hướng về trang chính
            header("Location: list-users.php");
        }
    }
?>
<?php 
    $spl = 'select * from sinh_vien';
    // thực hiện truy vấn
    $query = $connect->query($spl);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
?>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-users.php">Danh sách sinh viên</a> <span class="divider">></span></li>
            <li class="active">Thêm mới</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Tên sinh viên:</div>
                            <div class="span9"><input type="text" name="sinh_vien" placeholder="Nhập tên sinh viên mới"/></div>
                            <div class="clear"></div>
                                                
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Thêm mới</button>
							<div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>
<?php
    include 'layout/footer.php';
?>