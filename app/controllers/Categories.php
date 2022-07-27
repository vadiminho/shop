<?php

class Categories extends Controller{

public function index(){
  $products = $this->model('Products');
  $this->view('home/index',$products->getProducts());
}

public function shoes(){
  $products = $this->model('Products');
  $this->view('home/index',$products->getProductsCategories('shoes'));
}

public function watches(){
  $products = $this->model('Products');
  $this->view('home/index',$products->getProductsCategories('watches'));
}

public function shirts(){
  $products = $this->model('Products');
  $this->view('home/index',$products->getProductsCategories('t-shirt'));
}

public function accessories(){
  $products = $this->model('Products');
  $this->view('home/index',$products->getProductsCategories('accessories'));
}

}

 ?>
