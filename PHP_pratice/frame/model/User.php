<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheng
 * Date: 2019/5/30
 * Time: 11:59
 */

include 'MongoDBModel.php';
class User extends MongoDBModel {

    public function getUsers(){
        $filter = ['name'=>''];
        $query = new MongoDB\Driver\Query($filter);
        $users = $this->dao -> executeQuery('crawler.user', $query);
        return $users;
    }

    public function addUsers(){
        $user = array(
            '_id'=>'10',
            'username'=>'usertest',
            'password' => 'passtest',
            'email' => 'email@test',
            'name' => 'nametest',
            'registerDate' => date(),
            'comment' => 'php db connection test'
        );
        $this->dao -> insert($user);
    }
}