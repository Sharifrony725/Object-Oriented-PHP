<?php 
include "Person.php";
    class Book{
        public $price;
        public $author;
        public function book_price(int $price){
            $this->price = $price;
        }
        // public function book_author(array $names){
        //     $this->author = $names;
        // }
        public function book_author(Person $person){
            $this->author = $person->names();
        }
    }
    $book = new Book();
     $book->book_price(250);
     echo $book->price;
     echo "<br>";
     //$book->book_author(["Karim","Rahim","Rony"]);
    // echo "<pre>";
    //  print_r($book->author);    
    //  echo "</pre>";
    //  echo $book->author[0];
    $obj_of_person = new Person();
    $book->book_author( $obj_of_person);
    echo "<pre>";
    print_r($book->author);
    echo "</pre>";
?>