<?php
include("../dbconnection.php");
?>
<?php
session_start();
if(isset($_SESSION['islogin']))
{
$email=$_SESSION['email'];
}
else
{
echo'<script>location.href="../login.php"</script>';       
}
?>
<?php
if(isset($_REQUEST['delete']))
{
$slno=$_REQUEST['slno'];
$sql="DELETE FROM confirm_flight WHERE slno='".$slno."'";
if(mysqli_query($conn,$sql))
{
echo'<h2 class="alert alert-success text-center">Delete "'.$slno.'"</h2>';
}
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <a href="flyingbooking.php" class="btn btn-danger">Back To flight booking</a>
    <a href="confirm_your_book.php" class="btn btn-success">Refresh</a>
    <?php
$sql="SELECT *FROM confirm_flight WHERE email='".$email."'";
$res=mysqli_query($conn,$sql);          
if(mysqli_num_rows($res)>0)
{
echo'<div class="container-fluid" style="height:auto;">
<h2 class="text-center pt-4"><span>All Flight Request</span></h2>';  
echo'<div class="row">';    
while($row=mysqli_fetch_assoc($res))
{
echo'<div class="col-sm-4 mt-4">';    
echo'<div class="card text-center">';
echo'<div class="card-body">';
echo'<div class="card-text">'.$row['start'].'</div>';
echo'<div class="card-text">'.$row['end'].'</div>';
echo'<div class="card-text">'.$row['name'].'</div>';
echo'<div class="card-text">'.$row['date'].'</div>';
echo'<div class="card-text">'.$row['country'].'</div>';
echo'<div class="card-text">'.$row['approve'].'</div>'; 
echo'<div class="card-footer">
<form action="" method="post">
<input type="hidden" name="slno" value='.$row['slno'].'> 
<input type="submit" class="btn btn-danger" value="delete" name="delete">   
</form>';
echo'</div>';    
echo'</div>';    
echo'</div>';    
echo'</div>';    
}
echo'</div>';
echo'</div>';    
}       
 ?>
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