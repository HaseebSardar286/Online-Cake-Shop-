<?php
session_start();
// feedback_server.php

include('user_class.php');

$name = $_REQUEST['Cname'];
$email = $_REQUEST['email'];
$comment = $_REQUEST['comment'];


$p = new user;
$p->connect();
$p->feedback($name, $email, $comment);




?>