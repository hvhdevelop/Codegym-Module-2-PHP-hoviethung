<?php session_start(); ?>

<?php include 'admin/dataBaseConnect.php'; ?>
<?php
  
    $cart = $_SESSION['cart'];
    $cart = array_keys($cart);
    $id_products   = implode(',',$cart);

    $sql = "SELECT * FROM `products` WHERE id_product IN ($id_products ) ";
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //lấy giá trị gán vào biến
        $customer_name  = $_REQUEST['customer_name'];
        $phone_number  = $_REQUEST['phone_number'];
        $email   = $_REQUEST['email'];
        $address   = $_REQUEST['address'];
        $note = $_REQUEST['note'];
        $payment_method = $_REQUEST['payment_method'];
        $total = $_REQUEST['total'];
        
        
        if($customer_name !='' && $phone_number != '' && $email != '' && $address != ''){
            //chèn dữ liệu vào
            $sql_1 = " INSERT INTO orders ( customer_name, phone_number , email, `address`, note, payment_method , total_price ) 
                                     VALUES ('$customer_name', '$phone_number', '$email', '$address','$note', '$payment_method','$total') ";
            $stmt = $connect->query($sql_1);

            $id_order = $connect->lastInsertId();

            foreach ($cart as $product_id){
                $sql_2 ="INSERT INTO `orderdetails` (`id_order`, `id_product`) VALUES ( '$id_order', '$product_id')";
                $stmt = $connect->query($sql_2);
            }
            //chuyển hướng về trang danh sách
            header("Location: order_success.php");
        }
    }
   
    
?>
<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Checkout">Checkout</h1>
            </div>
        </div>
    </section>


    <section class="checkout-area ptb-100">
        <div class="container">
            <!-- <div class="user-actions">
                <i class='bx bx-log-in'></i>
                <span>Returning customer? <a href="profile-authentication.html">Click here to login</a></span>
            </div> -->
            <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Thông tin giao hàng</h3>
                            
                            <div class="row">
                                <!-- <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Country <span class="required">*</span></label>
                                        <div class="select-box">
                                            <select>
                                                <option>United Arab Emirates</option>
                                                <option>China</option>
                                                <option>United Kingdom</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
     
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Họ và tên<span class="required">*</span></label>
                                        <input type="text" name="customer_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Số điện thoại<span class="required">*</span></label>
                                        <input type="text" name="phone_number" class="form-control" required>
                                    </div>
                                </div>
                                
                               
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Email<span class="required">*</span></label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Địa chỉ<span class="required">*</span></label>
                                        <input type="Địa chỉ" name="address" class="form-control" required>
                                    </div>
                                </div>
                               
                                
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="note" id="notes" cols="30" rows="5" placeholder="Ghi chú"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                          
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <h3 class="title">Đơn hàng của bạn</h3>
                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">sản phẩm</th>
                                            <th scope="col">giá</th>
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
                                            <td class="product-name">
                                                <a href="#"><?php echo $row->name_product; ?></a>
                                            </td>
                                            <td class="product-total">
                                                <span class="subtotal-amount"><?php echo currency_format($row->price); ?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>

                                        <tr>
                                            <td class="cart-totals">
                                            <h2>Tổng tiền</h2>
                                            </td>
                                            <td class="product-total">
                                            <span class="subtotal-amount"><?php echo currency_format($total); ?></span>
                                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                                            </td>
                                        </tr>


                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment-box">
                                <div class="payment-method">
                                    <p>
                                        <b>Phương thức thanh toán</b>
                                    </p>
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" name="payment_method" value="cod" checked>
                                        <label for="direct-bank-transfer">COD (Thanh toán sau khi nhận hàng)</label>
                                        
                                    </p>
                                    <p>
                                        <input type="radio" id="paypal" name="payment_method" value="vnpay">
                                        <label for="paypal">VNPay</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="cash-on-delivery" name="payment_method" value="visa_credit">
                                        <label for="cash-on-delivery">Visa/Credit</label>
                                    </p>
                                    
                                </div>

                                <button class="default-btn" type="submit" >Đặt hàng</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <?php include 'layout/footer.php'; ?>