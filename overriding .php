<?php 
class User{
    public $username;
    protected $email;
    public $role = "member";
    public function __construct($usrname, $email)
    {
        $this->username = $usrname;
        $this->email = $email;
    }
    public function message(){
        return "$this->email added  a new friend";
    }
}
class AdminUser extends User{
public $role = "admin";
public $level;
public function __construct($usrname, $email,$level)
{
    $this->level = $level;
    parent:: __construct($usrname, $email);
}
public function message()
{
    
    return "$this->email , an admin, added  a new user";
}
}
$user = new User("Rony","rony@gmail.com");
$user2 = new User("Sharif", "sharif@gmail.com");
$adminuser = new AdminUser("karim" , "karim@gmail.com",5 );

echo $user->role;
echo "<br>";
echo $adminuser->role;
echo "<br>";
echo $adminuser->username;
echo "<br>";  
echo $adminuser->role;
echo "<br>";  
echo $adminuser->message();
echo "<br>";  
echo $user->message();
// print_r(get_class_vars('User'));
// print_r(get_class_vars('AdminUser'));
?>