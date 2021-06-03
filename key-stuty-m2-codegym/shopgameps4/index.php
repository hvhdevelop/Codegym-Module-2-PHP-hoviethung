<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'admin/dataBaseConnect.php'; ?>
<?php
    $sql = 'SELECT * from products limit 4';
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();

    
    
?>
    


    <div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="main-banner-content">
                <span class="sub-title wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Enjoy The
                    Game</span>
                <div class="logo wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <img src="assets/img/logo-ps4.png" alt="image">
               
            </div>
            <div class="banner-video-slides owl-carousel owl-theme">
                <div class="banner-video-box">
                    <img src="assets/img/main-banner-video-img1.jpg" alt="image">
                    <div class="content">
                        <a href="https://www.youtube.com/watch?v=lM-06ehsAu8" class="video-btn popup-youtube"><i
                                class="flaticon-play"></i></a>
                        <span class="title">Red dead Redemtion 2</span>
                    </div>
                </div>
                <div class="banner-video-box">
                    <img src="assets/img/main-banner-video-img2.jpg" alt="image">
                    <div class="content">
                        <a href="https://www.youtube.com/watch?v=axfYQi4UEhc" class="video-btn popup-youtube"><i
                                class="flaticon-play"></i></a>
                        <span class="title">PS4 game</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="products-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Shop</span>
                <h2>Sản phẩm được mua nhiều</h2>
            </div>
           
            <div class="row">
                <?php if( count($rows) > 0  ) : ?>
                <?php foreach ($rows as $key => $row):    
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                        <a href="product_detail.php?id=<?php echo $row->id_product; ?>" class="d-block"><img src="admin/<?php echo $row->img_product; ?>"
                                    alt="image"></a>
                                    <a href="product_detail.php?id=<?php echo $row->id_product; ?>" class="add-to-cart-btn">Detail</a>
                        </div>
                        <div class="products-content">
                            <h3><a href="product_detail.php?id=<?php echo $row->id_product; ?>"><?php echo $row->name_product; ?></a></h3>
                            <span class="price"><?php echo currency_format($row->price); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
               
            </div>
        </div>
    </section>


  

<?php include 'layout/footer.php'; ?>