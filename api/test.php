<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once dirname(__FILE__) . "/dao/UserDao.class.php";

$user_dao = new UserDao();

//$user = $user_dao->get_user_by_id(1);
//$user_dao->get_user_by_email("edvincama00@gmail.com");
$user = [
    "Username" => "johndoe",
    "Email" => "johndoe@gmail.com",
    "FirstName" => "John",
    "LastName" => "Doe",
    "PhoneNumber" => "000000",
    "isBlocked" => 0,
    "isActive" => 1,
    "CreatedAt" => "2021-04-18 19:22:35",
    "ActivatedAt" => "2021-04-18 19:22:35",
];

$user_dao->add_user($user);

print_r($user);
