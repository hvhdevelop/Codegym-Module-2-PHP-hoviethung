<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fan</title>
</head>

<body>
    <?php
    include("fan.php");
    $fan1 = new Fan();
    $fan1->setSpeed('FAST');
    $fan1->set('radius', 10);
    $fan1->set('color', 'yellow');
    $fan1->set('on', true);

    $fan2 = new Fan();
    $fan2->setSpeed('MEDIUM');
    $fan2->set('radius', 5);
    $fan2->set('color', 'blue');
    $fan2->set('on', false);

    echo $fan1->toString();
    echo "<br/>";
    echo $fan2->toString();
    ?>
</body>

</html>