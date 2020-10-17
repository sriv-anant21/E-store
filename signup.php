<?php
require("includes\common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<head>
<title>E-Store</title>
<link rel="stylesheet" href="codebeautify.css" >
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css"/ href="style.css" >
<style>
.bgimg{
background-image:url("Monsoon_Season_Blue_Rainy_HD_Background_Wallpaper.jpg");
}
a{
color:grey;
}
footer{
width:100%;
}
img{
width:50%;
}
button
{
width:20%
}
</style>
</head>
<body class="bgimg">
 <?php include 'includes/header.php'; ?>
<div class="container">
<div class="row">
<div class="col-xs-6">
<img src="cellphone_og.jpg"  style="width: 630px; padding-right:50px;">
</div>
<div class="col-xs-6">
<h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
               
</div>
</div>
</div>
</body>
</html>