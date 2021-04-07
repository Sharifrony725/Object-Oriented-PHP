<?php 
class User{
    public $username = "Sharif";
    public $email = "rony@gmail.com";
    public $address ="Feni";
    private $age = 22;
    public function addFriend(){
        echo "This method add friend";
    }    
}
$user1 = new User();
$user2 = new User();
echo $user1->username;
echo "<br>";
echo $user1->email;
//echo $user2->age;
echo "<br>";
$user1->addFriend();
echo "<br>";
$user2->username = "Rony";
$user2-> email = "rony1@gmail.com";
$user2->address = "Dhaka";
echo $user2->username;
echo "<br>";
echo $user2->email;
//echo $user2->age;
echo "<br>";
echo $user2->address;
echo "<br>";
$user2->addFriend();
//get_class
echo "<br>";
echo get_class($user2);
echo "<br>";
print_r(get_class_vars('User'));
echo "<br>";
print_r(get_class_methods('User'));
?>