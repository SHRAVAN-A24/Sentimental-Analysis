<?php
session_start();

	include("connection.php");
	include("functions.php");

$b=0;

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> LogIn </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style>
#he1{
	color:red;
}
#hel:hover{
	color:blue;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
}
body {
	font-family: 'Poppins',sans-serif;
}
h1 {
	font-size:2.5rem;
	font-weight:700;
}
h2 {
	font-size:1.8rem;
	font-weight:600;
	
}
h3 {
	font-size:1.4rem;
	font-weight:800;
	color:#ce93d8;
}
h4 {
	font-size:1.1rem;
font-weight:600;
}
h5 {
	font-size:1.0rem;
	font-weight:400;
	color:#1d1d1d;
}
h6 {
	color:#D8D8D8
}

button {
	font-size0.8rem;
	font-weight:700;
	outline:none;
	border:none;
	background-color:#1d1d1d;
	color:aliceblue;
	padding:13px 30px;
	cursor:pointer;
	text-transform:uppercase;
	transition: 0.3s ease;

}
button:hover {
		background-color:#3a3833;
}

.navbar{
	
	font-size:16px;
	top:0;
	left:0;
}
@media only screen and (max-width:991px) {
	body>nav>section>div>button:hover,
	body>nav>section>div>button:focus {
		background-color:#fb774b;
	}
}
	
	
.navbar-light .navbar-nav .nav-link  {
padding: 0 20px;
color:black;
transition: 0.3s ease;

}


.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active,
.navbar i:hover,.navbar.active   {
color:blue;
}

.navbar {
	font-size:1.2rem;
	padding: 0 7px;
	cursor:pointer;
	font-weight:500;
	transition:0.3s ease;
	
}


 body {
 //background-image:url("https://cdn.hipwallpaper.com/m/56/10/d5qDRv.jpg");
   background-color: #d9ffb3; /* Green */

 color:coral;
width:100%;
height:100px;
background-size:cover;
background-position:top  center;
flex-direction: column;
justify-content:center;
align-items: flex-center;
}

 

img .one #new {
	width:100%;
	height:100%;
	background-position:center center;
	background-repeat:no-repeat;
	background-size:cover;
	position:relative;
}



#new .one .details{
	
	position:absolute;
	width:100%;
	height:100%;
	top:0;
	height:0;
	transition:0.3s ease;
}

 .one:hover{
	cursor:pointer;
	background-color:#d1c4e9;
	transform:translateY(-70px);
		transition:0.3s ease;

}
</style>


</head>

<body>
<style type="text/css">

#text {
	height:25px;
	border-radius:5px;
	padding:4px;
	border:solid thin #aaa;
	width:100%;
}
#button {
	padding:10px;
	width:100px;
	color:white;
	background-color:lightblue;
	border:none;
}
#box{
	background-color:grey;
	margin:auto;
	width:300px;
	padding:20px;
}

</style>

<?php error_reporting(0);
 ?>


<!-- NAVIGATION-->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 ">
 

	  
  <a class="nav-link" href="../../../index.php">Back</a>   
	  



    </div>
  </div>
</nav>
</nav>
<!----------------------------------------------------------------------------------------- -->

<div id="box" > 
<form method="post" >
<div style=" font-size:20px;margin:10px;color:white; "  > Login </div>
<br><br>
<?php

if( isset( $_GET['error']) ){
	if($_GET['error'] === "empty_input"){
	echo "<p>forgot to fill all fields </p>";
	}
}

?>
<br>
<br>
<input type="text" name="user_name" placeholder="Email....">
<br>
<br>
<input type="password" name="password" placeholder="password....">
<br>
<br>

<input id="button"  name="log" type="submit" value="Login"> 

<br>
<br>
<button > <a href="signup.php"> Click to Signup </a></button>

<?php
$username = $_POST["user_name"];
$password = $_POST["password"];

if( emptyInputLogin($username ,$password) !==false  )
		{
			echo "username and password empty";
		}else{
			
 $b= loginUser($con,$username ,$password);

		}


?>
<?php 
if($b==1)
{
echo "<script>window.open('../interface/index.php','_self')</script>";
$b=0;
die();

}
?>
</form>
</div>







</body>
</html>