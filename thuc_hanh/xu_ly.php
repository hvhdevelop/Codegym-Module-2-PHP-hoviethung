<?php
    class SinhVien {
        public function __construct() {
            echo "<br>".__METHOD__;
        }
        public function restros() {
            echo "<br>".__METHOD__;
        }
        public function __destruct() {
            echo "<br>".__METHOD__;
        }
    }
    $objSinhVien = new SinhVien();
    $objSinhVien->restros();

?>