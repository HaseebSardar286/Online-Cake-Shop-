<?php
session_start();
include('user_class.php');

$email = $_REQUEST['u_email'];
$pwd = $_REQUEST['u_pwd'];

$u = new user;
$u->connect();
$u->loginUser($email, $pwd);




?>