<?php 
// product_class.php

include('shopdb.php');

class product extends database{
    public function saveproduct($t1, $t2, $t3, $t4){
        $q = "INSERT INTO product(title, type, price, imgUrl) values 
            ('$t1', '$t2', $t3, '$t4')";

        $this->con->exec($q);
        header("location: dashboard.php");
    }

    public function updateproduct($t1, $t2, $t3, $t4, $t5){
        $q = "UPDATE product set title='$t2', type='$t3', price=$t4, imgurl='$t5' where id=$t1";
        $this->con->exec($q);

        header("location: dashboard.php");
    }



    public function getProducts(){
        $q = "SELECT * FROM product";
        $data = $this->con->query($q);

        return $data;
    }
    public function getProductById($id){
        $q = "SELECT * FROM product where id=$id";
        $data = $this->con->query($q);

        return $data;
    }
    public function deleteproduct($t){
        $q = "DELETE FROM product where id=$t";
        $this->con->exec($q);

        header("location: dashboard.php");
    }

}
?>