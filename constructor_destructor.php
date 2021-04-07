<?php 
class Test{
    //Constructor Method
    public function __construct()
    {
        echo "Constructor Started";
    }
   
    public function sayHello(){
        echo "Hello ,World!";
    }
    public function __destruct()
    {
        echo "Inside Destructor Method";
    }
   
}
$test = new Test();
echo "<br>";
$test->sayHello();
echo "<br>";
//Destructor Method

?>