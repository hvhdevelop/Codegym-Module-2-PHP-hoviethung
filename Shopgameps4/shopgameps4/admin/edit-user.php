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
    //lấy id được truyền qua
    $id = $_GET['id'];//10
    // lấy 1 kết quả duy nhất từ thể loại dựa vào id_danh_muc
    $sql    = "SELECT * FROM sinh_vien WHERE id = $id ";
    $stmt   = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row    = $stmt->fetch();

    //kiểm tra xử lý khi submit form với method POST
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        //lấy giá trị gán vào biến
        $sinh_vien = $_REQUEST['sinh_vien'];

        //cập nhật dữ liệu
        $sql    = " UPDATE sinh_vien SET ten_sinh_vien = '$sinh_vien' WHERE id = $id ";
        $stmt   = $connect->query( $sql );

        //chuyển hướng về trang danh sách
        header("Location: list-users.php");
    }
    
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-categories.html">Danh sách sinh viên</a> <span class="divider">></span></li>
            <li class="active">Chỉnh sửa</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Cập Nhật Sinh Viên</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Tên sinh viên:</div>
                            <div class="span9">
                                <input type="text" name="sinh_vien" placeholder="Nhập tên mới"
                                value="<?php echo $row->ten_sinh_vien; ?>"
                                />
                            </div>
                            <div class="clear"></div>
                        </div>     
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Update</button>
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
<?php  include 'layout/footer.php'; ?>