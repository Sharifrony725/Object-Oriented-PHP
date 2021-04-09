<?php 
//Normal Class
/*
class Test{
    public function log(){
        return "Log Data";
    }
}
$test = new Test();
echo $test->log();
*/
// Example of Anonymous Class
$test =  (new class{
public function log(){
    return "Log Data";
}
});
//call the log method within the anonymous class
echo $test->log(); 
?>