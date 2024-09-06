<?php 

class User {
    // Properties
    public $name;
    public $email;

    //] Methods

public function __construct($name, $email) 
{
    $this->name = $name;
    $this->email = $email;
}

    public function login() {
        echo $this->name . 'loggedin';
    }
}



// Instantiate a new object

$user1 = new User('John Doe', 'john@gmail.com');



$user1->login();


$user2 = new User('John Doe', 'john@gmail.com');

$user2->login();



// var_dump($user2);