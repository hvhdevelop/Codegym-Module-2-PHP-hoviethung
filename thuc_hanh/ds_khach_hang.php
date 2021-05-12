<?php
    $customerList = [
        "1" => [
            "name" => "Hoàn Mai Văn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "images/img1.jpg"],
        "2" => [
            "name" => "Hồ Quốc Hoàn",
            "day_of_birth" => "1983/08/21",
            "address" => "Bắc Giang",
            "profile" => "images/img2.jpg"],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "1983/08/22",
            "address" => "Nam Định",
            "profile" => "images/img3.jpg"],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "1983/08/17",
            "address" => "Hà Tây",
            "profile" => "images/img4.jpg"],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "1983/08/19",
            "address" => "Hà Nội",
            "profile" => "images/img5.jpg"]
        ];

        $ten_kh = '';
        if(isset($_REQUEST['ten_kh'])) {
            $ten_kh = $_REQUEST['ten_kh'];
            if ( !empty($ten_kh  ) ){
                $filteredCustomers = [];
                foreach($customerList as $key => $customer) {
                    $customer_name = $customer['name'];
                    $mystring      =  $customer_name;
                    $findme        = $ten_kh;
                    $pos           = strpos($mystring, $findme);
                if($pos!== false){
                    $filteredCustomers[$key] = $customer;
                }
            }
            $customerList = $filteredCustomers;
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
    <form action="" method="GET">
        Tên khách hàng:
        <input type="text" name='ten_kh' placeholder="Nhập tên khách hàng" value="<?php echo $ten_kh?>"/>
        Chọn ngày sinh:
        <input id="form" type="date" name="form" placeholder="yyyy/mm/dd" value=""/>
        đến:<input id="to" type="date" name="to" placeholder="yyyy/mm/dd" value=""/>
        <input type="submit" id="submit" value="Tìm kiếm"?>

    </form>
    <table border="1">
    <?php foreach( $customerList as $key => $customer ): ?>
            <tr>
                <td> <?php echo $key; ?> </td>
                <td> <?php echo $customer['name']; ?> </td>
                <td> <?php echo $customer['day_of_birth']; ?> </td>
                <td> <?php echo $customer['address']; ?> </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>