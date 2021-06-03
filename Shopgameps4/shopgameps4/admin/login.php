<?php 
    include 'layout/header.php';
?>
<?php
    include 'dataBaseConnect.php';
?>
<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username   =$_REQUEST['username'];
        $password =$_REQUEST['password'];
        if($username !=='' && $password !==''){
            $sql = "SELECT * from admin where username = '$username' and password = '$password'";
            // thực hiện truy vấn
            $query = $connect->query($sql);
            // tùy chọn kiểu trả về
            $query->setFetchMode(PDO::FETCH_OBJ);
            header("Location: list-products.php");
        }
    }
?>
    <div class="loginBox">        
        <div class="loginHead">
            <h5>Shop game Ps4 - Admin</h5>
        </div>
        <form class="form-horizontal" action="" method="POST">            
            <div class="control-group">
                <label for="inputUsername">Username</label>                
                <input type="text" name="username" id="inputUsername"/>
            </div>
            <div class="control-group">
                <label for="inputPassword">Password</label>                
                <input type="password" name="password" id="inputPassword"/>                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block">Sign in</button>
            </div>
        </form>        
        
    <?php
    include 'layout/footer.php';
        ?>
