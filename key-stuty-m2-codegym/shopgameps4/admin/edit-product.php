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

            $sql    = "SELECT * FROM products WHERE id_product = $id ";
            $stmt   = $connect->query( $sql );
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $row    = $stmt->fetch();


            $sql   ="select * from type_product";
            $stmt  = $connect->query( $sql );
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $products   = $stmt->fetchAll();
        //kiểm tra xử lý khi submit form
        if($_SERVER['REQUEST_METHOD']=='POST'){
            //lấy giá trị gán vào biến
            $ten_san_pham = $_REQUEST['ten_san_pham'];
            $id_type = $_REQUEST['id_type'];
            $mo_ta = $_REQUEST['mo_ta'];
            $gia_san_pham = $_REQUEST['gia_san_pham'];
            $data = [];
            if (isset($_FILES['hinh_anh'])) {
                $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                $filename = $_FILES['hinh_anh']['name'];
                $changed     = end( explode('.',$file_name) );
                $file_name      = time().'.'.$changed;
                $target_file    = 'upload/'.$filename;
                move_uploaded_file($tmp_name, $target_file);
                $data['hinh_anh'] = $target_file;
            }


            
            //chèn dữ liệu vào
            $sql_1 = " UPDATE products SET name_product = '$ten_san_pham',
                                           type_product = $id_type,
                                           description  = '$mo_ta',
                                           price        = '$gia_san_pham',
                                           img_product  = '$target_file'
                                            WHERE id_product = $id ";
                                            
            $stmt = $connect->query($sql_1);
            //chuyển hướng về trang danh sách
            header("Location: list-products.php");
            
    }
   
?>

<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-categories.php">Danh sách sản phẩm</a> <span class="divider">></span></li>
            <li class="active">thêm sản phẩm</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
 
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản lý sản phẩm</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST" enctype="multipart/form-data">
                    	<div class="row-form">
                            <div class="span3">Tên sản phẩm:</div>
                            <div class="span9"><input type="text" name="ten_san_pham" placeholder="Nhập tên sản phẩm" value="<?php echo $row->name_product; ?>"/></div>
                            <div class="clear"></div>
                        </div> 
                        
                        <div class="row-form">
                            <div class="span3">Loại sản phẩm:</div>
                            <div class="span9">
                                <select name="id_type">
                                    <option value="0">Chọn loại sản phẩm </option>
                                    <?php foreach( $products as $product ):?>
                                    <option 
                                    value="<?php echo $product->id_type ;?>"
                                    ><?php echo $product->type_product ;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                        <div class="row-form">
                                <div class="span3">Mô tả sản phẩm:</div>
                                <div class="span9"><input type="text" name="mo_ta" placeholder="Nhập mô tả" value="<?php echo $row->description; ?>"/></div>
                                <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <div class="span3">Giá sản phẩm:</div>
                            <div class="span9"><input type="text" name="gia_san_pham" placeholder="Nhập giá" value="<?php echo $row->price; ?>"/></div>
                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <div class="span3">Thêm hình cho sản phẩm:</div>
                            <div class="span9"><input type="file" name="hinh_anh" /></div>
                            <div class="clear"></div>
                        </div>

                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Lưu mới</button>
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