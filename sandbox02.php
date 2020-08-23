<?php 

    class User {
        public $email;
        public $name;

        public function __construct($email, $name) {
            // $this->email = 'mari@thenetninja.co.uk';
            // $this->name = 'mario';

            $this->email = $email;
            $this->name = $name;
        }

        public function login() {
            echo 'Hello ' . $this->email . $this->name;
        }
    }

    //$userOne = new User();
    //echo $userOne->name;
    //echo $userOne->email;

    $userTwo = new User('Yoshi@gmail.com', 'Yoshi');
    echo $userTwo->name;
    $userTwo->login();


?>