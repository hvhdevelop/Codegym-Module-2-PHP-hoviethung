<?php
//khai báo namspage cho class EmployeeManager
namespace Classes;

//kéo file Employee.php vào để sử dụng
require_once 'Employee.php';

//use namespace để dùng class Employee
use Classes\Employee;

class EmployeeManager {
 
    //phương thức hiển thị danh sách
    function danh_sach(){
        //khoi tao đối tượng
        $objEmployee = new Employee();
        $data_array  = $objEmployee->lay_tat_ca();

        if( !$data_array ){
            $data_array = [];
        }
        return $data_array;
    }

    //phương thức thêm mới (C - create)
    function them( $request ){ //add.php -> $objEmployeeManager->them( $_REQUEST );

        //khoi tao đối tượng
        $objEmployee = new Employee();

        //thay đổi giá trị thuộc tính
        $objEmployee->ho_va_ten         = $request['ho_va_ten'];
        $objEmployee->so_dien_thoai     = $request['so_dien_thoai'];
        $objEmployee->email             = $request['email'];

        //gọi phương thức luu_du_lieu
        $objEmployee->luu_du_lieu();
        /*
        Classes\Employee Object
        (
            [ma_nv:Classes\Employee:private] => 
            [ho_va_ten] => Nguyễn Văn D
            [so_dien_thoai] => 123456789
            [email] => clement@pixodeo.com
        )
        */
        //chuyển hướng
        header( "Location: index.php" );
    }

    //phương thức xem thông tin (R - read)
    function xem(){

    }

    //phương thức cập nhật ( U - update )
    function sua( $id , $request ){
    
        //khoi tao đối tượng
        $objEmployee = new Employee();

        //thay đổi giá trị thuộc tính
        $objEmployee->ma_nv             = $id;
        $objEmployee->ho_va_ten         = $request['ho_va_ten'];
        $objEmployee->so_dien_thoai     = $request['so_dien_thoai'];
        $objEmployee->email             = $request['email'];
        $objEmployee->cap_nhat_du_lieu();

        //chuyển hướng
        header( "Location: index.php" );
    }

    //phương thức xóa ( D - delete )
    function xoa( $id ){
        //khoi tao đối tượng
        $objEmployee = new Employee();
        $objEmployee->xoa_du_lieu_theo_id( $id );

         //chuyển hướng
         header( "Location: index.php" );
        
    }
}