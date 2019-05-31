<?php

class MyMongoDB{
    private $host;
    private $name;
    private static $instance;

    private function __construct($arr) {
        $this->init($arr);
    }
    public static function getInstance($arr){
        if(self::$instance == null){
            new self($arr);
        }
        return self::$instance;
    }
    private function init($arr){
        require_once '../config/config.php';
        $this->host = isset($arr['host']) ? $arr['host'] : DB_HOST;
        $this->name = isset($arr['name']) ? $arr['name'] : DB_NAME;
        self::$instance = new MongoDB\Driver\Manager($this->host);
    }

    private function __clone(){}

}