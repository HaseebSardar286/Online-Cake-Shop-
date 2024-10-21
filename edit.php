<?php
// edit.php
session_start();
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Your Item</title>
    <style>
        body
        {
            margin : 0px;
            padding : 0px;
            font-family: calibri;
            box-sizing: border-box;
            background-image: url("123.jpeg");
            background-size: cover;
            background-size: center;            
        }
        .signup
        {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 5% auto 0px;
            width: 350px;
            height: 500px;
        }
        .border
        {
            border-radius: 20px;
            height: 30px;
            width: 300px;
            margin-bottom: 15px;
        }

    </style>
</head>
<body>
<div class="signup">
    <div>
        <fieldset style="font-weight: bold; border-radius: 20px;">
        <legend> Add New Product </legend>
        <form action="update.php" method="post" enctype="multipart/form-data">
           
            <div style="float: left; font-weight: bold"><label for="">Product name:</label></div>
            <input type="text" name="p_name" class="border"  value="<?php echo $item[1]; ?>"required/> <br/>
            
            <div style="float: left; font-weight: bold"><label for="">Type:</label></div>
            <div><select name="p_type" class="border" <?php echo $item[2]; ?>required>
                <option value="">  </option>
                <option value="Wedding Cakes"> Wedding Cakes </option>
                <option value="Birthday Cakes"> Birthday Cakes </option>
                <option value="Strawberry Cakes"> Strawberry Cakes </option>
                <option value="Valentines Day Cakes"> Valentines Day Cakes </option>
                <option value="Christmas Cakes"> Christmas Cakes </option>
                <option value="Chocolate Cakes"> Chocolate Cakes </option>
                <option value="Vanilla Cakes"> Vanilla Cakes </option>
                <option value="Multi-flavour Cakes"> Multi-flavour Cakes </option>
            </select> <br/></div>

           

            <div style="float: left; font-weight: bold"><label for="">Price:</label></div>
            <div> <input type="number" name="p_price" class="border" <?php echo $item[3]; ?> required/> <br/></div>
    

            <div style="float: left; margin-bottom: 10px; font-weight: bold"><label for="">File:</label></div>
            <div style><input type="file" name="p_img" <?php echo $item[4]; ?>/> <br/></div>
            
            <input type="hidden" name="id" value="<?php echo $item[0]; ?>" />

            <input type="submit" style="margin-top: 15px"/>

            </fieldset>
        </form> 
        
    </div>
    </div>    
   
</body>
</html>