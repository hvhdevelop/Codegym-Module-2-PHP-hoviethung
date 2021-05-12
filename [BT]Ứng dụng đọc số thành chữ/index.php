<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            // lấy giá trị của số nhập vào
            $so         = $_POST["so"];
            $so_tram    ='trăm';
            // lấy giá trị của các chữ số hàng trăm, chục, đơn vị
            $tram       = floor($so/100);
            $chuc       = floor(($so-($tram*100))/10);
            $don_vi     = $so - $tram*100 - $chuc*10;
            // echo $tram.'<br>'.$chuc.'<br>'.$don_vi.'<br>';

            // tạo 3 mảng thưởng xuyên sử dụng trong vòng lặp
            $mangDon_vi = ['không','một','hai','ba','bốn','năm','sáu','bảy','tám','chín'];
            $mangChuc   = ['','','hai mươi','ba mươi','bốn mươi','năm mươi','sáu mươi','bảy mươi','tám mươi','chín mươi'];
            $mang10_19  = ['mười','mười một','mười hai','mười ba','mười bốn','mười lăm','mười sáu','mười bảy','mười tám', 'mười chín'];

            // giới hạn số nhập vào là số dương có 3 chữ số
            if ($so >= 0 && $so < 1000) {

                // trường hợp số nhập vào là số có 1 chữ số
                if ($tram==0 && $chuc==0 && $don_vi <10) {
                    for ($i=0; $i < count($mangDon_vi); $i++) { 
                        switch ($don_vi) {
                            case $i:
                                echo $mangDon_vi[$i];
                                break;
                            default:
                                break;
                        }
                    }
                }

                // trường hợp số nhập vào là số có 2 chữ số
                if ($tram==0 && $chuc>=1 && $chuc<10 && $don_vi <10) {

                    // trường hợp từ 10-19
                    if ($chuc == 1) {
                        for ($i=0; $i < count($mang10_19); $i++) { 
                            switch ($don_vi) {
                                case $i:
                                    echo $mang10_19[$i];
                                    break;
                                default:
                                    break;
                            }
                        }

                    // trường hợp từ 20 - 100
                    } else { 

                        // trường hợp các số chẵn chục từ 20 - 100
                        if ($don_vi==0) {
                            for ($i=0; $i < count($mangChuc); $i++) { 
                                switch ($chuc) {
                                    case $i:
                                        echo $mangChuc[$i];
                                        break;
                                    default:
                                        break;
                                }
                            }

                        // các TH còn lại từ 20 - 100
                        } else {
                            for ($i=0; $i < count($mangChuc); $i++) { 
                                for ($y=0; $y < count($mangDon_vi); $y++) { 
                                    switch ($chuc) {
                                        case $i:
                                            switch ($don_vi) {
                                                case $y:
                                                    echo $mangChuc[$i].' '.$mangDon_vi[$y];
                                                    break;
                                                default:
                                                    break;
                                            }
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                        }
                    }
                }

                // TH số nhập vào là số có 3 chữ số
                if ($tram>=1 && $tram<10 && $chuc<10 && $don_vi <10) {

                    // TH sô chẵn trăm
                    if ($chuc==0 && $don_vi==0) {
                        for ($i=0; $i < count($mangDon_vi); $i++) { 
                            switch ($tram) {
                                case $i:
                                    echo $mangDon_vi[$i] .' '.$so_tram;
                                    break;
                                default:
                                    break;
                            }
                        }
                    } else {

                        // TH số nhập vào có dạng x0x, x0y...
                        if ($chuc==0) {
                            for ($i=0; $i < count($mangDon_vi); $i++) { 
                                for ($y=0; $y < count($mangDon_vi); $y++) { 
                                    switch ($tram) {
                                        case $i:
                                            switch ($don_vi) {
                                                case $y:
                                                    echo $mangDon_vi[$i] . ' '.$so_tram. ' '. $mangDon_vi[$y];
                                                    break;
                                                default:
                                                    break;
                                            }
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                        } else {

                            // TH số nhập vào có dạng x1x, x1y...
                            if ($chuc==1) {
                                for ($i=0; $i < count($mangDon_vi); $i++) { 
                                    for ($y=0; $y < count($mang10_19); $y++) { 
                                        switch ($tram) {
                                            case $i:
                                                switch ($don_vi) {
                                                    case $y:
                                                        echo $mangDon_vi[$i] . ' '.$so_tram .' '. $mang10_19[$y];
                                                        break;
                                                    default:
                                                        break;
                                                }
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                }
                            } else {

                                // TH số nhập vào có dạng xx0, xy0...
                                if ($don_vi==0) {
                                    for ($i=0; $i < count($mangDon_vi); $i++) { 
                                        for ($y=0; $y < count($mangChuc); $y++) { 
                                        switch ($tram) {
                                            case $i:
                                                switch ($chuc) {
                                                    case $y:
                                                        echo $mangDon_vi[$i] .' ' .$so_tram.' '. $mangChuc[$y];
                                                        break;
                                                    default:
                                                        break;
                                                }
                                                break;
                                            default:
                                                break;
                                        }
                                        }
                                    }

                                    // các TH còn lại
                                    } else {
                                        for ($i=0; $i < count($mangDon_vi); $i++) { 
                                            for ($u=0; $u < count($mangChuc); $u++) { 
                                                for ($y=0; $y < count($mangDon_vi); $y++) { 
                                                    switch ($tram) {
                                                        case $i:
                                                        switch ($chuc) {
                                                            case $u:
                                                                switch ($don_vi) {
                                                                    case $y:
                                                                        echo $mangDon_vi[$i] . ' '.$so_tram. ' '. $mangChuc[$u] . ' ' . $mangDon_vi[$y];
                                                                        break;
                                                                    default:
                                                                        break;
                                                                }
                                                                break;
                                                            default:
                                                                break;
                                                        }
                                                            break;
                                                        default:
                                                            break;
                                                    }
                                                }
                                            }
                                        }
                                        }
                                    }
                            }
                        }
                    }
                } else {
                    echo 'Out of ability';
                }
            }

    ?>
     <form action="" method="POST">
        <input type="text" name="so" id="" placeholder="Nhập số cần đọc" value="<?php echo $so ?>">
        <br>
        <input type="submit" name="" id="" value="Đọc">
    </form>
</body>

</html>