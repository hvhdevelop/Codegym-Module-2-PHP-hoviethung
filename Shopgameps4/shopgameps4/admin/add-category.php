<?php 
    include 'layout/header.php';
?>
<?php
    include 'layout/menu.php';
?>
<?php
    include 'dataBaseConnect.php';
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $ten_the_loai = $_REQUEST['ten_the_loai'];
        if (isset($_FILES['hinh_anh'])) {
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $filename = $_FILES['hinh_anh']['name'];
            $changed     = end( explode('.',$file_name) );
            $file_name      = time().'.'.$changed;
            $target_file    = 'upload/'.$filename;
            move_uploaded_file($tmp_name, $target_file);
            $data['hinh_anh'] = $target_file;
        }
        if ($ten_the_loai != ''){
            // thêm dữ liêu
            $spl = "insert into type_product ( type_product, img_type ) values('$ten_the_loai','$target_file')";
            $stmt = $connect->query($spl);
            // chuyển hướng về trang chính
            header("Location: list-categories.php");
        }
    }
?>
<?php 
    $spl = 'select * from type_product';
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
            <li><a href="list-categories.php">Danh sách thể loại</a> <span class="divider">></span></li>
            <li class="active">thêm thể loại</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản lý danh mục</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST" enctype="multipart/form-data">
                    	<div class="row-form">
                            <div class="span3">Tên thể loại:</div>
                            <div class="span9"><input type="text" name="ten_the_loai" placeholder="Thêm thể loại mới"/></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Thêm hình danh mục sản phẩm:</div>
                            <div class="span9"><input type="file" name="hinh_anh" /></div>
                            <div class="clear"></div>
                        </div>
                                                  
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Thêm</button>
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