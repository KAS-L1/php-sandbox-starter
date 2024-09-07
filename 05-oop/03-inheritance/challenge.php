<?php

// We're making a class called User. This is like a blueprint for creating users.
class User {
  // These are like labels that we can use to store information about each user.
  public $name; // The user's name
  public $email; // The user's email address
  protected $status = 'active'; // Whether the user is active or not (like if they're in school or not)

  // This is like a special function that helps us create a new user.
  public function __construct($name, $email) {
    // We're taking the name and email that we passed in, and storing them in our labels.
    $this->name = $name;
    $this->email = $email;
  }

  // This is like a special action that our user can do.
  public function login() {
    // When the user logs in, we want to print out a message that says they logged in.
    echo $this->name . ' logged in <br>';
  }
}

// Now, imagine we have a special kind of user called an Admin.
// An Admin is like a teacher or principal - they have extra powers!
class Admin extends User {
  // We're adding a new label to our Admin class to store their level (like a teacher's grade level).
  public $level;

  // We're creating a new special function to help us create an Admin.
  public function __construct($name, $email, $level) {
    // We're storing the level in our new label.
    $this->level = $level;
    // We're also calling the special function from our User class to help us create the Admin.
    parent::__construct($name, $email);
  }

  // We're overriding the login action from our User class to make it special for Admins.
  public function login() {
    // When an Admin logs in, we want to print out a message that says they logged in, with their name and "Admin" in front.
    echo 'Admin '. $this->name . ' logged in <br>';
  }
  
  // We're adding a new action to our Admin class to help us get their status.
  public function getStatus() {
    // We're printing out the status of our Admin (which is stored in the protected label from our User class).
    echo $this->status;
  }
}

// Now, let's create a new Admin!
$admin1 = new Admin('Tom Smith', 'Tom@gmail.com', 5);
$moderator1 = new Moderator('John', 'john@gmail.com,', '3');

// We can print out the Admin's name, email, and level.
echo $moderator1->name;
echo $moderator1->email;
// echo $admin1->level;
echo $moderator1->modLevel;

// We can also make the Admin log in and get their status.
$moderator1->login();  
// $moderator1->getStatus();
$moderator1->getModLevel();

// The Moderator class should be outside the Admin class, not inside it.
class Moderator extends User {
  public $modLevel;
  
  public function __construct($name, $email, $modLevel) {
    $this->modLevel = $modLevel;
    parent::__construct($name, $email);
  }
  
  public function login() {
    echo 'Moderator ' . $this->name . ' logged in <br>';
  }
  
  public function getModLevel() {
    return $this->modLevel;
  }
  
}

