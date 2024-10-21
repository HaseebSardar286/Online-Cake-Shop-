<?php
session_start();
$msg5="";
$msg6="";
if ( isset($_REQUEST['msg5']) )
    $msg5 = $_REQUEST['msg5'];

if ( isset($_REQUEST['msg6']) )
    $msg6 = $_REQUEST['msg6'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Contact Us</title>
    <style>
        
        body
        {
            margin : 0px;
            padding : 0px;
            background-image: url("123.jpeg");
            background-size: cover;
            background-size: center;
            background-color:rgb(201, 211, 211);
            font-family: calibri;
        }
        .Container
        {
            box-shadow: 0px 0px 2px 2px;
            background-color: rgb(218, 221, 221);
            margin-left: 4%;
            margin-right: 4%;
            height: 75vh;
            padding: 50px;
            margin-top: 20px;
        }
        .logout
        {
            margin-top: 20px; 
            margin-left: 400px; 
            width: 70px; 
            height: 35px;
        }
        a
        {
            text-decoration: none;
            color: white;
        }
        .display
        {
            display:inline-block;
            margin-left: 30px;
            margin-bottom: 20px;
            text-align: center;
            font-family: calibri;
        }
        .buy
        {
            width: 50%;
        }
        .text
        {
            font-weight: bold; 
            padding-top: 5px;
        }
        .topnav
        {
            margin-top: 20px; 
            display: flex; 
            margin-bottom: 20px; 
            margin-left: 310px;
            background-color: skyblue;
            margin-right: 240px;
        }
        .container
        {
            display: flex;
            margin-top: 80px;
            margin-left: 150px;
        }
        
        .details
        {
            position: relative;
            display: flex;
            flex-direction: column;
            margin-right: 200px;
        }
        .icon
        {
            width: 40px;
            height: 40px;
            background-color: #4ba2d4;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }
        .form
        {
            box-shadow: 0px 0px 3px 3px grey;
            width: 320px;
            height: 350px;
            align-items: center;
            justify-content: center;
            display: flex;
            padding: 10px;
            background-color: #fff;
        }
        .button
        {
            height: 27px; 
            width: 150px;
            margin-top: 10px; 
            margin-left: 75px;
            background-color: rgb(163, 218, 240);
            border-radius: 5px;
            font-size: 16px;
        }
        a:hover
        {
            color:blue;
        }
        .heading
        {
            text-align: center; 
            font-family: Lucida Handwriting; 
            background-color: #b3f0f2; 
            height: 80px; 
            padding-top: 2px;
        }
    </style>
</head>
<body>
        <div class="heading"><h1> Daily Delights </h1></div>
        
    <div class="topnav">
        <div style="margin-left: 150px; display: flex"> <a href="view_products.php"> Home </a> </div>
        <div style="margin-left: 150px; display: flex"> <a href="aboutus.html"> About Us </a> </div>
        <div style="margin-left: 150px; display: flex"> <a href="feedback.php"> Feedback/Contact </a> </div>


    </div>
<div class="Container">
    <div class="container">
        <div class="details">
            <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div><span style="font-size: 20px; font-weight: bold;">Address</span></div>
            <div style="margin-bottom: 30px"> 9 Beadon Rd, Victoria Park Lahore, Punjab 54000. </div>

            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div><span style="font-size: 20px; font-weight: bold;">Phone</span></div>
            <div> 0310-4836096 </div>
            <div style="margin-bottom: 30px"> 0310-8656847 </div>

            <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            <div><span style="font-size: 20px; font-weight: bold;">Email</span></div>
            <div style="margin-bottom: 30px"> info@dailydelights.com</div>

        </div>
        <div class="form">
            <form action="feedback_server.php" method="get">
                <div style="color: green; font-weight: bold"> <?php echo $msg5; ?> </div>
                <div style="color: red; font-weight: bold"> <?php echo $msg6; ?> </div>
                <div style="font-weight: bold; margin-top: 10px"> <label> Name: </label></div>
                <div> <input type="text" name="Cname" required="required" style="width: 270px; height: 25px; border-radius: 5px;"></div>
    
                <div style="font-weight: bold; margin-top: 10px"><label> Email: </label></div>
                <div><input type="email" name="email" required="required" style="width: 270px; height: 25px; border-radius: 5px;"></div>
    
                <div style="font-weight: bold; margin-top: 10px"><label> Write your message: </label></div>
                <div><textarea name="comment" id="" cols="35" rows="8" style=" border-radius: 5px;"></textarea></div>

                <button type="submit" class="button">Send</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>