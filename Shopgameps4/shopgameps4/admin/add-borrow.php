<?php  include 'layout/header.php'; ?>
<?php  include 'layout/menu.php'; ?>
<?php  include 'ketnoicsdl.php'; ?>
<?php

    //Lấy tất cả sinh viên
    $sql    = "SELECT * FROM sinh_vien";
    $stmt  = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $sinhviens   = $stmt->fetchAll();

    //Lấy tất cả sách
    $sql    = "SELECT * FROM tu_sach";
    $stmt  = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $sachs   = $stmt->fetchAll();

    //xử lý lưu dữ liệu
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        
        $id_sach    = $_REQUEST['id_sach'];
        $id_sinh_vien      = $_REQUEST['id_sinh_vien'];
        $ngay_muon  = $_REQUEST['ngay_muon'];

        //chuyển sang định dạng Y-m-d
        $ngay_muon = date('Y-m-d', strtotime($ngay_muon) );

        //chèn dữ liệu vào
        $sql = " INSERT INTO muon_sach 
                    ( id_sach ,id_sinh_vien ,ngay_muon) 
                    VALUES 
                    ( $id_sach,$id_sinh_vien,'$ngay_muon')";
        
        $stmt   = $connect->query( $sql );

        //chuyển hướng về trang danh sách
        header("Location: list-borrows.php");
    }
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-borrows.php">Sách Đã Mượn </a> <span class="divider">></span></li>
            <li class="active">Add</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
            
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Thêm</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                        

                        <div class="row-form">
                            <div class="span3">Sách:</div>
                            <div class="span9">
                                <select name="id_sach">
                                    <option value="0">Chọn Sách</option>
                                    <?php foreach( $sachs as $sach ):?>
                                    <option 
                                    value="<?php echo $sach->id ;?>"
                                    ><?php echo $sach->ten_sach ;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <div class="span3">Sinh Viên:</div>
                            <div class="span9">
                                <select name="id_sinh_vien">
                                    <option value="0">Chọn Sinh Viên</option>
                                    <?php foreach( $sinhviens as $sinhvien ):?>
                                    <option 
                                    value="<?php echo $sinhvien->id ;?>"
                                    ><?php echo $sinhvien->ten_sinh_vien ;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <div class="span3">Ngày Mượn:</div>
                            <div class="span9">
                                <input type="date" name="ngay_muon"  />
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <button class="btn btn-success" type="submit">Lưu</button>
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