<?php

class User
{
  // Properties
  public $name;
  public $email;
  // 
  private $status = 'active';
  // 
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
  // 
  // getter - it is only a methodology or words
  // its not a real code it just a method so by doing this
  // we can access a modifier which is the private or protected
  // in getter we just only write a function and the function name
  // that start with a get or set
  //Getter
  public function getStatus()
  {
    echo $this->status;
  }
  // Setter is to set or assign a value to a acceess modifier
  // Setter must or required to have a parameters
  // we can write any parameters in our Setter
  // but i advised to write the name of the variable that have
  // a private or protected modifier
  // 
  // Setter 
  public function setStatus($status)
  {
    // this code below will not display the new value
    // it just the previous value
    // so to make it a new value we write 
    // or specify the value that will display
    $this->status = $status;
  }
}


// 
// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

// var_dump($user2);
// 
// getter and setter
// Setter
$user2->setStatus('inactive');
// Getter
$user2->getStatus();
