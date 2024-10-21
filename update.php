<?php
// update.php

include('product_class.php');

$name = $_REQUEST['p_name'];
$type = $_REQUEST['p_type'];
$id = $_REQUEST['id'];
$price = $_REQUEST['p_price'];
$file_name =  'media/' . $_FILES['p_img']['name'];

move_uploaded_file( $_FILES['p_img']['tmp_name'], $file_name );

$p = new product;
$p->connect();
$p->updateproduct($id, $name, $type, $price, $file_name);


?>