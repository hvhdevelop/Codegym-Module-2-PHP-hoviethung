<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Ứng dụng Future Value Calculator</title>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <p class="error">Investment is a required field</p>

        <form action="index2.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="0" /><br>

                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="0" /><br>

                <label>Number of Years:</label>
                <input type="text" name="years" value="0" /><br>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"/><br>
            <div>
        </form>
        
</body>
</html>