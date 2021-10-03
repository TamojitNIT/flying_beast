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
echo'<script>location.href="adminlogin.php"</script>';
}
?>


<?php
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['start']=="")||($_REQUEST['end']=="")||($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['date']=="")||($_REQUEST['country']=="")||($_REQUEST['phone']==""))
{
$msg='<div class="alert alert-warning text-center">Fill The Fields</div>';
}
else
{
$start=$_REQUEST['start'];
$end=$_REQUEST['end'];
$name=$_REQUEST['start'];
$email=$_REQUEST['email'];
$date=$_REQUEST['date'];
$country=$_REQUEST['country'];
$phone=$_REQUEST['phone'];
$sql="INSERT INTO upload_flight (start,end,name,email,date,country,phone) VALUES('$start','$end','$name','$email','$date','$country','$phone')";
if(mysqli_query($conn,$sql))
{
$msg='<div class="alert alert-success text-center">Successfully Uploaded</div>';    
}
else
{
$msg='<div class="alert alert-warning">Something Went Wrong</div>';
}
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

    <title>www.flight_beast.com</title>
  </head>
  <body>
<div class="container">
<div class="row">
<h2 class="text-center">Upload The Air Service</h2>
<div class="col-sm-9 mt-3 mb-3">
<form action="" method="POST" class="shadow-lg p-4" enctype="multipart/form-data">
<div class="form-group">
<label for="Starting_Point">Starting_Point</label>
<input type="text" class="form-control" placeholder="Type the Starting Point Here"
name="start">    
</div>
<div class="form-group">
<label for="Landing_point">Landing_Point</label>
<input type="text" class="form-control" placeholder="Write the Landing-Point Here"
name="end">   
</div>
<div class="form-group">
<label for="Name_Of_The_Airline">Name_Of_The_Airline</label>
<input type="text" class="form-control" placeholder="Type The Name_Of_The_Airline Here"
name="name">   
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="Email_of_Airline">Email_of_Airline</label>
<input type="text" class="form-control" placeholder="Type The Email Here"  name="email">   
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
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="Phone_of_the_Airline">Phone_of_the_Airline</label>
<input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="phone">   
</div>
</div>
</div>  
<input type="submit" class="btn btn-danger mt-1" value="Submit" name="sub">
<?php if(isset($msg)){echo $msg;}?>
<a href="confirm_flight.php" class="btn btn-info mt-1">Confirming_flight</a>
<a href="profile.php" class="btn btn-success mt-1">Back To Profile</a>
</form>    
</div>   
</div>   
</div>       
        
        
   <div class="container">
    <div class="row">
    
             <?php
$sql="SELECT *FROM upload_flight";
$result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)        
    {       
    while($row=mysqli_fetch_assoc($result)) 
    {
echo'<div class="col-sm-3">';    
echo'<div class="card text-center">';
echo'<div class="card-header bg-secondary text-white">Flightno: '.$row['slno'].'</div>';    
echo'<div class="card-body">Starting_Point:'.$row['start'].'</div>';
echo'<div class="card-body">Landing_Point:'.$row['end'].'</div>';
echo'<div class="card-body">Name_Of_The_Airline:'.$row['name'].'</div>';
echo'<div class="card-body">Email_of_Airline:'.$row['email'].'</div>';
echo'<div class="card-body">Date:'.$row['date'].'</div>';
echo'<div class="card-body">Country:'.$row['country'].'</div>';
echo'<div class="card-body">Phone_of_the_Airline:'.$row['phone'].'</div>';                        
echo'<div class="card-footer">
<form action="" method="post">
<input type="hidden" name="slno" value='.$row['slno'].'> 
<input type="submit" class="btn btn-danger" value="delete" name="delete">  
</form>';
echo'</div>';    
echo'</div>';    
echo'</div>';       
    } 
       
    } 
    ?>    
        
        
    </div>    
    </div>   
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
<?php
if(isset($_REQUEST['delete']))
{
$slno=$_REQUEST['slno'];    
$sql="DELETE FROM upload_flight WHERE slno='".$slno."'";    
if(mysqli_query($conn,$sql))
{
echo"data deleted succesfully";
echo'<script>location.href="upload_flight.php"</script>';    
}
}
?>

<?php
if(isset($_REQUEST['approve']))
{
$slno=$_REQUEST['slno'];
$approve='approve';    
$sql="UPDATE FROM flightt SET approve='$approve' WHERE slno='".$slno."'";
if(mysqli_query($conn,$sql))
{
echo"approved";
}
else
{
echo"ho6e na";
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