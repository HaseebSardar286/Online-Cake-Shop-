<?php

include('user_class.php');

$name = $_REQUEST['u_name'];
$email = $_REQUEST['u_email'];
$pwd = $_REQUEST['u_pwd'];
$final_pwd = $_REQUEST['u_final_pwd'];


$u = new user;
$u->connect();
$u->saveUser($name, $email, $pwd, $final_pwd);


?>