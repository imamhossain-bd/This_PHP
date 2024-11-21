<?php
namespace abstruct;
    abstract class cars{
        public $name;
        public $price;

        function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
        abstract public function intros(): string;
    }
    
    class Audi extends Cars {
        public function intros(): string {
            return "<br> Choose German quality! I'm an $this->name! ";
        }
    }
    
    class Price extends Cars {
        public function intros(): string {
            return "This price is $this->price.";
        }
    }
?>