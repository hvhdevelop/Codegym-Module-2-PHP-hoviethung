<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
            <h1>Product Discount Calculator</h1>
            <form method="post" action="index2.php">
                <div id="data">
                    <label>Product Description:</label>
                    <input type="text" name="description"/><br/>
                    <label>List Price:</label>
                    <input type="text" name="price"/><br/>
                    <label>Discount Percent:</label>
                    <input type="text" name="discount_percent"/>(%)<br/>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate Discount"/>
                </div>
            </form>
        </div>
</body>
</html>