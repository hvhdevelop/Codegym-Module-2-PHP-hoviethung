<?php
    $username ='root';
    $password = '';
    //kết nối tới cơ sủa dữ liêu

    $connect = new PDO('mysql:host=localhost;dbname=thu_vien', $username, $password);
    $spl = 'select * from danh_muc_sach';
    // thực hiện truy vấn
    $query = $connect->query($spl);
    // tùy chọn kiểu trả về
    $query->setFetchMode(PDO::FETCH_OBJ);
    // lấy tất cả kết quả
    $rows = $query->fetchAll();
    // lấy kết quả duy nhât từ thể loại dựa vào id_danh_muc
    $spl    = 'select * from danh_muc_sach where id_danh_muc = 1';
    $stmt   = $connect->query($spl);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->fetch();
    // thêm dữ liêu
    $spl = "insert into danh_muc_sach (ten_danh_muc) values('Doremon')";
    $stmt = $connect->query($spl);
    // cập nhật
    // $spl    = "update danh_muc_sach set ten_danh_muc = 'Doremon' where id_danh_muc = 4";
    // $stmt   = $connect->query($spl);
    // xóa dữ liệu
    $spl    = "delete from danh_muc_sach where ten_danh_muc = 'Doremon'";
    $stmt   = $connect->query($spl);


    echo '<pre>';
        print_r( $rows );
    echo '</pre>';