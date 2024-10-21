<?php
session_start();
$msg="";
if ( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log in </title>
    <style>w
        body
        {
            margin : 0px;
            padding : 0px;
            background-image: url("123.jpeg");
            background-size: cover;
            background-size: center;
            background-color: #b3f0f2;
            font-family: calibri;
        }
        
        .welcome
        {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 4% auto 0px;
            width: 500px;
            height: 60px;
            text-align: center;
            font-family: Lucida Handwriting;
        }
        .sign_up
        {
            box-shadow: 0px 0px 3px 3px grey;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 4% auto 0px;
            width: 350px;
            height: 350px;
            background-color: rgb(237, 243, 243);
            text-align: center;
        }
        .border
        {
            border-radius: 20px;
            height: 30px;
            width: 280px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome">
        <h1> Welcome to <br/>Daily Delights </h1>
    </div>
<div class="sign_up">   
    <div>
        <div> <h1 style="margin-bottom: 50px; font-family: Lucida Handwriting"> Login </h1> </div>
        <div style="color: red"> <?php echo $msg; ?> </div>
        <form action="login_server.php" method="get">

        <div><input type="text" name="u_email" id="" class="border" placeholder="E-mail:"> </div></br>

        <div><input type="password" name="u_pwd" id="" class="border" placeholder="Password"> </div></br>
        
        <div><input type="submit" value="Log in" class="border" style="margin-left: 10px; width: 100px; margin-bottom: 30px"></div>
    
        <div> Don't have an Account? <a href="register.php"> Register Here </a> </div>

        </form>
    </div>
</div>

</body>
</html>