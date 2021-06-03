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
            <li><a href="list-categories.php">Danh mục thể loại</a></li>
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
                    <h1>Quản lý thể loại</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-category.php" class="btn btn-add">Thêm thể loại</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            
                            <th  class="sorting"><a href="#">Id</a></th>
                            <th  class="sorting"><a href="#"> Thể loại</a></th>
                            <th width="30%" class="sorting"><a href="#">Hình</a></th>
                            <th >Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rows as $key => $row): ?>
                        <tr>
                            
                            <td><?php echo $row->id_type; ?></td>
                            <td><?php echo $row->type_product; ?></td>
                            <td><?php echo $row->img_type; ?></td>
                           
                            <td><!-- thêm id cho button-->
                            <a href="edit-category.php?id=<?php echo $row->id_type;?>" class="btn btn-info">Sửa</a>
                            <a href="delete-category.php?id=<?php echo $row->id_type;?>" class="btn btn-danger" onclick="xac_nhan()">Xóa</a>
                            </td>
                        </tr>
                       <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <a href="#" class="btn btn-success">Activate</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div><!-- /bulk-action-->
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