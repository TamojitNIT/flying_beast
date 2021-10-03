<?php
include('../dbconnection.php');
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
if(isset($_REQUEST['send']))
{
if(($_REQUEST['email']=="")||($_REQUEST['query']==""))
{
$msg='<div class="alert alert-warning text-center">Please Fill Your Query</div>';
}
else
{
$email=$_REQUEST['email'];
$query=$_REQUEST['query'];
$sql="SELECT *FROM user WHERE email='".$email."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)    
{ 
$sql="INSERT INTO query (email,query) VALUES('$email','$query')";
if(mysqli_query($conn,$sql))
{
$msg='<div class="alert alert-success">SEND</div>';
}
}
else
{
$msg='<div class="alert alert-warning">This is only for Registered public</div>';
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
  <!-------------------Start Font Awesome--------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------End  Font Awesome---------------->
    <title>.</title>
  </head>
  <body>
   <div class="container-fluid">
   <div class="row">
   <div class="col-sm-5 offset-sm-1">
    <form action="" method="post">
    <h3><div class="text-center">We Will Try Our Best To Anwser Your</div></h3>
    <h5 class="text-center">
<i class="fa fa-book">Query</i>    
</h5>
   <div class="form-group">
    <lable for="Email">Email</lable>
    <input type="text" placeholder="Write Your Email" name="email" class="form-control">   
   </div>
    <div class="form-group mt-3">
    <textarea type="text" style="height:100px;" placeholder="Tell Us About your Query" name="query" class="form-control"></textarea>    
    </div>
    <input type="submit" value="send" class="btn btn-info mt-5" name="send">
    <a href="../profile.php" class="btn btn-danger mt-5">back to Profile</a>
    <?php  
        if(isset($msg))
    {
echo $msg;
    }    
        ?>
    </form>
    <div class="col-sm-6" >
    </div>  
    </div>
    </div>
    <div class="row mt-5">
      <h2 class="text-center">Our Ans</h2>
    <?php
$sql="SELECT *FROM ans WHERE email='".$email."'";
$res=mysqli_query($conn,$sql);          
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
echo'<div class="col-sm-4 mt-4">';    
echo'<div class="card text-center">';
echo'<div class="card-body">';
echo'<div class="card-text">'.$row['ans'].'</div>';
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
}       
 ?>
</div>     
</div>  
<?php
if(isset($_REQUEST['delete']))
{
$slno=$_REQUEST['slno'];
$sql="DELETE FROM ans WHERE slno='".$slno."'";
if(mysqli_query($conn,$sql))
{
echo"ans deleted";
echo'<script>location.href="contact.php"</script>';    
}
}
      ?>

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