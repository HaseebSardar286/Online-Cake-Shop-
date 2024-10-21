
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
    <style>
        body
        {
            margin : 0px;
            padding : 0px; 
            background-size: cover;
            background-size: center;
            background-color: rgb(237, 243, 243);
            font-family: calibri;
        }
        a
        {
            text-decoration: none;
            color: white;
        }
        a:hover
        {
            color:blue;
        }
        .logout
        {
            margin-top: 20px; 
            width: 70px; 
            height: 35px; 
        }
        .logoutbutton
        {
            width: 80px; 
            margin-left: 980px;
        }
        .display{
            display:inline-block;
            margin-left: 32px;
            margin-bottom: 20px;
            font-family: calibri;
            text-align: center;
        }
        .text
        {
            font-weight: bold; 
            padding-top: 5px;
        }
        .buttons
        {
            margin-top: 5px;
            margin-right: 5px;
        }
        .topnav
        {
            margin-left: 200px;
            width: 350px;
            height: 25px;
            margin-top: 4%;
              
        }
        .links
        {
            margin-right:7%; 
            margin-top: 20px; 
            display: flex; 
            margin-left: 150px; 
            margin-bottom: 20px;
            background-color: skyblue;
        }
        
    </style>
</head>
<body>
    <div style="display: flex; background-color: #b3f0f2; height: 75px">
        <div style="font-family: Lucida Handwriting; margin-left: 10px"><h1> Daily Delights </h1></div>
        
        <div class="logoutbutton">
        <a href="logout.php"><input type="submit" value="Log out" class="logout"/></a>
        </div>
    </div>
    <div class="links">
        <div style="margin-left: 150px; display: flex"> <a href="add_new_product.php"> Add new Items </a> </div>
        <div style="margin-left: 150px; display: flex"> <a href="view_products.php"> View all Items </a> </div>
        <div style="margin-left: 150px; display: flex"> <a href="aboutus.html"> About Us </a> </div>
        <div style="margin-left: 150px; display: flex"> <a href="feedback.php"> Feedback/Contact </a> </div>

   
    </div>
</body>
</html>
<?php
// view_products.php
session_start();
include('product_class.php');

$p = new product;
$p->connect();
$data = $p->getProducts();



foreach($data as $key=>$item){
    echo '<div class="display">';
    
    echo '<img width=290 height=270 src=' . $item[4] .' />';
    echo '<div class="text">';
    echo $item[1];
    echo '</div>';
    echo '<div>';
    echo $item[2];
    echo '</div>';
    echo '<div class="text">';
    echo $item[3];
    echo '/-';
    echo '</div>';

    echo '<div>';

    echo "<a href='edit.php?id=$item[0]''><input type='submit' value='Edit' class='buttons'/></a>";
    echo "<a href='delete.php?id=$item[0]''><input type='submit' value='Delete' class='buttons'/></a>";

    echo'</div>';
    echo '</div>';

               

}




?>