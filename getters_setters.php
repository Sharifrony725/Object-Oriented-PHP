<?php 
    class User{
        public $username;
        private $email;
        public function __construct($usrname,$email)
        {
            $this->username =$usrname ;
            $this->email = $email;
        }
        public function addFriend(){
             return "$this->emial added a new friend";
        }
        //getter
            public function getEmail(){
                return $this->email;
            }
        //setter
        public function setEmail($emailAddress){
            $this->email = $emailAddress;
        }
    }
    $user1 = new User("rony","rony@gmail.com");
    $user2 = new User("sharif","sharif@gmail.com");
   echo $user1->getEmail();
   echo "<br>";
 $user2->setEmail("sarif@yahoo.com");
echo $user2->getEmail(); 
?>