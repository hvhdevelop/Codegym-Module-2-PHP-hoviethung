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
    $spl = 'SELECT * from products JOIN type_product on products.type_product = type_product.id_type ';
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
            <li><a href="list-products.php">Danh sách sản phẩm</a></li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">
            <!-- <div class="span12 search">
            
                <form>
                    <input type="text" class="span11" placeholder="Some text for search..." name="search"/>
                    <button class="btn span1" type="submit">Tìm kiếm</button>
                </form>
            </div> -->
        </div>
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản lý sản phẩm</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-product.php" class="btn btn-add">Thêm sản phẩm</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            
                            <th width="10" class="sorting"><a href="#">Id</a></th>
                            <th  class="sorting"><a href="#">Tên sản phẩm</a></th>
                            <th  class="sorting"><a href="#">Loại sản phẩm</a></th>
                            <th  class="sorting"><a href="#">Mô tả</a></th>
                            <th  class="sorting"><a href="#">Giá (VNĐ)</a></th>
                            <th width="30%" class="sorting"><a href="#">Hình</a></th>
                            <th class="sorting">Thao tác</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rows as $key => $row): ?>
                        <tr>
                            
                            <td><?php echo $row->id_product; ?></td>
                            <td><?php echo $row->name_product; ?></td>
                            <td><?php echo $row->type_product; ?></td>
                            <td><?php echo $row->description; ?></td>
                            <td><?php echo $row->price; ?></td>
                            <td><?php echo $row->img_product; ?></td>

                            <td><a href="edit-product.php?id=<?php echo $row->id_product; ?>" class="btn btn-info">Sửa</a>
                            <a href="delete-product.php?id=<?php echo $row->id_product; ?>" class="btn btn-danger" onclick="xac_nhan()">Xóa</a></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                    <div class="dataTables_paginate">
                        <a class="first paginate_button paginate_button_disabled" href="#">First</a>
                        <a class="previous paginate_button paginate_button_disabled" href="#">Previous</a>
                        <span>
                            <a class="paginate_active" href="#">1</a>
                            <a class="paginate_button" href="#">2</a>
                        </span>
                        <a class="next paginate_button" href="#">Next</a>
                        <a class="last paginate_button" href="#">Last</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>
<script>
    function xac_nhan(){
        let thong_bao = confirm('Bạn có chắc chắn xóa hay không ?');
        if( thong_bao == false ){
            console.log( event );
            event.preventDefault();
        }
    }
</script>
<?php
    include 'layout/footer.php';
?>