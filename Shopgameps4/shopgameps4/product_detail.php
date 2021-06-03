<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'admin/dataBaseConnect.php'; ?>
<?php
   //lấy id được truyền qua
   $id = $_GET['id'];//10

   $sql    = "SELECT * FROM products 
   JOIN type_product on products.type_product = type_product.id_type 
   WHERE id_product = $id ";
   $stmt   = $connect->query( $sql );
   $stmt->setFetchMode(PDO::FETCH_OBJ);
   $row    = $stmt->fetch();

   
   if (!function_exists('currency_format')) {
     function currency_format($number, $suffix = 'đ') {
         if (!empty($number)) {
             return number_format($number, 0, ',', '.') . "{$suffix}";
         }
     }
 }
     
?>

<section class="page-title-area page-title-bg1">
    <div class="container">
        <div class="page-title-content">
            <h1 title="Products Details">Products Details</h1>
        </div>
    </div>
</section>


<section class="products-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="products-details-image">
                            <a href="assets/img/products-img1.jpg" data-fancybox="gallery">
                            <img src="admin/<?php echo $row->img_product; ?>" alt="image">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="products-details-desc">
                    <h3><?php echo $row->name_product; ?></h3>
                    
                    
                    <!-- <p>Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure
                        buried near the Pyramids. Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                        incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt et.</p> -->
                    <div class="products-meta">
                        <span>Giá: <span class="price"><?php echo currency_format($row->price); ?></span></span>
                        <span>Thể loại game: <a href="#"><?php echo $row->type_product; ?></a></span>
                    </div>
                    <div class="products-add-to-cart">
                        <!-- <div class="input-counter">
                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                            <input type="text" min="1" value="1">
                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                        </div> -->
                        <a href="add_to_cart.php?id=<?php echo $row->id_product; ?>" class="default-btn">Thêm vào giỏ hàng</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="products-details-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                href="#description" role="tab" aria-controls="description">Mô tả</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                                role="tab" aria-controls="reviews">Reviews (2)</a></li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <p>
                                <?php echo $row->description; ?>
                            </p>
                            <!-- <ul>
                                <li>Instant WideCademy bestseller</li>
                                <li>Translated into 18 languages</li>
                                <li>#1 Most Recommended Book of the year.</li>
                                <li>A neglected project, widely dismissed, its champion written off as unhinged.</li>
                                <li>Yields a negative result in an experiment because of a flaw in the design of the
                                    experiment.</li>
                                <li>An Amazon, Bloomberg, Financial Times, Forbes, Inc., Newsweek, Strategy + Business,
                                    Tech Crunch, Washington Post Best Business Book of the year</li>
                            </ul> -->
                        </div>
                        <!-- <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="products-reviews">
                                <h3>Course Rating</h3>
                                <div class="rating">
                                    <span class="bx bxs-star checked"></span>
                                    <span class="bx bxs-star checked"></span>
                                    <span class="bx bxs-star checked"></span>
                                    <span class="bx bxs-star checked"></span>
                                    <span class="bx bxs-star"></span>
                                </div>
                                <div class="rating-count">
                                    <span>4.1 average based on 4 reviews.</span>
                                </div>
                                <div class="row">
                                    <div class="side">
                                        <div>5 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-5"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>02</div>
                                    </div>
                                    <div class="side">
                                        <div>4 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-4"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>03</div>
                                    </div>
                                    <div class="side">
                                        <div>3 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-3"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>04</div>
                                    </div>
                                    <div class="side">
                                        <div>2 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>05</div>
                                    </div>
                                    <div class="side">
                                        <div>1 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-1"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-review-comments">
                                <h3>3 Reviews</h3>
                                <div class="user-review">
                                    <img src="assets/img/user1.jpg" alt="image">
                                    <div class="review-rating">
                                        <div class="review-stars">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                        </div>
                                        <span class="d-inline-block">James Anderson</span>
                                    </div>
                                    <span class="d-block sub-comment">Excellent</span>
                                    <p>Very well built theme, couldn't be happier with it. Can't wait for future updates
                                        to see what else they add in.</p>
                                </div>
                                <div class="user-review">
                                    <img src="assets/img/user2.jpg" alt="image">
                                    <div class="review-rating">
                                        <div class="review-stars">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="d-inline-block">Sarah Taylor</span>
                                    </div>
                                    <span class="d-block sub-comment">Video Quality!</span>
                                    <p>Was really easy to implement and they quickly answer my additional questions!</p>
                                </div>
                                <div class="user-review">
                                    <img src="assets/img/user3.jpg" alt="image">
                                    <div class="review-rating">
                                        <div class="review-stars">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                        </div>
                                        <span class="d-inline-block">David Warner</span>
                                    </div>
                                    <span class="d-block sub-comment">Perfect Coding!</span>
                                    <p>Stunning design, very dedicated crew who welcome new ideas suggested by
                                        customers, nice support.</p>
                                </div>
                                <div class="user-review">
                                    <img src="assets/img/user4.jpg" alt="image">
                                    <div class="review-rating">
                                        <div class="review-stars">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="d-inline-block">King Kong</span>
                                    </div>
                                    <span class="d-block sub-comment">Perfect Video!</span>
                                    <p>Stunning design, very dedicated crew who welcome new ideas suggested by
                                        customers, nice support.</p>
                                </div>
                            </div>
                            <div class="review-form-wrapper">
                                <h3>Add a review</h3>
                                <p class="comment-notes">Your email address will not be published. Required fields are
                                    marked <span>*</span></p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" /><label
                                                    for="star5"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label
                                                    for="star4"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label
                                                    for="star3"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label
                                                    for="star2"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label
                                                    for="star1"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea placeholder="Your review" class="form-control" cols="30"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <p class="comment-form-cookies-consent">
                                                <input type="checkbox" id="test1">
                                                <label for="test1">Save my name, email, and website in this browser for
                                                    the next time I comment.</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>