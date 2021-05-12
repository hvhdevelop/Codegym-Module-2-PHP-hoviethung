<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</title>
</head>

<body>
    <?php
    $number_1 = $number_2 = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number_1 = $_POST["number1"];
        $number_2 = $_POST["number2"];
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="number" placeholder="Operator 1" name="number1" value="<?php echo $number_1 ?>">
        <input type="number" placeholder="Operator 2" name="number2" value="<?php echo $number_2 ?>">
        <input type="submit" value="Calculator">
    </form>
    <?php
        function Cal($num1,$num2) {
            try {
                if ($num2 == 0) {
                    throw new Exception("by zero");
                }
                echo "<br/><b>Tổng là :</b>". ($num1+$num2);
                echo "<br/><b>Hiệu là :</b>". ($num1-$num2);
                echo "<br/><b>Tích là :</b>". $num1*$num2;
                echo "<br/><b>Thương là :</b>". $num1/$num2;
            }
            catch (Exception $e) {
                echo "</br>Bắt ngoại lệ: ". $e->getMessage();
            }
        }
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number_1 = $_POST["number1"];
        $number_2 = $_POST["number2"];
        Cal($number_1,$number_2);
    }
    ?>
</body>

</html>