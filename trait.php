<?php 
trait Foo{
public function sayHello(){
    return "Hello";
}
public function sayWorld(){
    return "World!";
}
}
class Bar{
    use Foo;

}
$bar = new Bar();
echo $bar->sayHello();
echo $bar->sayWorld();
?>