<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm ký tự trong chuỗi</title>
</head>
<body>
    <form action="" method="post">
        <div>
            String:<input type="text" name="str" /><br>
            Char :<input type="text" name="char" />
        </div>
        <div>
            <input type="submit" name="Count" />
        </div>

    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $str    = $_POST['str'];
            $char   = $_POST['char'];
            try {
                if (strlen($char) !=1) {
                    throw new Exception(' Chuỗi nhập vào không hop lệ !');
                };
                if (strlen($str) === 0) {
                    throw new Exception(' Ký tự không hợp lệ !');
                };
                $count = 0;
                for ($i = 0 ; $i < strlen($str); $i++) {
                    if ($str[$i] === $char){
                        $count++;
                    };
                }
                echo "<br> Kí tự $char xuất hiện $count lần trong chuỗi $str";
            } catch (Exception $e) {
                echo "<br> Xin lỗi ! ". $e->getMessage();
            }
        }
    ?>
</body>
</html>