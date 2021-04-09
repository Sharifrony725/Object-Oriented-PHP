<?php 
$message = "This is from constrcutor method";
$test = (new class ($message){
    public function __construct($message)
    {
        echo $message;
        echo "<br>"; 


    }
    public function log($msg){
        return $msg;
    }
});
echo $test->log("This is from log message");
?>