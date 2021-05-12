<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Nhập số nguyên tố cần in ra :</label>
        <input type="number" value="" name="amount">
        <input type="submit" value="Display">
    </form>
    <?php
    function isPrimeNumber($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $result = $amount . " số nguyên tố đầu tiên là :";
        $count = 0;
        $i = 2;
        while ($count < $amount) {
            if (isPrimeNumber($i)) {
                $result .=  $i . " ";
                $count ++;
            }
            $i++;
        }
        echo $result;
    }

    ?>
</body>

</html>