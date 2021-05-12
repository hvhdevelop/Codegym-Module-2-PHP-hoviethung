<?php
    class Fan {
        const SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;

        private $speed = self::SLOW;
        private $on = false;
        private $radius = 5;
        private $color = "blue";
        public function __construct(){
                
        }

        public function get($propertyName) {
            return $this->$propertyName;
        }
        public function set($propertyName,$propertyValue) {
            $this->$propertyName = $propertyValue;
        }
        public function setSpeed($mode) {
            switch ($mode)
            {
                case "FAST" :
                $this->speed = self::FAST;
                break;
                case "MEDIUM" :
                $this->speed = self::MEDIUM;
                break;
                case "SLOW" :
                $this->speed = self::SLOW;
                break;
            }
        }
        public function toString() {
            if ($this->on) {
                return $this->speed.' '.$this->color.' '.$this->radius.' '.'fan is ON';
            } else {
                return $this->color.' '.$this->radius.' '.'fan is off';
            }
        }
    };
    
?>