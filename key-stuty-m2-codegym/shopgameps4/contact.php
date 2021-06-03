<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'admin/dataBaseConnect.php'; ?>


    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Contact Us">Contact Us</h1>
            </div>
        </div>
    </section>


    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-info">
                        <span class="sub-title"></span>
                        <h2>Liên lạc với chúng tôi</h2>
                        <p>Nếu có bất ký thắc mắc, khiếu nại, cần từ vấn hãy liên hệ ngay với chúng tôi để được giải đáp.</p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <a href="https://www.google.com/maps/@16.8023193,107.1113419,18.25z?hl=vi-VN"class="flaticon-location"></a>
                                </div>
                                <h3>Địa chỉ</h3>
                                <p>133, Lý Thường Kiệt, Đông Hà, Quảng Trị</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-24-hours"></i>
                                </div>
                                <h3>Liên lạc</h3>
                                <p>Điện thoại: 0918273645</p>
                                
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-network"></i>
                                </div>
                                <h3>Mạng xã hội</h3>
                                <p>Facebook: shopgameps4</p>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <h2>Gửi email trực tiếp</h2>
                        <p>Nhập đầy đủ thông tin và nội dung cần giải đáp</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" required
                                            data-error="Vui lòng nhập tên" placeholder="Họ và tên">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            data-error="Vui lòng nhập địa chỉ email" placeholder="Địa chỉ email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Vui lòng nhập số điện thoại" placeholder="Số điện thoại">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required
                                            data-error="Hãy nhập nội dung"
                                            placeholder="Nội dung"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Gửi</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'layout/footer.php'; ?>