<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheng
 * Date: 2019/5/30
 * Time: 10:49
 */


include '../model/User.php';
$userModel = new User;
$userList = $userModel -> getUsers();
foreach ($userList as $user){
    print_r($user);
    echo '<br>';
}