<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheng
 * Date: 2019/5/31
 * Time: 10:26
 */

class MongoDBModel {
    protected $dao;

    public function __construct(){
        $this -> initDAO();
    }
    protected function initDAO(){
        require_once '../db/MyMongoDB.php';
        $arr = array();
        $this ->dao = MyMongoDB::getInstance($arr);

    }
}
