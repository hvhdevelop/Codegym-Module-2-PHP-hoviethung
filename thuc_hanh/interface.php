<?php
    // tạo ra 1 interface bằng từ khóa interface TEN_interface
    // nó không phải là một lớp

    interface HinhHoc {
        //các phương thức đều là trừu tượng ko có phần thân
        function ve_hinh ();
        // không thể khai báo các phương thức bình thường và thuộc tình

        // chỉ có thể khai báo hằng số.vd
        const ten_thuoc_tinh = "";

    }
    //khi cần sử dụng một interface cần phải khai báo toàn bộ các phương thức trừu tượng
    class HinhVuong implements HinhHoc