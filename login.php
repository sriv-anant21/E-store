<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<head>
<title>E-Store</title>
<link rel="stylesheet" href="codebeautify.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css" >
<style>
.bgimg{
background-image:url("login-page-background-images-hd-4.jpg");
}
a{
color:grey;
}
footer{
width:100%;
}
</style>
</head>    
<body class="bgimg">
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid col-md-offset-3" >
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br>
<footer>
<div class="container">
<div class="row">
            <div class="col-sm-3"><h4>Information</h4>
                <a href="About.php"  >About Us</a><br>
<a href="about.php" >Contact Us</a>
            </div>

<div class="col-sm-3"><h4>My Account</h4>
                <a href="login.php"  >Login</a><br>
<a href="signup.php" >Sign Up</a>
            </div>
<div class="col-sm-3"><h4>Contact Us</h4>
                <a href="#"  >Contact:+91-123-000000</a><br>
            </div>
</div>
</div>
</body>
</html>