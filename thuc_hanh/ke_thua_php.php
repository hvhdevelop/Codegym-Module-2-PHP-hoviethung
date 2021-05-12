<?php
    class ConNguoi {
        public $ten;
        public $tuoi;
        
        public function di_chuyen() {
            echo '<br>'.__METHOD__;
        }
        public function giao_tiep() {
            echo '<br>'.__METHOD__;
        }
    }
    class SinhVien extends ConNguoi {

    }
    $objSinhVien = new SinhVien();
    $objSinhVien->di_chuyen();
    $objSinhVien->giao_tiep();
?>