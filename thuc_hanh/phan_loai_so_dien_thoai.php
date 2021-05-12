<?php
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $sdts     = $_POST["so_dien_thoai"];
       $sdts     = explode(",", $sdts);
       //$sdt = kiem_tra($sdt);
        $Vinaphone = [];
        $Mobiphone = [];
        $Viettel = [];
       foreach($sdts as $key => $sdt) {
           $ba_so_dau = substr($sdt,0,3);
           if ($ba_so_dau == "091") {
            array_push($Viettel,$sdt);
           }
           if ($ba_so_dau == "096") {
            array_push($Mobiphone,$sdt);   
           }
           if ($ba_so_dau == "081") {
               array_push($Vinaphone,$sdt);
       }
   }
}
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân loại số điện thoại</title>
</head>
<body>
    <form method="POST" action="">
    <textarea name="so_dien_thoai"></textarea>
    <input type="submit" value="Submit">
    </form>
    <?php
    echo '<pre>';
        echo "Viettel ";
        print_r( $Viettel );
        echo "Vinaphone ";
        print_r( $Vinaphone );
        echo "Mobiphone ";
        print_r( $Mobiphone);
    echo '</pre>';
    ?>

</body>
</html>