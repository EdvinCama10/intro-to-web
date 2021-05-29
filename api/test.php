<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__) . "/dao/UserDao.class.php";

$user_dao = new UserDao();

//$user = $user_dao->get_user_by_id(1);
//$user_dao->get_user_by_email("edvincama00@gmail.com");

$user1 = [
    "Username" => "nekiuser",
    "Email" => "neki@gmail.com",
    "FirstName" => "neki",
    "LastName" => "user",
    "PhoneNumber" => "0000000",
    "address" => "neka adresa",
    "password" => "nekasifra"
];

//$user = $user_dao->update_user_by_email("edvincama00@gmail.com", $user1);

//$user = $user_dao->add_user($user1);
$user = $user_dao->get_user_by_email("edvincama00@gmail.com", $user1);
//$print_r($user);