<?php

require 'DB.php';

class User {
    private $name;
    private $lastname;
    private $email;
    private $pass;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($name,$lastname,$email,$pass) {
       $this->name = $name;
       $this->lastname = $lastname;
       $this->email = $email;
       $this->pass = $pass;
    }

    public function validForm() {
                if(strlen($this->name) < 2)
                    return "Input correct name";
                else if(strlen($this->lastname) < 3)
                        return "Input correct lastname";
                else if(strlen($this->email) < 3)
                    return "Input correct email";
                else if(strlen($this->pass) < 3)
                    return "pass should have min 3 symbols";
                else
                    return "Good";
            }

    public function addUser() {
        $sql = 'INSERT INTO users(name,lastname,email,pass) VALUES(:name, :lastname, :email, :pass)';
        $query = $this->_db->prepare($sql);
        $pass = password_hash($this->pass, PASSWORD_DEFAULT);
        $query->execute(['name' => $this->name,'lastname' => $this->lastname, 'email' => $this->email, 'pass' => $pass]);
        setcookie('login',$this->email,time()+3600, '/');
        header('Location: /registration/dashboard');
    }

    public function getUser() {
      $email = $_COOKIE['login'];
      $result = $this->_db->query("SELECT * FROM `users` WHERE `email`='$email' ");
      return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function logOut() {
      setcookie('login',$this->email,time()-3600, '/');
      unset($_COOKIE['login']);
      header('Location: /');
    }

    public function auth($email,$pass) {
      $result = $this->_db->query("SELECT * FROM `users` WHERE `email`='$email' ");
      $users = $result->fetch(PDO::FETCH_ASSOC);

      if($users['email']==''){
        return 'Users not exist';
      }
      else if (password_verify($pass,$users['pass'])) {
        setcookie('login',$email,time()+3600, '/');
        header('Location: /');
      }
      else {
        return 'password incorrect';
      }

    }



}

 ?>
