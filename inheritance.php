<?php 
    class Father{  //parent class or base class
        public $house = "Building";
        public $land = "3 Bigha";
        private $cash = 222222;

        public function parent_method(){
           echo $this->house;
        }
    }
    class Son extends Father{
       public $computer = "Core i5 hp";  
       public function child_method(){
        echo "This is child class method";
       }
    }
$father = new Father();
 $son =  new Son();
echo $son->house;
echo "<br>";
echo $son->land;
echo "<br>";
$son->parent_method();
echo "<br>";
 echo $son->computer;
?>