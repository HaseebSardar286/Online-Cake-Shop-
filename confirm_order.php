
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Confirm Order</title>
</head>
<style>
        body{
            font-family: calibri;
            margin : 0px;
            padding : 0px;
            background-size: cover;
            background-size: center;
            background-image: url("123.jpeg");
        }
        .Container
        {
            box-shadow: 0px 0px 1px 1px;
            background-color: #fff;
            margin-left: 4%;
            margin-right: 4%;
            height: 80vh;
            padding: 50px;
            margin-top: 40px;
        }
        .icon
        {
            width: 100px;
            height: 100px;
            background-color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin-left: 40%;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .order
        {
            width: 300px;
            height: 50px;
            font-size: 24px;
            color: white;
            background-color: orangered;
            font-family: calibri;
        }
        .innerContainer
        {
            text-align: center;
            box-shadow: 0px 0px 0px 0px;
            width: 500px;
            height: 400px;
            background-color: rgb(237, 243, 243);
            margin-left: 25%;
            padding: 50px;
            margin-top: 40px;
        }

        
</style>
<body>

    <div class="Container">
        <div class="innerContainer">
            <div> <h1>Your order have been recieved</h1></div>
            <div class="icon"><i class="fa fa-check" aria-hidden="true" style="font-size: 40px; color: white;"></i></div>

            <div> <h2> Thank you for your purchase !</h2></div>
            <div style="margin-top: 50px;">
                <a href="view_products.php"><input type='submit' value='CONTINUE SHOPPING' class='order'/></a>
            </div>

        </div>

    </div>

</body>
</html>