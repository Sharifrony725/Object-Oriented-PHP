<?php 
/* 
class Father{
    public $name = "Jamal";
     public function getName(){
        return $this->name;
     }
}
class Son extends Father{
    public function displayFatherName(){
        echo $this->name;
    }
}
$father = new Father();
$son = new Son();
echo $father->name;
echo "<br>";
echo $father->getName();
echo "<br>";
$son->displayFatherName();
*/
//Protected
/*
class Father{
    protected $name = "Jamal";
     public function getName(){
        return $this->name;
     }
}
class Son extends Father{
    public function displayFatherName(){
        echo $this->name;
    }
}
$father = new Father();
$son = new Son();
//echo $father->name;
echo "<br>";
echo $father->getName();
echo "<br>";
$son->displayFatherName();
*/
//private
class Father{
    private $name = "Jamal";
     public function getName(){
        return $this->name;
     }
}
class Son extends Father{
    public function displayFatherName(){
        echo $this->name;
    }
}
$father = new Father();
$son = new Son();
//echo $father->name;
echo "<br>";
echo $father->getName();
echo "<br>";
//$son->displayFatherName();
?>