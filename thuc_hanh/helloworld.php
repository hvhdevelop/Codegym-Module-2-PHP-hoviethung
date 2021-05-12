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
    let name = 'sontar.king<br>';
    document.write(name);
</script>

<?php
$name = "Sontar.king <br>";
echo( $name);
echo("hùngcutevjpro123g_dragonbigbang_skt_traitimbanggia_yeuem");


$a = 5;
$b = 7;
$sum = $a + $b;
echo $sum;
//biến toàn cục
    global $boss;
    $boss = 'bigboss';

 function sum($c, $d){
// dùng biến toàn cục
     global $boss;
     echo $boss;

     $sum_2 = $c + $d;
     echo $sum_2;
 }
 echo $boss;
 sum(1,1);

 
 for ($i= 0; $i <= 100; $i++){
     echo $i ."<br>";
 }
?>
</body>
</html>
