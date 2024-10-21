<?php

class database
{
    protected $con;
    public function connect()
    {
        $this->con = new PDO("mysql: host=localhost; dbname=shop", "root", "");
        
    }
}




?>