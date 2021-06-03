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
    $sql = 'select * from orders';
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
    $sql = 'select * from orderdetails';
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $orders = $query->fetchAll();
?>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-users.php">Đơn hàng</a></li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">
            <div class="span12 search">
                <!-- <form>
                    <input type="text" class="span11" placeholder="Some text for search..." name="search"/>
                    <button class="btn span1" type="submit">Tìm kiếm</button>
                </form> -->
            </div>
        </div>
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản lý đơn hàng</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            
                            <th width="10" class="sorting"><a href="#">Id</a></th>
                            <th  class="sorting"><a href="#">Tên khách hàng</a></th>
                            <th  class="sorting"><a href="#">Số điện thoại</a></th>
                            <th  class="sorting"><a href="#">Email</a></th>
                            <th  class="sorting"><a href="#">Địa chỉ</a></th>
                            <th  class="sorting"><a href="#">Ghi chú</a></th>
                            <th  class="sorting"><a href="#">Phương thức thanh toán</a></th>
                            <th  class="sorting"><a href="#">Thành tiền</a></th>
                            
                            <th class="sorting">Thao tác</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rows as $key => $row): ?>
                            
                        <tr>
                            <td><?php echo $row->id_order; ?></td>
                            <td><?php echo $row->customer_name; ?></td>
                            <td><?php echo $row->phone_number; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->note; ?></td>
                            <td><?php echo $row->payment_method; ?></td>
                            <td><?php echo $row->total_price; ?></td>
                            <td><a href="view_order.php?id=<?php echo $row->id_order;?>" class="btn btn-info">Xem</a>
                            <a href="delete-order.php?id=<?php echo $row->id_order; ?>" class="btn btn-danger" onclick="xac_nhan()">Xóa</a></td>
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