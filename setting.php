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
background-image:url("photo-1527352675495-d54e8f102689.jpg");
}
.text{
color:white;
}
a{
color:grey;
}
button{
width:5%;
}
</style>
</head>
<body class="bgimg">
<nav>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
  
<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
</nav><br><br><br><br><br>                   
<center>
        <form class="form-inline">
            <h4 class="text">Change Password</h4><br>
                <div class="form-group"><input type="password" value"password" placeholder="old password" class="form-control"></div><br><br>
                <div class="form-group"><input type="password" value"password" placeholder="new password" class="form-control"></div><br><br>
                <div class="form-group"><input type="password" value"password" placeholder="Re-type new password" class="form-control"></div><br><br>
        </form>
        <button class="btn btn-info" type="change">Change </button>
    </center>
    </div>
</body><br><br><br><br><br><br><br>

</html>
