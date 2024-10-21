<?php
// delete.php

include('product_class.php');

$id = $_REQUEST['id'];


$p = new product;
$p->connect();
$p->deleteproduct($id);



?>