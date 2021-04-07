<?php 
//Abstract Class
abstract class Element{
    abstract public function remind();
    public function test(){

    }
}
class Water extends Element{
    public function remind(){
        return get_class($this) . " " .get_parent_class($this);
    }
}
class Air extends Element{
    public function remind(){
        return get_class($this) . " " . get_parent_class($this);
    }
}
$pani = new Water();
echo $pani->remind();
$air = new Air();
echo "<br>";
echo $air->remind();
?>