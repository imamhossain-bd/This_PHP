<?php
namespace inherits;

    class Fruits{
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        function intro(){
            echo "The Fruit Is $this->name, And the color is $this->color";
        }
    }

    class Strawberry extends Fruits{
        function message(){
            echo "Am I a fruit or a berry? ";
        }
    }
?>