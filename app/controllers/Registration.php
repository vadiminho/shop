<?php

class Registration extends Controller{
public function reg(){
$data = [];
$user = $this->model('User');
$user->setData($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['pass']);
$valid = $user-> validForm();
if ($valid == 'Good')
$user->addUser();
else
$data['message']=$valid;
$this->view('reg/index',$data);
}

public function dashboard(){
  $user = $this->model('User');
  if(isset($_POST['exit'])){
  $user->logOut();
  exit();
  }
  $this->view('user/homepage',$user->getUser());
}


public function auth(){
  $data = [];
  if(isset($_POST['email'])){
    $user = $this->model('User');
    $data['message'] = $user->auth($_POST['email'],$_POST['pass']);
  }
  $this->view('auth/index',$data);
}

}
