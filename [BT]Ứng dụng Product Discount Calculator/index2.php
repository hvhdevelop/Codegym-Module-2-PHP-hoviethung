<link type="text/css" rel="stylesheet" href="style.css" />
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $description = $_POST["description"];
        $price = $_POST["price"];
        $discount_percent = $_POST["discount_percent"]/100;
        $discount_amount = $price * $discount_percent * 0.1;
        $discount_price = $price - $discount_amount;
        echo "<div id='content'>
                <h1>Product Discount Calculator</h1>
                <form>
                    <div id='data'>
                        <p>Product Description : " . $description . " </p>
                        <p>Price : " . $price . "$</p>
                        <p>Discount Percent : " . $discount_percent . "</p>                     
                        <p>Discount Amount:" . $discount_amount . "</p>
                        <p>Discount Price:" . $discount_price . "</p>
                    </div>
                </form>            
            </div>";
    }
    ?>
