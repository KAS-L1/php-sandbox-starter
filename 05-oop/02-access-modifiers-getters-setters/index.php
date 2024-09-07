<?php

// Let's create a new class called "User"
class User
{
  // These are like special boxes where we can store information about the user
  public $name; // This box is for the user's name
  public $email; // This box is for the user's email
  private $status = 'active'; // This box is for the user's status (like "active" or "inactive")

  // This is a special function that runs when we create a new user
  public function __construct($name, $email)
  {
    // We're putting the user's name and email into their special boxes
    $this->name = $name;
    $this->email = $email;
  }

  // This is a function that makes the user log in
  public function login()
  {
    // We're printing out a message that says the user logged in
    echo $this->name . ' logged in <br>';
  }

  // This is a function that gets the user's status
  public function getStatus(){
    // We're printing out the user's status
    echo $this->status;
  }

  // This is a function that sets the user's status
  public function setStatus($status){
    // We're putting the new status into the user's special box
    $this->status = $status;
  }

}

// We're creating a new user named John Doe with the email john@gmail.com
$user1 = new User('John Doe', 'john@gmail.com');

// We're making John Doe log in
$user1->login();

// We're creating a new user named Jane Doe with the email jane@gmail.com
$user2 = new User('Jane Doe', 'jane@gmail.com');

// We're making Jane Doe log in
$user2->login();

// We're setting Jane Doe's status to "inactive"
$user2->setStatus('inactive');

// We're getting Jane Doe's status
$user2->getStatus();

