<?php
include("dbconnection.php");
?>
<?php
session_start();
if(!isset($_SESSION['islogin']))
{
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['email']=="")||($_REQUEST['pass']==""))
{
$msg='<div class="alert alert-warning">fill all the fields</div>';
}
else
{
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$sql="SELECT *FROM user WHERE email='".$email."' AND pass='".$pass."'";
$result=(mysqli_query($conn,$sql));
if(mysqli_num_rows($result)==1)    
{
$_SESSION['email']=$email;
$_SESSION['islogin']=true;
echo'<script>location.href="profile.php"</script>';    
}
else
{
$msg='<div class="alert alert-warning">invalid Email and password</div> ';    
}
}
}
}
else
{
echo'<script>location.href="profile.php"</script>';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-------------------Start Font Awesome--------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------End  Font Awesome---------------->
    <title>www.flying beast.com</title>
  </head>
  <body>
<div class="container">
<div class="row">
<div class="col-sm-4 offset-sm-4">
<h4 class="text-center mt-5">Flying Beast</h4>   
<h5 class="text-center">
<i class="fa fa-user text-center mt-5 ml-5">User Login</i>    
</h5>   
<form action="" method="post" class="shadow-lg p-4">
<div class="form-group">
<lable for="Email">Email</lable> 
<input type="text" name="email" class="form-control" placeholder="Write Your Email">   
<small class="font-italic">We'll Never Share Your Email With Anyone else</small>
</div>
<div class="form-group">
<lable for="Password">Password</lable> 
<input type="password" name="pass" class="form-control" placeholder="Write Your Password">  
<small class="font-italic">We'll Never Share Your Password With Anyone else</small> 
</div>
<input type="submit" class="btn btn-info" value="login" name="sub">
<?php
if(isset($msg))
{
echo $msg;    
}
?>
</form> 
<a href="index.php" class="btn btn-danger mt-5" style="margin-left:120px;">back To Home</a> 
</div>    
</div>    
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>