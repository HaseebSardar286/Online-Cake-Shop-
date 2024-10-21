<?php
// checkout_server.php

include('user_class.php');

$fname = $_REQUEST['f_name'];
$lname = $_REQUEST['l_name'];
$email = $_REQUEST['email'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];
$street = $_REQUEST['street'];

$p = new user;
$p->connect();
$p->checkoutUser($fname, $lname, $email, $country, $city, $street);

?>