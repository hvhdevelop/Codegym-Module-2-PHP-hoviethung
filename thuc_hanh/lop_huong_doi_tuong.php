<?php
class earth {
    private $id     =123;
    protected $age  = '70';
    
}
class animal extends earth {
    //thuoc tinh
    public      $name   = '';
    private     $element = 'fire';
    protected   $age    = 69;
    static      $language   ='';
    function __construct(){
        echo $this->id;
        echo $this->age;
        
    }
    function setName($newName){
        $this->name = $newName;
    }
    function getName(){
        return $this->name;
    }
    function setElement($newElement){
        $this->element = $newElement;
    }
    function getElement(){
        return $this->element;
    }
}

    $objanimal= new animal();
    $objanimal -> setName("Hungdeptrai");
    echo $objanimal->getName();
    


?>