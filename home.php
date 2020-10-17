<?php
$con = mysqli_connect("localhost", "root", "", "E-Store") or die($mysqli_error($con));
session_start();
?>
<!DOCTYPE html>
<head>
<title>E-Store</title>
<link rel="stylesheet" href="codebeautify.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css"/ href="style.css" >
<style>
p{
color:white;
}
.thumbnail{
     border:none !important;
     background: transparent !important;
     box-shadow:none !important;
  }
.bgimg{
background-image:url("Monsoon_Season_Blue_Rainy_HD_Background_Wallpaper.jpg");
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
   <?php
        
include 'includes/header.php';
  
include 'includes/check-if-added.php';
        ?>
        <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-4">
                <a href="products.php#cameras" ><div class="thumbnail">
                        <img src="I-Kall-Blue-K8-New-SDL184738096-1-703f6.jpg" alt="">
                        <div class="caption">
                            <center>
                            
                            <p><b>I Kall K8 New ( 16GB , 2 GB ) Blue  Rs.3,800/-</b></p>
<?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
</center>
                        </div>
                    </div> 
</a>
            </div>  

            <div class="col-sm-4">
                <a href="products.php#cameras" ><div class="thumbnail">
                        <img src="MI-Y3-64GB-4-GB-SDL529379016-1-9aff6.jpg" alt="">
                        <div class="caption">
                            <center>
                            
                            <p><b>MI Y3 ( 64GB , 4 GB ) Blue Rs.12,999/-</b></p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
                                
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
</center>
                        </div>
                    </div> 
                </a>
            </div>

      <div class="col-sm-4">
                <a href="products.php#cameras" ><div class="thumbnail">
                        <img src="Redmi-6-Pro-4GB-RAM-SDL491788673-1-79685.jpeg" alt="">
                        <div class="caption">
                            <center>
                            
                            <p><b>Redmi 6 Pro (4GB RAM) ( 64GB , 4 GB ) Gold  Rs.11,499/-</b></p>                          <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
</center>
                        </div>
                    </div> 
                </a>
            </div>
</div>
   <div class="row">
            <div class="col-sm-4">
                <a href="products.php#cameras" ><div class="thumbnail">
                        <img src="yuho-VAST-PLUS-32GB-4-SDL923253280-1-de9e1.jpeg" alt="">
                        <div class="caption">
                            <center>
                            
                            <p><b>yuho VAST PLUS ( 32GB , 4 GB ) Blue  Rs.8,499/-</b></p>                  <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </center>
                        </div>
                    </div> 
                </a>
            </div>          
<div class="col-sm-4">
                <a href="products.php#cameras" ><div class="thumbnail">
                        <img src="SAMSUNG-32GB-A20-32GB-3-SDL565356585-1-1eb3c.jpg" alt="">
                        <div class="caption">
                            <center>
                            
                            <p><b>SAMSUNG 32GB A20 ( 32GB , 3 GB ) Black  Rs.11,290/-</b></p>
         <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </center>
                        </div>
                    </div> 
                </a>
            </div>           
<div class="col-sm-4">
                <a href="products.php#cameras" ><div class="thumbnail">
                        <img src="InFocus-Black-Vision-3-RAM-SDL580000424-1-28011.jpg" alt="">
                        <div class="caption">
                            <center>
                            

                            <p><b>InFocus Vision 3 RAM 3GB ( 32GB , 3 GB ) Black  Rs.8,999/-</b></p>
<?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
  
                      
<?php
                            
} else {
                                
      

                          if (check_if_added_to_cart(6)) 
{ //This is same as if(check_if_added_to_cart != 0)
  

                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                           
 </center>
                        </div>
                    </div> 
                </a>
            </div>
</div>       
<br><br><br><br><br><br><br>
<footer>
<div class="container">
<div class="row">
            <div class="col-sm-3"><h4>Information</h4>
                <a href="products.php#cameras"  >About Us</a><br>
<a href="products.php#cameras" >Contact Us</a>
            </div>
<div class="col-sm-3"><h4>My Account</h4>
                <a href="products.php#cameras"  >Login</a><br>
<a href="products.php#cameras" >Sign Up</a>
            </div>
<div class="col-sm-3"><h4>Contact Us</h4>
                <a href="products.php#cameras"  >Contact:+91-123-000000</a><br>
            </div>
</div>
</div>
</body>
</html>
