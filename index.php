<?php
include('dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>www.flying_beast.com</title>
    <link rel="stylesheet" href="style.css">
    <!-------------------Start Font Awesome--------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------End  Font Awesome---------------->
  </head>
  <body>
<div class="navbar navbar-expand-lg navbar-dark fixed-top pl-5">
<a href="index.php" class="navbar-brand">
<span class="navbar-brand"><img src="images/logo.png" style="height:100px; width:200px;" alt=""></span></a>
<button type="button" class="navbar-toggler" data-toggle="collapse" 
data-target="#myMenu">
<span class="navbar-toggler-icon"></span>
</button> 
<div class="collapse navbar-collapse" id="myMenu">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
<li class="nav-item"><a href="about.php" class="nav-link text-white">About</a></li>
<li class="nav-item"><a href="login.php" class="nav-link text-white">Services</a></li>
<li class="nav-item"><a href="registration.php" class="nav-link text-white">Registration</a></li>
<li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a></li>
<li class="nav-item"><a href="user/contact.php" class="nav-link text-white">Contact</a></li>
</ul> 
</div> 
</div>
<div class="container-fluid back_ground "> 
<div style="padding-top:250px; padding-left:10px;">
<a href="registration.php" class="btn btn-danger">Registration</a>
<a href="login.php" class="btn btn-info">Login</a>      
</div>          
</div>
<div class="footer hide" style="height:auto; background-color:azure;">
<div class="container">
<div class="row text-center">
<div class="col-sm-3">
<h5 class="text-dark"> <i class="fa fa-keyboard-o mr-3 pt-2"></i> Online Booking</h5>
</div> 
<div class="col-sm-3">
<h5 class="text-dark"><i class="fa fa-truck mr-2 mr-3 pt-2"></i>Verfied</h5> 
</div> 
<div class="col-sm-3">
<h5 class="text-dark"><i class="fa fa-dollar mr-3  pt-2"></i>Low Cost</h5> 
</div> 
<div class="col-sm-3">
<h5 class="text-dark"><i class="fa fa-user mr-3  pt-2"></i>Expert Pilots</h5> 
</div>    
</div>    
</div> 
</div>
<div class="container"> 
<div class="jumbotron" style="background-color: lightblue; ">
<h3 class="text-center">About Us</h3>
<p class="text-justify">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quam amet dolorem consectetur veritatis explicabo ut laudantium, et eveniet nisi nulla debitis vitae praesentium atque aspernatur voluptatibus! Fugit consectetur, repellat? Veniam autem inventore provident obcaecati, doloribus, odit nobis debitis repellendus omnis eaque porro, voluptatem ipsam quia quos consequatur error modi molestiae iste laudantium. Maxime earum quae accusamus eveniet dignissimos, ratione quas aperiam impedit sit fugit repellat in tempora officia recusandae ex est animi nostrum reiciendis voluptatibus qui nemo iusto quisquam dicta blanditiis. Labore enim aliquid debitis animi atque quibusdam at a, necessitatibus amet, ad corrupti iure vitae, incidunt repellendus beatae autem. Impedit ratione nulla voluptatem saepe ex, nesciunt odio! Reprehenderit quod, corporis, quia natus nihil sit aspernatur molestias ipsam voluptatum eius, amet magni ipsum, quae omnis nobis quo possimus inventore doloremque odit ab similique. Maiores quis numquam nemo recusandae quas deleniti dignissimos pariatur. Minus consequuntur et alias voluptatem quasi est perferendis repudiandae hic accusamus necessitatibus quia laudantium quae sunt dicta iusto dolore, velit illo ducimus impedit quod sapiente consequatur vitae. Veniam sapiente inventore nam minus enim, perferendis animi ex, nesciunt ipsam quis fugiat dolore rerum ad ipsa commodi facere aperiam a laudantium distinctio est libero, eligendi deleniti recusandae. Doloribus, excepturi!    
</p>    
</div>   
</div>      
<?php
include('registration.php');      
?>

<div class="container-fluid mt-5" style="background-color: lightblue; ">
<div class="row">
<div class="col-sm-4 offset-sm-1 mt-5">
<h3 class="text-center">Contact Us</h3>
<form action="" method="POST" class="shadow-lg p-4">
<div class="form-group">
<i class="fa fa-user"></i>
<label for="Name">Name</label>  
<input type="text" class="form-control" placeholder="Type Your Name Here" name="name">  
</div>
<div class="form-group">
<i class="fa fa-keyboard-o"></i>
<label for="Email">Email</label>  
<input type="text" class="form-control" placeholder="Type Your Email Here" name="email">  
</div>
<div class="form-group">
<i class="fa fa-keyboard-o"></i>
<label for="Tell Us">Tell Us</label>  
<textarea class="form-control" style="height:120px;" placeholder="Tell Us What You Want" name="tellus"></textarea> 
</div>
<input type="submit" class="btn btn-primary" value="Send" name="sub">
</form>   
</div>
<div class="col-sm-4 offset-sm-2">
<i class="fa fa-instagram" style="font-size:250px; padding-left:120px; padding-top:100px;"></i>  
<h1 class="text-center">Find Us On</h1>
</div>
</div>
</div>
<div class="footer bg-dark text-center " style="height:auto;">
<small class="text-white" >Copyright Flying_beast &copy;||
Developed By Tamojit Chatterjee&nbsp;&nbsp;<a href="admin/adminlogin.php" class="">Admin Login</a></small>    
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>