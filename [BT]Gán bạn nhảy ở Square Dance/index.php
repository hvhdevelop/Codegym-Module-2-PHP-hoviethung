<?php
    class Dancer {
        public $name;
        public $gender;
    public function __construct($name,$gender){
        $this->name     = $name;
        $this->gender   = $gender;

    }
}
    $objSplQueue_nam = new SplQueue();

    $objSplQueue_nu  = new SplQueue();

    $objSplQueue_nam->enqueue( new Dancer('Hung_1','male'));
    $objSplQueue_nam->enqueue( new Dancer('Hung_2','male'));
    $objSplQueue_nam->enqueue( new Dancer('Hung_3','male'));

    $objSplQueue_nu->enqueue( new Dancer('Cam_1','female'));
    $objSplQueue_nu->enqueue( new Dancer('Cam_2','female'));

   $pairs       = [];
   $nam_waiting = [];
   $nu_waiting  = [];
   while (!$objSplQueue_nu->isEmpty() || !$objSplQueue_nam->isEmpty()){
    if( !$objSplQueue_nu->isEmpty() && !$objSplQueue_nam->isEmpty() ){
        $pairs[] = $objSplQueue_nam->dequeue()->name .' - '.$objSplQueue_nu->dequeue()->name;

       }else if ( $objSplQueue_nu->isEmpty() && !$objSplQueue_nam->isEmpty()) {
           $nam_waiting[] = $objSplQueue_nam->dequeue()->name;
       }else if ( !$objSplQueue_nu->isEmpty() && $objSplQueue_nam->isEmpty()) {
           $nu_waiting[] = $objSplQueue_nu->dequeue()->name;

       }
   }
   echo '<pre>';
       print_r( $pairs );
       print_r($nam_waiting);
       print_r($nu_waiting);
   echo '</pre>';