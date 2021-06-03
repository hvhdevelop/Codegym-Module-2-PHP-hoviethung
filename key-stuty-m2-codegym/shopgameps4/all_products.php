<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'admin/dataBaseConnect.php'; ?>
<?php
    
    if(isset($_GET['page'])){
        $current_page = $_GET['page'];
    }else{
        $current_page = 1;
    }
    $limit = 12;
    $sql_1 = "SELECT COUNT(id_product) as total from products";
    $query = $connect->query($sql_1);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $total = $query->fetch();
    
    $total_pages = ceil($total->total / $limit);
    $start = ($current_page - 1) * $limit;


    if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
    }else{
        $sort = 'asc';
    }
    $sql = "SELECT * from products order by name_product $sort limit $start,$limit";
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
    
?>



<section class="page-title-area page-title-bg1">
    <div class="container">
        <div class="page-title-content">
            <h1 title="Products List">Products List</h1>
        </div>
    </div>
</section>


<section class="products-area ptb-100">
    <div class="container">
        <div class="zelda-grid-sorting row align-items-center">
            <div class="col-lg-6 col-md-6 result-count">
                <p>Tất cả sản phẩm</p>
            </div>
            <div class="col-lg-6 col-md-6 ordering">
                <div class="select-box">
                    <p>Sắp xếp theo:</p>
                    <form action="" method="GET">
                    <select name="sort" onchange="this.form.submit()">
                        <option value="asc"
                        
                        >Tên: A->Z</option>
                        <option value="desc"
                            
                        >Tên: Z->A</option>
                    </select>
                    </form>
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
                    <?php if($current_page > 1 ): ?>
                    <a href="all_products.php?page=<?php echo $current_page - 1; ?>" class="prev page-numbers">Back</i></a>
                    <?php endif; ?>
                    <?php for($i = 1 ; $i <= $total_pages ; $i++) :?>
                        <a href="all_products.php?page=<?php echo $i; ?>">
                        <span class="page-numbers current" aria-current="page"><?php echo $i; ?></span>
                        </a>
                    <?php endfor; ?>
                    <?php if($current_page < $total_pages ): ?>
                    <a href="all_products.php?page=<?php echo $current_page + 1; ?>" class="next page-numbers">Next</i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'layout/footer.php'; ?>