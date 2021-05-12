<?php
 class MyList {
     public int $size   = 0;
     public $element    = [];

     public function insert($index,$obj) :void {

     }
     public function add($obj) :void {
        $this->element[] = $obj;
     }
     public function remove($index) :void {
         array_splice($this->element,$index,1);
     }
     public function get($index) :string {
         return $this->element[$index];
     }
     public function clear() :void {
         $this->element = [];
     }
     public function addAll($arr) :array {
         return $this->element = $arr;
     }
     public function indexOf($obj) :int {
         return array_search($obj,$this->element);
     }
     public function isEmpty() :bool {
       $isEmpty = false;
       if(count($this->element) == 0 ){
           $isEmpty = true;
       }return true;
     }
     public function sort()  {
         return sort($this->element);
     }
     public function reset() :void {}
     public function size() :int {}
 }
  $objMyList = new MyList();
  $objMyList->add('hùng_1');
  $objMyList->add('hùng_2');
  $objMyList->add('hùng_3');
  $objMyList->add('hùng_4');
  $objMyList->add('hùng_5');
  $objMyList->remove(1);
  //echo $objMyList->get(2);
  $newArray = ['game_1','game_2','game_3','game_4','game_5'];
  $objMyList->clear();
  $objMyList->addAll($newArray);
  echo $objMyList->indexOf('game_1');
  echo $objMyList->sort();
  
  echo '<pre>';
      print_r( $objMyList );
  echo '</pre>';