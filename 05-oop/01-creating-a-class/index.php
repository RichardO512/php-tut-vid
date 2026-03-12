<!-- 
Creating a Class 
-->
<?php

class User
{
  // properties
  public $name;
  // public is a access modifier and it is also called
  // visibility
  public $email;
  // 
  // 
  // construct
  public function __construct($name, $email)
  {
    // $this - it means that this object
    // or that particular class property
    $this->name = $name; //must be the same name in the construct
    $this->email = $email;
  }

  // 
  // methods - is a literally a function
  // but inside the class so 
  // every function that inside the class called method

  public function login()
  {
    echo $this->name . ' Successfully logged in.';
  }
}
// 
// 
// instantiate
// 
// using new() - to access the class
// $user1 = new User();
// 
// 
// construct
// 
$user1 = new User('John Doe', 'doe@gmail.com');
// 
// assign a value using the -> object operator
// $classInstance->property_name
// $user1->name = 'Richard';
// $user1->email = 'ombrog512@gmail.com';
/*
Remembe : if we want to instantiate or if we
instantiate alot or everytime we dont 
assign a value 
because alot of the times the class property are private
so the property are not accessable
that's why __construct are always need or require to use
*/
// 
// var_dump($user1);
// calling or invoking
$user1->login();
// 
// 

$user2 = new User('Jane Doe', 'Jane@gmail.com');
// var_dump($user2);
// $user2->login();
?>
<br>
<p><?php $user2->login(); ?></p>