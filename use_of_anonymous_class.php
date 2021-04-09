<?php 
// Interface that will be implement
interface TestInterface{
public function getMessage();
}
// trait that will be use
trait TestTrait{
    public function sayHello(){
         return "<br> Hello, I am from Trait";
    }
}
/**
 * Class That will be extended
 */
class MyClass{
public function __construct($message)
{
    echo $message;
}
}
    $message = "This class extend MyClass";
    $test = (new class ($message) extends MyClass implements TestInterface {
        public function log($msg){
            echo "<br>";
            return $msg;
        }
        public function getMessage()
        {
            return "<br> I am actually come from Interface";
        }
        use TestTrait;
    });
    echo $test->log("From log method");
    echo $test->getMessage();
    echo $test->sayHello();

?>