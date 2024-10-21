<?php
$msg="";
$msg1="";
if ( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];

if ( isset($_REQUEST['msg1']) )
    $msg1 = $_REQUEST['msg1'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <style>
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
            margin: 2% auto 0px;
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
            height: 400px;
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
        <h1> Welcome to <br/> Daily Delights </h1>
    </div>
        <div class="sign_up">
            <div> 
                <form action="register_server.php" method="get">

                <div> <h1 style="font-family: Lucida Handwriting;"> Register </h1> </div>
                <div style="color: red"> <?php echo $msg; ?> </div>
                <div style="color: red"> <?php echo $msg1; ?> </div>

                <div> <input type="text" name="u_name" id="" class="border" placeholder="Full Name" required> </div> <br/>
                
                <div> <input type="text" name="u_email" id="" class="border" placeholder="E-mail" required> </div> <br/>
                
                <div> <input type="password" name="u_pwd" id="" class="border" placeholder="Password" required> </div> <br/>

                <div> <input type="password" name="u_final_pwd" id="" class="border" placeholder="Confirm Password" required> </div> <br/>

                <div style="text-align: center"> <input type="submit" value="Sign up" class="border" style="margin-bottom: 10px; width: 100px; margin-left: 10px;"> </div>

                <div> Already a member? <a href="index.php"> Login Here </a> </div>
                </form>

                
            </div>
        </div>


</body>
</html>