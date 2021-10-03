<?php
include('../dbconnection.php');
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
if(isset($_REQUEST['send']))
{
if(($_REQUEST['ans']=="")||($_REQUEST['email']==""))
{
$msg='<h2><div class="alert alert-warning text-center">fill all the fields</div></h2>';
echo $msg;    
}
else
{
$ans=$_REQUEST['ans'];
$email=$_REQUEST['email'];
$sql="INSERT INTO ans(ans,email) VALUES('$ans','$email')";
if(mysqli_query($conn,$sql))
{
$msg='<h2><div class="alert alert-success text-center">Send</div></h2>';
echo $msg;
}
}
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
<title>Query</title>
</head>
<body>
<a href="profile.php" class="btn btn-info">Back to home</a>
<?php
$sql="SELECT *FROM query";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo'<div class="container-fluid" style="height:auto;">
<h2 class="text-center pt-4"><span>QUREY</span></h2>';  
echo'<div class="row">';
while($row=mysqli_fetch_assoc($result))
{
echo'<div class="col-lg-3 col-md-6 mt-2 mb-3">';
echo'<div class="card text-center">';
echo'<div class="card-header bg-secondary text-white">Email_Id: '.$row['email'].'</div>';
echo'<div class="card-body">';
echo'<div class="card-text">'.$row['query'].'</div>';
echo'<form action="" method="post" class="mt-3">
<div class="form-group">
<textarea class="form-control" style="height:120px;" placeholder="Write Your Responce" name="ans"></textarea>     
</div>
<div class="form-group mt-2">
<input type="text" placeholder="Write the email id" name="email" class="form-control">
</div>
<input type="submit" value="send" class="btn btn-info mt-2" name="send">
<input type="hidden" name="slno" value='.$row['slno'].'> 
<input type="submit" class="btn btn-danger" value="delete" name="delete">   
</form>';
echo'</div>';    
echo'</div>';    
echo'</div>';
}
echo'</div>';
echo'</div>';
}
?> 
<?php
if(isset($_REQUEST['delete']))
{
$slno=$_REQUEST['slno'];
$sql="DELETE FROM query WHERE slno='".$slno."'";
if(mysqli_query($conn,$sql))
{
echo"data deleted successfully";
echo'<script>location.href="query.php"</query>';    
}
}
?>




<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>