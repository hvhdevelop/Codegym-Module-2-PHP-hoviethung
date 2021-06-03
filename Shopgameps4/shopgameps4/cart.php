<?php session_start(); ?>
<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'admin/dataBaseConnect.php'; ?>
<?php

    $rows=[];
    $cart=[];
    if( isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){

    $cart = $_SESSION['cart'];
    $cart = array_keys($cart);
    $id_products   = implode(',',$cart);

   if($id_products !==''){

    $sql = "SELECT * FROM `products` WHERE id_product IN ($id_products ) ";
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
        }
        
    }
?>

    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Cart">Cart</h1>
            </div>
        </div>
    </section>


    <section class="cart-area ptb-100">
        <div class="container">
        <!-- kiểm tra nếu giỏ hàng có hàng tức $rows lớn hơn 0 thì hiển các sản phẩm đc thêm vào giỏ hàng -->
        <?php if(count($rows) > 0): ?>
            <form>
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Giỏ hàng</th>
                                <th scope="col">Tên hàng</th>
                                <th scope="col">Giá tiền</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $total = 0;
                        
                        foreach ($rows as $key => $row): 
                        $total += $row->price;
                        
                        ?>
                            <?php 
                                if (!function_exists('currency_format')) {
                                    function currency_format($number, $suffix = 'đ') {
                                        if (!empty($number)) {
                                            return number_format($number, 0, ',', '.') . "{$suffix}";
                                        }
                                    }
                                }
                                ?>
                            
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#">
                                    <img src="admin/<?php echo $row->img_product; ?>"
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="#"><?php echo $row->name_product; ?></a>
                                </td>
                                <td class="product-price">
                                    <span class="unit-amount"><?php echo currency_format($row->price); ?></span>
                                </td>
                                <td>
                                    <a href="delete_cart.php?id=<?php echo $row->id_product; ?>" class="remove" onclick="xac_nhan()">Xóa</i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            

                           
                        </tbody>
                    </table>
                </div>
                <div class="cart-buttons">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-7 col-md-7">
                            <!-- <div class="shopping-coupon-code">
                                <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code"
                                    id="coupon-code">
                                <button type="submit">Apply Coupon</button>
                            </div> -->
                        </div>
                        
                    </div>
                </div>
                <div class="cart-totals">
                    <h3>Thành tiền</h3>
                    <ul>
                        <li>Tổng tiền <span><?php echo currency_format($total); ?></span></li>
                    </ul>
                    <a href="checkout.php" class="default-btn">Tiến hành thanh toán</a>
                </div>
            </form>
        <!-- nếu không thì sẽ hiên giỏ hàng trống -->
        <?php else: ?>
            <form>            
                <div class="pagination-area text-center">
                    <h1>Giỏ hàng đang trống, hãy đặt hàng </h1>                  
                    <div class="col-lg-12 col-md-12">
                <div class="pagination-area text-center">
                <a href="index.php" class="default-btn">Go to Homepage</a>
                </div>
            </div>   
                </div>
            </form>
            <!-- kết thúc if -->
            <?php endif; ?>
            
        </div>
    </section>
<script>
    
    
    function xac_nhan(){
        let thong_bao = confirm('Bạn có chắc chắn xóa hay không ?');
        
        if( thong_bao == false ){
            console.log( event );
            event.preventDefault();
        }
    }
</script>

<?php include 'layout/footer.php'; ?>