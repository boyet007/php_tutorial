<?php 

    class User {
        public $email;
        public $name;

        // public function __construct($email, $name) {
        //     // $this->email = 'mari@thenetninja.co.uk';
        //     // $this->name = 'mario';

        //     $this->email = $email;
        //     $this->name = $name;
        // }

        public function login() {
            echo 'Hello ' . $this->email . $this->name;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            if(is_string($name) && strlen($name) > 1) {
                $this->name = $name;
                return 'name has updated to $name';
            } else {
                return 'not a valid name';
            }
        }
    }

    //$userOne = new User();
    //echo $userOne->name;
    //echo $userOne->email;

    // $userTwo = new User('Yoshi@gmail.com', 'Yoshi');
    // echo $userTwo->name;
    // $userTwo->login();

    $userThree = new User();
    echo $userThree->setName('Ucok');
    echo $userThree->getName();


?>