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
    //lấy id được truyền qua
    $id = $_GET['id'];//10

    $sql    = "SELECT * FROM type_product WHERE id_type = $id ";
    $stmt   = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row    = $stmt->fetch();

    //kiểm tra xử lý khi submit form với method POST
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        //lấy giá trị gán vào biến
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

        //cập nhật dữ liệu
        $sql    = " UPDATE type_product SET type_product = '$ten_the_loai',
                                            img_type  = '$target_file' 
                                            WHERE id_type = $id ";
        $stmt   = $connect->query( $sql );

        //chuyển hướng về trang danh sách
        header("Location: list-categories.php");
    }
    
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-categories.html">Danh sách thể loại</a> <span class="divider">></span></li>
            <li class="active">Edit</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Cập Nhật Danh Mục</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST" enctype="multipart/form-data">
                    	<div class="row-form">
                            <div class="span3">Tên Danh Mục:</div>
                            <div class="span9">
                                <input type="text" name="ten_the_loai" placeholder="Nhập chỉnh sửa"
                                value="<?php echo $row->type_product; ?>"
                                />
                            </div>
                            <div class="row-form">
                            <div class="span3">Thêm hình cho danh mục:</div>
                            <div class="span9"><input type="file" name="hinh_anh" /></div>
                            <div class="clear"></div>
                        </div>
                            <div class="clear"></div>
                        </div> 
                                    
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Cập nhật</button>
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