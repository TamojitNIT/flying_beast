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
$sql="SELECT *FROM query";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);       
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
<h3 class="text-center">Welcome <?php echo $email;?></h3> 
<ul class="nav flex-column mt-5">
<div class="sidebar-sticky">
<li class="nav-item "><a href="profile.php" class="nav-link bg-dark text-white" style="border-radius:10px;">Profile</a></li>
<li class="nav-item mt-2"><a href="upload_flight.php" class="nav-link bg-dark text-white" style="border-radius:10px;">upload_flight</a></li>
<li class="nav-item mt-2"><a href="query.php" class="nav-link bg-dark text-white" style="border-radius:10px;">Query's No: <div class="ml-5"><?php
echo $count;    
    ?></div></a></li>
</div>    
</ul>
<a href="logout.php" class="btn btn-info mt-3">logout</a>
<div class="jumbotron text-white mt-3" style="background-color:darkgrey;">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo quae, at officia sequi, illum a! Reprehenderit debitis repellat, ullam cum ut possimus ratione enim optio modi illum! Tenetur libero inventore repellendus sit obcaecati sed laborum magni, facilis nobis, voluptas quam doloribus culpa quas repudiandae officia eligendi adipisci asperiores cupiditate. Eveniet esse praesentium optio magni officia, corporis, repellendus temporibus harum voluptas doloribus asperiores cum numquam impedit omnis, in placeat eaque exercitationem tempora minima atque beatae. Reprehenderit accusamus neque iusto voluptatibus eveniet dolorum ducimus vitae incidunt placeat corporis laudantium omnis repudiandae voluptate molestias ipsum sequi, mollitia recusandae assumenda sint nihil dolor illum, id voluptatem aperiam consectetur! Commodi ex ipsum in, ab perspiciatis quae? Eum velit magni, placeat sapiente quia deserunt voluptas mollitia repellendus tempore obcaecati, sint rem vero temporibus, similique reprehenderit alias. Beatae earum ipsam unde soluta dolore harum quos hic molestiae doloribus atque iste, ab cum quaerat illo facere aspernatur voluptatem. Sunt quaerat illo, nobis asperiores ipsa. Laudantium expedita facilis, maxime quibusdam harum ut vitae amet ipsa voluptas. Eum commodi quas aut cumque iste 
</div>  
</div>
<div class="col-sm-8"  style="background-image: url('admin.png'); background-repeat:no-repeat;
background-position:center center;
background-size:cover;
height:120vh;
width:130vh;">  
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