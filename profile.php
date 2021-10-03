<?php
include("dbconnection.php");
?>
<?php
session_start();
if(isset($_SESSION['islogin']))
{
$email=$_SESSION['email'];
}
else
{
echo'<script>location.href="login.php"</script>';       
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
<link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
<h3 class="text-center">Welcome <?php echo $email;?></h3> 
<ul class="nav flex-column mt-5">
<div class="sidebar-sticky">
<li class="nav-item"><a href="profile.php" class="nav-link bg-dark text-white" style="border-radius:10px; margin-right:100px;" >
<i class="fa fa-user mr-2"></i>Profile</a></li> 
<li class="nav-item mt-2"><a href="user/flyingbooking.php" class="nav-link bg-dark text-white" style="border-radius:10px; margin-right:100px;"><i class="fa fa-paper-plane"></i>Search_Flight</a></li> 
 <li class="nav-item mt-2"><a href="user/contact.php" class="nav-link bg-dark text-white" style="border-radius:10px; margin-right:100px;"><i class="fa fa-book"></i>Query</a></li>  
</div>
</ul> 
<div class="jumbotron text-white mt-3" style="background-color:darkgrey;">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat corporis, odit, quas quaerat vitae itaque, facere impedit, ea id ab reiciendis labore sapiente. Architecto vel explicabo eos ipsa ratione rerum, minus iusto aperiam perspiciatis possimus quo non nam velit voluptatem iure quisquam dolorum, quia! Deleniti rerum, non beatae sequi at quis, voluptatibus saepe harum, pariatur mollitia aut possimus quam illo error architecto neque, dolores explicabo velit? Maiores quas, voluptates velit soluta veniam dignissimos provident, minus quia quidem blanditiis, laborum minima aspernatur sint vitae a mollitia repellat dolor accusamus harum, numquam enim! Doloremque ipsa error laborum quo, adipisci assumenda dolorem nesciunt obcaecati laboriosam, suscipit velit, dicta accusantium reprehenderit soluta praesentium eos magni cum mollitia? Illo neque saepe adipisci vitae id, hic aperiam mollitia iusto et laboriosam modi ipsam harum error dolore praesentium natus cumque ea repellendus dolorem eveniet veritatis temporibus sit?  
</div>
<a href="logout.php" class="btn btn-info mt-3">logout</a>  
</div>
<div class="col-sm-8"  style="background-image: url('images/man.png'); background-repeat:no-repeat;
background-position:center center;
background-size:cover;
height:100vh;
width:100vh;">  
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