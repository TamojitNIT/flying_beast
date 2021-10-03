<?php
include('dbconnection.php');
?>
<?php
if(isset($_REQUEST['sub']))
{
if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['pass']=="")||($_REQUEST['conpass']=="")||($_REQUEST['city']=="")||empty($_REQUEST['gender'])||empty($_FILES['image']))
{
$msg='<div class="alert alert-warning text-center">fill all the fields</div>';
}
else
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$conpass=$_REQUEST['conpass'];
$city=$_REQUEST['city'];
$gender=$_REQUEST['gender'];
$image=$_FILES['image'];
//echo"<pre>";
//print_r($iamge);    
//echo"</pre>";
$sql="SELECT email FROM user WHERE email='".$email."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{
$msg='<div class="alert alert-warning">Email id already Registered</div>';
}
else   
{
if($pass==$conpass) 
{    
$iname=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp_name,"userid/".$iname);    
$sql="INSERT INTO user(name,email,pass,conpass,city,gender,image) VALUES('$name','$email','$pass','$conpass','$city','$gender','$iname')";
if(mysqli_query($conn,$sql))
{
$msg='<div class="alert alert-success text-center">Registration Successful</div>';
}
}
else    
{
$msg='<div class="alert alert-warning">Check Password Confirm password</div>'; 
}
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

<title>www.flying beast.com</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-5 offset-sm-1">
<h2 class="text-center">Registration Form</h2>
<form action="" method="POST"  enctype="multipart/form-data" class="shadow-lg p-4">
<div class="form-group">
<i class="fa fa-user text-primary"></i>
<label for="Name">Name</label>  
<input type="text" class="form-control" placeholder="Type Your Name Here"
name="name">  
</div>
<div class="form-group">
<i class="fa fa-keyboard-o text-primary"></i>
<label for="Email">Email</label>  
<input type="text" class="form-control" placeholder="Type Your Email Here"
name="email">  
<small class="font-italic">We'll Never Share Your Email With Anyone else</small> 
</div>
<div class="form-group">
<i class="fa fa-key text-primary"></i>
<label for="Password">Password</label>  
<input type="password" class="form-control" placeholder="Type Your Password Here"
name="pass">
<small class="font-italic">We'll Never Share Your Password With Anyone else</small>   
</div>
<div class="form-group">
<i class="fa fa-key text-primary"></i>
<label for="Confirm Password">Confirm Password</label>  
<input type="password" class="form-control" placeholder="Type Your Password Again"
name="conpass">  
<small class="font-italic">We'll Never Share Your Password With Anyone else</small> 
</div>
<div class="form-group">
<lable for="City">City</lable>
<select name="city" id="">
<option value="">...</option>
<option value="Durgapur">Durgapur</option> 
 <option value="Kolkata">Kolkata</option> 
 <option value="Pune">Pune</option> 
 <option value="Delhi">Delhi</option>   
</select>    
</div>
<div class="form-group">
<i class="fa fa-user text-primary"></i>
<label for="Gender">Gender</label><br>
Male<input type="radio" name="gender" class="inline ml-2" value="Male">    
Female<input type="radio" name="gender" class="inline ml-2" value="Female">    
</div>
<div class="form-group">
<label for="Profile Image">Profile Image</label><br>
<input type="file" name="image" required>   
</div><br>
<input type="submit" class="btn btn-success btn btn-block" value="Register" name="sub"><br>
<small class="font-italic">Make Sure you Accept Our Terms And Cookie Policies</small> 
<?php if(isset($msg)){echo $msg;}?>
</form>
    </div>  
<div class="col-sm-4 offset-sm-1">
<img src="images/pilot.jpg" style="height:400px; width:350px; padding-top:50px;" alt=""> 
<h1 class="text-center text-dark">Flying Beast</h1>   
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