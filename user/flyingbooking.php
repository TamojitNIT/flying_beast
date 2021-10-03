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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-------------------Start Font Awesome--------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------End  Font Awesome---------------->
    

    <title>www.flying_beast.com</title>
  </head>
  <body>
<div class="container">
<div class="row">

<div class="col-sm-12 mt-3 mb-3">
<h2 class="text-center">Search Flight</h2>
<form action="" method="POST" class="shadow-lg p-4" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="Starting_Point">Starting_Point</label>
<input type="text" class="form-control" placeholder="Type the Starting Point Here"
name="start">    
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="Landing_point">Landing_Point</label>
<input type="text" class="form-control" placeholder="Write the Landing-Point Here"
name="end">   
</div>    
</div> 
<div class="col-sm-4">
<div class="form-group">
<label for="Date">Date</label>
<input type="date" class="form-control" name="date">    
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="Country">Country</label>
<input type="text" class="form-control" placeholder="Type the Country Here" name="country">    
</div>
</div>    
</div>
<input type="submit" class="btn btn-danger mt-1" value="Search" name="sub">
<a href="flyingbooking.php" class="btn btn-info mt-1">Refresh</a>
<a href="../profile.php" class="btn btn-success mt-1">Back To Profile</a>
<a href="confirm_your_book.php" class="btn btn-info"><i class="fa fa-paper-plane"></i>Search_Flight</a>
</form>    
</div>   
</div>   
</div>  
<?php
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['start']=="")||($_REQUEST['end']=="")||($_REQUEST['date']=="")||($_REQUEST['country']==""))
{
echo'<h2 class="text-center alert alert-warning">Fill All The Fields</h2>';
}
else
{
$start=$_REQUEST['start'];
$end=$_REQUEST['end'];
$date=$_REQUEST['date'];
$country=$_REQUEST['country'];
$sql="SELECT *FROM upload_flight WHERE start='".$start."' AND end='".$end."' AND date='".$date."' AND country='".$country."'";
$result=(mysqli_query($conn,$sql));
if(mysqli_num_rows($result)>0)    
{
echo'<h2 class="alert alert-success text-center">Flight Avilable</h2>';  
echo'<div class="container">';
echo'<div class="row">';    
while($row=mysqli_fetch_assoc($result))
{
echo'<div class="col-sm-4  mt-4">';    
echo'<div class="card text-center">';
echo'<div class="card-header bg-secondary text-white">RequestId: '.$row['slno'].'</div>';    
echo'<div class="card-body">Start:'.$row['start'].'</div>';
echo'<div class="card-body">End:'.$row['end'].'</div>';
echo'<div class="card-body">Flight_name:'.$row['name'].'</div>';    
echo'<div class="card-body">Date:'.$row['date'].'</div>';
echo'<div class="card-body">Country:'.$row['country'].'</div>';    
echo'<div class="card-footer">
<form action="" method="post">
<input type="hidden" name="slno" value='.$row['slno'].'> 
<input type="submit" class="btn btn-danger" value="Book" name="book">   
</form>';
echo'</div>';    
echo'</div>';
}   
echo'</div>';
echo'</div>';    
}
else
{
echo'<h2 class="alert alert-warning text-center">No Flight Avilable</h2>';
}
}
}
?>
<?php
if(isset($_REQUEST['book']))
{
$email=$email;
$slno=$_REQUEST['slno'];
$sql="SELECT *FROM upload_flight WHERE slno='".$slno."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$start=$row['start']; 
$end=$row['end'];
$name=$row['name'];
$date=$row['date'];
$country=$row['country'];
$approve='Not Yet Approve';  
$sql="INSERT INTO confirm_flight(email,start,end,name,date,country,approve) VALUES('$email','$start','$end','$name','$date','$country','$approve')";
if(mysqli_query($conn,$sql))
{
echo'<h2 class="text-center alert alert-success">Booked But Not Yet Approve</h2>';    
}
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