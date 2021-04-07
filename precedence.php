<?php 
    trait Test{
        public function greeting(){
            echo "Greeting from trait";
        }
    }
    class Base{
        public function greeting(){
            echo "Greeting from base/parent Class";
        }
    }
    class Child extends Base{
        use Test;
        public function greeting(){
            echo "Greeting from child Class";
        }
    }
    $obj = new Child();
    $obj->greeting();
?>