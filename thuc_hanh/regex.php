<?php
 function isFirstLetterUppercase($str) {
     $regexp = '/^[8][4]{1}-[0-9]{8}$/';
     if( preg_match($regexp,$str)) {
         echo ($str." true");
     }else {
         echo ($str." false");
     }
 }
 isFirstLetterUppercase('a4-222222');