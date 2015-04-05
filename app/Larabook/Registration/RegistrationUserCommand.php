<?php namespace Larabook\Registraton;

class RegisterUserCommand {

  public $username;

  public $email;

  public $password;

  fucntion __construct($email,$password,$username)
  {

    $this->email=$email;
    $this->password=$password;
    $this->username= $username;

  }

}