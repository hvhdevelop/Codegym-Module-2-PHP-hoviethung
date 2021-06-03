<?php include 'admin/dataBaseConnect.php'; ?>
<?php
    $sql = 'SELECT * from type_product';
    // thực hiện truy vấn
    $query = $connect->query($sql);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $types = $query->fetchAll();
    
?>


<div class="navbar-area">
        <div class="zelda-responsive-nav">
            <div class="container">
                <div class="zelda-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="zelda-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="index.php" class="nav-link active">Trang Chủ</a>
                                
                            </li>
                            
                            <li class="nav-item"><a href="all_products.php" class="nav-link">Tất Cả Sản Phẩm</a>
                                
                            </li>
                            <li class="nav-item"><a href="cart.php" class="nav-link">Giỏ Hàng</a>
                                
                            </li> 
                            
                            <li class="nav-item"><a href="contact.php" class="nav-link">Liên hệ</a>
                                
                            </li>
                            <li class="nav-item"><a href="admin/login.php" class="nav-link">Quản Lý</a>
                                
                                </li>                 
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <div class="search-box">
                                    <i class="flaticon-search-1"></i>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="flaticon-null-2" data-bs-toggle="modal"
                                        data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option">
                            <div class="option-item">
                                <div class="search-box">
                                    <i class="flaticon-search-1"></i>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="flaticon-null-2" data-bs-toggle="modal"
                                        data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal">Đóng</i></button>
                <div class="modal-body">
                    <div class="logo">
                        <a href="index.php" class="d-inline-block"><img src="assets/img/logo.png" alt="image"></a>
                    </div>
                    <div class="instagram-list">
                        <div class="row">
                        <?php foreach ($types as $key => $type): ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="box">
                                <img src="admin/<?php echo $type->img_type; ?>"
                                    alt="image"></a>
                                    </i>
                                    <a href="category.php?id=<?php echo $type->id_type; ?>" class="link-btn"></a>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                    <!-- <div class="sidebar-contact-info">
                        <h2>
                            <a href="tel:+8802419268615">+880 241 926 8615</a>
                            <span>OR</span>
                            <a href="/cdn-cgi/l/email-protection#bdd5d8d1d1d2fdc7d8d1d9dc93ded2d0"><span
                                    class="__cf_email__"
                                    data-cfemail="1e767b7272715e647b727a7f307d7173">[email&#160;protected]</span></a>
                        </h2>
                    </div> -->
                    
                </div>
            </div>
        </div>
    </div>


    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form action="search.php" method="GET">
                        <input type="text" class="input-search" name="search" placeholder="Nhập tên game">
                        <button type="submit"><i class="flaticon-search-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>