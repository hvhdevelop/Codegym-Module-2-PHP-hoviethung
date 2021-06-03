<?php include 'layout/header.php'; ?>

<?php include 'admin/dataBaseConnect.php'; ?>
<?php
    $search = $_GET['search'];

    $sql = "SELECT * from products where name_product like '%$search%'";
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
    
?>

<section class="products-area ptb-100">
    <div class="container">
        <div class="zelda-grid-sorting row align-items-center">
        
            <div class="col-lg-6 col-md-6 result-count">
                <h1>Kết quả tìm kiếm</h1>
            </div>
            <div class="col-lg-6 col-md-6 ordering">
                <div class="select-box">
                    
                </div>
            </div>
        </div>
        <div class="row">

            <div class="row">
                <?php foreach ($rows as $key => $row): ?>
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
               
            </div>
            

            <div class="col-lg-12 col-md-12">
                <div class="pagination-area text-center">
                <a href="index.php" class="default-btn">Go to Homepage</a>
                </div>
            </div>   
            
        </div>
        
    </div>
</section>



