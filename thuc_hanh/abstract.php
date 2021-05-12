<?php 
//lớp trừu tượng abstract
// nếu trong lớp có các phương thức trừu tượng thì lớp đó phải là lớp trừu tượng
//chỉ có thể khai bái phương thức trùuu tượng vói mức độ truy cập là piblic và protected
abstract class HinhHoc {
    // lớp trừu tượng là lớp có từ khóa abstract phía trước, nó ko có phần thân
    abstract public function chu_vi();
    abstract public function dien_tich();
    //có thể khai báo phương thức và thuộc tính bình thường
    public function veHinh(){

    }
}
// khi kết thừa từ một lớp trừu tượng (abstract class)
class HinhVuong extends HinhHoc{

}
class HinhTron extends HinhHoc{

}