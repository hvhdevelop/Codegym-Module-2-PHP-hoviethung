<?php

    function saveDataJSON( $filename, $name, $email, $phone ){
        
        $luu_ok = true;
        //$luu_ok = false;


        // tạo mảng thông tin
        $thong_tin = [ $name, $email, $phone ];

        //lấy dữ liệu cũ, dùng hàm file_get_contents
        $data_json = file_get_contents($filename);
        //chuyển json sang array
        $data_array = json_decode($data_json);
        //đưa vào mảng mới
        array_push( $data_array, $thong_tin );


        //chuyển array sang json
        $array_to_json = json_encode( $data_array );

        //lưu vào file
        $luu_ok = file_put_contents( $filename , $array_to_json);
        
        return $luu_ok;
    }
   
    // $loi_xac_thuc = [
    //     'ho_va_ten' => '',
    //     'email'     => '',
    //     'phone'     => '',
    // ];

    $loi_xac_thuc = [];

    //kiểm tra người dùng đã nhấn submit (POST)  hay chưa
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $ho_va_ten  = $_POST['ho_va_ten'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];

        $co_the_xu_ly = true;

        /*
            empty: hàm kiểm tra rỗng
            isset: hàm kiểm tra tồn tại
        */
        //xác thực dữ liệu
        //kiểm tra $ho_va_ten
        if( empty($ho_va_ten) ){
            $co_the_xu_ly = false;
            //push vào mảng loi_xac_thuc
            $loi_xac_thuc['ho_va_ten'] = 'Bạn chưa nhập họ và tên';
        }

        //kiểm tra $email
        /*
            - Email không được rỗng
            - Kiểm tra định dạng email
        */
        if( empty($email) ){
            $co_the_xu_ly = false;
            //push vào mảng loi_xac_thuc
            $loi_xac_thuc['email']      = 'Bạn chưa nhập email';
        }else{
            //đã nhập email
            $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if( $check_email == false ){
                $co_the_xu_ly = false;
                //push vào mảng loi_xac_thuc
                $loi_xac_thuc['email'] = 'Bạn chưa nhập đúng định dạng email';
            }
        }

        if( empty($phone) ){
            $co_the_xu_ly = false;
            //push vào mảng loi_xac_thuc
            $loi_xac_thuc['phone'] = 'Bạn chưa nhập số điện thoại';
        }


        //nếu tất cả mọi thứ OK
        if( count( $loi_xac_thuc ) == 0 ){

        }
        if( $co_the_xu_ly == true ){
            /*
            $ho_va_ten  = $_POST['ho_va_ten'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            */
            saveDataJSON('users.json', $ho_va_ten, $email, $phone);
        }        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="pading:0;color:red;margin: 0;;">
        <?php
            if( count( $loi_xac_thuc ) > 0 ) {
                foreach( $loi_xac_thuc as $key => $value ){
                    echo "<li> {$value} </li>";
                }
            }
        ?>
    </ul>
    

    <form action="" method="POST" >
        <table>
            <tr>
                <td> <label for="ho_va_ten"> Họ Và Tên </label> </td>
                <td> 
                    <input type="text" name="ho_va_ten" id="ho_va_ten" > 
                    <p style="color:red;margin: 0;">
                    <?php
                        if( isset( $loi_xac_thuc['ho_va_ten'] ) ){
                            echo $loi_xac_thuc['ho_va_ten'];
                        }
                    ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td> <label for="email"> Email </label> </td>
                <td> 
                    <input type="text" name="email" id="email" > 
                    <p style="color:red;margin: 0;">
                    <?php
                        if( isset( $loi_xac_thuc['email'] ) ){
                            echo $loi_xac_thuc['email'];
                        }
                    ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td> <label for="phone"> Số Điện Thoại </label> </td>
                <td> 
                    <input type="text" name="phone" id="phone"> 
                    <p style="color:red;margin: 0;">
                    <?php
                        if( isset( $loi_xac_thuc['phone'] ) ){
                            echo $loi_xac_thuc['phone'];
                        }
                    ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>  </td>
                <td> <input type="submit" id="submit" value="Đăng Ký"> </td>
            </tr>
        </table>
    </form>
</body>
</html>