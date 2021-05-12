<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let ho = 'NGuyễn';
        let ten = 'Tâm';

        let a = 5;
        a +- 1;

        //alert(a);

        //document.write( ho + ' ' + ten ); // NGuyễn Tâm

    </script>

    <?php

        $ho = 'NGuyễn';
        $ten = 'Tâm';

        //echo $ho . ' ' . $ten; // NGuyễn Tâm

        //dấu nháy đơn
        //echo 'Tên tôi là: ' . $ho . ' ' . $ten;// Tên tôi là: NGuyễn Tâm

        //dấu nháy đôi
        //echo " My name is: $ho $ten ";
        //echo " My name is: {$ho} {$ten} ";

        //sai cu phap
        //global $phep_tinh = 'Cộng';

        //tạo ra biến toàn cục
        global $phep_tinh;
        $phep_tinh = 'Cộng';

        function tinh_tong( $tham_so_a, $tham_so_b ){
            //muốn dùng biến toàn cục, phải gọi lại global $phep_tinh;
            global $phep_tinh;
           
            // biến $ket_qua, pham vi sử dụng trong hàm
            $ket_qua = $tham_so_a + $tham_so_b;
            //echo $ket_qua;
        }
        tinh_tong( 5,7 );
        //echo $phep_tinh;
        //Cộng : Hùng, 
        //Trừ  : Anh Hà, Đạt, Châu, Hoàn


        $a = 5;
        $b = 7;

        // if( $b > $a ){
        //     echo 'B lớn hơn A';
        // }else{
        //     echo 'B nhỏ hơn A';
        // }

        //yêu cầu bài tập, in ra từ 1 tới 100


        //foreaach
        $sachs = ['Văn','Lý','Địa'];
        foreach ($sachs as $chi_so => $gia_tri) {
            //echo " {$chi_so} - {$gia_tri} <br>";
        }

        //for
        //count($sachs): đếm phần tử mảng
        for ( $i = 0; $i < count($sachs) ; $i++) { 
            //echo $sachs[$i] . " <br> ";
            echo " {$i} - $sachs[$i] <br>";
        }
        /*
        Warning: Use of undefined constant length - assumed 'length' (this will throw an Error in a future version of PHP) in D:\xampp\htdocs\M2\index.php on line 77
        Notice: Array to string conversion in D:\xampp\htdocs\M2\index.php on line 77
        */

       
    ?>
</body>
</html>