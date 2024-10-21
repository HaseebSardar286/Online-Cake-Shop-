<?php
include('shopdb.php');

class user extends database
{
    public function saveUser($t1, $t2, $t3, $t4){
        $q = "SELECT * FROM user where email='$t2'";
        $data = $this->con->query($q);

        if( $data->rowCount()==0 )
        {
            $q = "INSERT INTO user(name, email, pwd, final_pwd) values 
            ('$t1', '$t2', '$t3', '$t4')";
        
            if($t4===$t3 && $this->con->exec($q) )
            {
                header("location: index.php");
            }
            else
            {
                header("location: register.php?msg1=Passwords not matched");
            }
        }
           
        else
        {
            header("location: register.php?msg=Already Registered");
        }


         
    }

    public function loginUser($t1, $t2){
        $q = "SELECT * FROM admin where email='$t1' and pwd='$t2'";
        $w = "SELECT * FROM user where email='$t1' and pwd='$t2'";

        $data = $this->con->query($q);
        $data1 = $this->con->query($w);

        if( $data->rowCount()>0 )
        {
            header("location: dashboard.php");
            
        }
        else if( $data1->rowCount()>0)
        {
            header("location: view_products.php");
           
        }
        else
           header("location: index.php ?msg=Invalid E-mail or Password");
    }

    public function checkoutUser($t1, $t2, $t3, $t4, $t5, $t6)
    {
        
             
            $q = "INSERT INTO checkout(fname, lname, email, country, city, street) values 
            ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6')";

            if($this->con->query($q))
            {
                header("location: confirm_order.php");
            }
            else
            header("location: checkout.php");
        
    }

    public function feedback($t1, $t2, $t3)
    {
             
            $q = "INSERT INTO feedback(name, email, comment) values 
            ('$t1', '$t2', '$t3')";

            if($this->con->query($q))
            {
                header("location: feedback.php? msg5=Your message has been delivered!");
            }
            else
            header("location: feedback.php? msg6=Message could not be delivered!");
        
    }

    
}

?>
