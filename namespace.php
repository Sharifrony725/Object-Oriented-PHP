<?php 
namespace second;
        include "first_namespace.php";
        include "second_namespace.php";
        //$obj = new second\A(); //Qualified class name
        //$obj =  new A(); //Unqaulified class name
        $obj = new \A();  //Fully Qualified class name or FQCN 

?>