<?php

class DB {
        private static $db = null;

        public static function getInstence() {
            if(self::$db == null)
                self::$db = new PDO('mysql:host=ap465453.mysql.tools;dbname=ap465453_shop', 'ap465453_shop', '2p8P&#By4c');

            return self::$db;
        }

        private function __construct() {}
        private function __clone() {}
        private function __wakeup() {}

    }

 ?>
