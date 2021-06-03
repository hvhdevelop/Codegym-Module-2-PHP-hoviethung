<?php  include 'layout/header.php'; ?>
<?php  include 'layout/menu.php'; ?>
<?php  include 'dataBaseConnect.php'; ?>

<?php
    $id = $_GET['id'];

    $sql =" SELECT orderdetails.*, orders.id_order, products.id_product, products.name_product
    FROM `orderdetails` 
    JOIN orders ON orderdetails.id_order = orders.id_order 
    JOIN products ON orderdetails.id_product = products.id_product 
    where orderdetails.id_order = $id
    ";
    
    //thực hiện truy vấn
    $stmt  = $connect->query( $sql );
    //tùy chọn kiểu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
    $rows   = $stmt->fetchAll();

   
?>

<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-products.php">Chi tiết đơn hàng</a></li>
        </ul>
    </div>
    <div class="workplace">
       
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
         
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Chi tiết đơn hàng</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            
                            <th class="sorting"><a href="#">ID</a></th>
                            <th class="sorting"><a href="#">ID đơn hàng</a></th>
                            <th class="sorting"><a href="#">Sản phảm</a></th>
                           
                        </tr>
                        </thead>
                        <tbody>
                            <!-- START LOOP-->
                            <?php foreach( $rows as $key => $row ):?>
                            
                                <tr>
                                    
                                    <td><?php echo $row->id;?></td>
                                    <td><?php echo $row->id_order;?></td>
                                    <td><?php echo $row->name_product;?></td>
                                   
                                </tr>
                            <?php endforeach; ?>
                            <!-- END LOOP-->
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

<?php  include 'layout/footer.php'; ?>