<?php
require 'DB.php';

    class Products {
        private $db = null;

        public function __construct() {
            $this->db = DB::getInstence();
        }

        public function getProducts() {
            $result = $this->db->query("SELECT * FROM `products` ORDER BY `id` DESC");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProductsLimited($order, $limit) {
            $result = $this->db->query("SELECT * FROM `products` ORDER BY $order DESC LIMIT $limit");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProductsCategories($category){
          $result = $this->db->query("SELECT * FROM `products` WHERE `category`='$category'");
          return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getOneProduct($id){
          $result = $this->db->query("SELECT * FROM `products` WHERE `id`='$id' ");
          return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function getProductsCart($items) {
            $result = $this->db->query("SELECT * FROM `products` WHERE `id` IN ($items)");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

      }


 ?>
