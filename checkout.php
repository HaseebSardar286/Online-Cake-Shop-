<?php
// checkout.php

include('product_class.php');

$id = $_REQUEST['id'];

$p = new product;
$p->connect();
$data = $p->getProductById($id);

$item = $data->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Checkout</title>
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
            background-color: rgb(237, 243, 243);
            margin-left: 4%;
            margin-right: 4%;
            height: 105vh;
            padding: 50px;
            margin-top: 40px;
        }
        .coupon{
            background-color: rgb(147, 195, 250); 
            height: 35px; 
            padding-top: 17px; 
            padding-left: 30px;
        }
        .billing
        {
            margin-left: 30px;
            margin-top: 10px;
        }
        .heading
        {
            text-align: center; 
            font-family: Lucida Handwriting; 
            background-color: #b3f0f2; 
            height: 80px; 
            padding-top: 2px;
        }
        .margin{
            margin-bottom: 20px;
            margin-top: 10px;
        }
        .product
        {
          width: 500px;
        }
        .order
        {
            width: 200px;
            height: 40px;
            font-size: 20px;
            color: white;
            background-color: black;
        }
        .placeorder
        {
            margin-right: 15px;
            margin-top: 20px;
            float: left;
            margin-left: 170px;
        }
        a
        {
            text-decoration: none;
            color: green;
        }
        a:hover
        {
            color:blue;
        }



    </style>
    
</head>
<body>
<div class="heading"><h1> Daily Delights </h1></div>

<div class="Container">
    <div><h1> Checkout </h1></div>

    <div class="billing">
        <div class="coupon">Have a coupon?<a href="" style="padding-left: 10px;"> Click here to enter your code</a>
        </div>
        <div style="display: flex; margin-top: 20px; ">
            <div>
                <form action="checkout_server.php" method="get">
                
                <div><h2> Billing Details </h2></div>
                <hr/>
                <div style="display: flex; margin-top: 20px;">
                    <div>
                        <div>First Name:<label style="color: red">*</label></div>
                        <div><input type="text" name="f_name" style="width: 200px; height: 24px" required></div>
                    </div>
                    <div style=" margin-bottom: 20px; margin-left: 30px">
                        <div>Last Name:<label style="color: red">*</label></div>
                        <div><input type="text" name="l_name" style="width: 200px; height: 24px" required></div>
                    </div>
                </div>
                    <div>Email:<label style="color: red">*</label></div>
                        <div class="margin"><input type="email" name="email" style="width: 440px; height: 25px" required></div>
    
                    <div>Country/Region:<label style="color: red">*</label></div>
                        <div class="margin"><select name="country" style="width: 447px; height: 33px" required>
                            <option value="">  </option>
                            <option value="Pakistan"> Pakistan </option>
                            <option value="Punjab"> Punjab </option>
                            <option value="Sindh"> Sindh </option>
                            <option value="Balochistan"> Balochistan </option>
                            <option value="Khyber Pakhtun Khwah"> Khyber Pakhtun Khwah </option>
                            </select><br/>
                        </div>
                        <div>City:<label style="color: red">*</label></div>
                        <div class="margin"><select name="city" style="width: 447px; height: 33px" required>
                            <option value="">  </option>
                            <option value="Lahore"> Lahore </option>
                            <option value="Islamabad"> Islamabad </option>
                            <option value="Karachi"> Karachi </option>
                            <option value="Rawalpindi"> Rawalpindi </option>
                            <option value="Okara"> Okara </option>
                            <option value="Lodhran"> Lodhran </option>
                            <option value="Sheikhupura"> Sheikhupura </option>
                            <option value="Quetta"> Quetta </option>
                            <option value="Kashmir"> Kashmir </option>
                            <option value="Toba Tek Singh"> Toba Tek Singh </option>
                            <option value="Murree"> Murree </option>
                            <option value="Multan"> Multan </option>
                            <option value="Silakot"> Silakot </option>
                            <option value="Kasur"> Kasur </option>
                            <option value="Jehlum"> Jehlum </option>
                            <option value="Faisalabad"> Faisalabad </option></select><br/>
                        </div>
        
                        <div style="margin-bottom: 10px;">Street Address:<label style="color: red">*</label></div>
                        <div style="margin-bottom: 20px;"><input type="text" name="street" placeholder="House Number and Street Name" style="width: 440px; height: 25px;" required></div>
                        <div><input type="text" name="suit" placeholder="Apartment, Suit, Unit, etc. (Optional)" style="width: 440px; height: 25px" ></div>
                </div>
                
                <hr/>
            <div class="product">
                <div style="margin-bottom: 20px"><h2> Order Review </h2></div>
                <hr/>
                <div style="display: flex">
                    <div> <?php echo '<img width=140px height=110px src=' . $item[4] .' />'; ?> </div>
                    <div style="padding-top: 40px; padding-left: 5px"> <?php echo $item[1]; ?> </div>
                    <div style="padding-top: 40px; margin-left: 140px;"> <?php echo $item[3]; echo '/-'; ?> </div>
                </div>
                
                <hr/>

                <div style="float: left; margin-right: 385px;">Sub-total</div>
                <div style="font-weight: bold"><?php echo $item[3]; echo '/-'; ?></div>

                <hr/>
                
                <div style="float: left; margin-right: 370px; font-weight: bold">Order Total</div>
                <div style="font-weight: bold"><?php echo $item[3]; echo '/-'; ?></div>

                <div style="margin-bottom: 20px; margin-top: 40px"><h2> Payment Method </h2></div>
                <hr/>
                <div style="font-weight: bold; margin-top: 20px"><input type="radio" name="payment"> <label> Cash On Delivery </label></div>
                <div style="font-weight: bold; margin-top: 10px"><input type="radio" name="payment"> <label style="margin-right: 85px"> PayPal </label><i class="fa fa-paypal" aria-hidden="true"></i></div>
                <div style="font-weight: bold; margin-top: 10px"><input type="Radio" name="payment"> <label style="margin-right: 30px"> Bank Payment </label><i class="fa fa-cc-visa" aria-hidden="true"></i></div>

                <div class="placeorder"><input type='submit' value='Place Order' class='order'/></a></div>               

                </form>
            </div>
        </div>

    </div>
</div>
    
</div>
</body>
</html>

