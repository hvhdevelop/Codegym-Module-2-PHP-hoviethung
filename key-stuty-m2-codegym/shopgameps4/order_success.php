<?php session_start();
    $_SESSION['cart'] = [];
     ?>
<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'admin/dataBaseConnect.php'; ?>


    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Cart">Cart</h1>
            </div>
        </div>
    </section>


    <section class="cart-area ptb-100">
        <div class="container">
            <form>            
                <div class="pagination-area text-center">
                    <h1>Đặt hàng thành công</h1>                  
                    <div class="col-lg-12 col-md-12">
                <div class="pagination-area text-center">
                <a href="index.php" class="default-btn">Go to Homepage</a>
                </div>
            </div>   
                </div>
            </form>
        </div>
    </section>


<?php include 'layout/footer.php'; ?>