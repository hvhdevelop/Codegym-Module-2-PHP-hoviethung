<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point and Moveable</title>
</head>

<body>
    <?php
    require 'class.php';
    $objPoint1 = new Point(2, 2);
    echo print_r($objPoint1->getXY());
    echo "<br/>Point1: " . $objPoint1->toString();
    $objMovablePoint1 = new MoveablePoint();
    echo "<br/>MP1: " . $objMovablePoint1->toString();
    $objMovablePoint2 = new MoveablePoint(5, 10);
    echo "<br/>MP2: " . $objMovablePoint2->toString();
    $objMovablePoint3 = new MoveablePoint(5, 10, 15, 20);
    echo "<br/>MP3: " . $objMovablePoint3->toString();
    echo "<br/>";
    var_dump($objMovablePoint3->move());
    ?>
</body>

</html> 