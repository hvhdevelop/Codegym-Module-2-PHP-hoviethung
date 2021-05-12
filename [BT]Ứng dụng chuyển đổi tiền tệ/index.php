<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="input"/>
        <select name="mode">
            <option value="USD">VND to USD</option>
            <option value="VND">USD to VND</option>
        </select>

        <input type="submit" value="Exchange"/>

    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];
            $mode  = $_POST['mode'];
            switch ($mode) {
                    case 'USD':
                        $output = $input / 23000;
                        break;
                    case 'VND':
                        $output = $input * 23000;
                        break;
                }
                echo "<br> = $mode: $output"; 
            }else{
                echo "Error input";
        }
    ?>
</body>
</html>