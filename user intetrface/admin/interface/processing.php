

<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pg";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("failed to connect! ".mysqli_connect_error()  ) ;
}
	
	

$pgname = $_GET['pgname'];
		$email = $_GET['email'];
		$password = $_GET['password'];

//-----------------------------------------------------------------------------------
		 $querry ="SELECT * FROM `adminlogin` WHERE  email= ? and password = ? and pgname = ?";

		$st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$querry)  ){
			header( "Location: signup.php?error=stmt_failes" );
			
exit();
		}
		
		
		mysqli_stmt_bind_param($st,"sss",$email,$password,$pgname );
		mysqli_stmt_execute($st);
		
		$resultData = mysqli_stmt_get_result($st);
		if( $row=mysqli_fetch_assoc($resultData)){//<!--array of data fetched -->
	//user exists
	$id = $row['id'];
	$name = $row['pgname'];
	$email = $row['email'];
	$password=$row['password'];
		}



$_SESSION['id']=$id;
$_SESSION['pgname']=$name ;
$_SESSION['email']=$email ;
$_SESSION['password']=$password; 




?>

<html>
<head>
<title> SignUp </title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> Signup </title>
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
 background-image:url("https://cdn.hipwallpaper.com/m/56/10/d5qDRv.jpg");
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



<div id="box" > 

<br>
<br>
<br><br>


<h1> Enter PG details </h1>

<section  id="new" class="container">
<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="row m-3 py-5">

<div>
<p>upload photo-1 </p> 
<input type="file" name="image1" /><br><br>
</div>

<div>
<p>upload photo-2 </p> 
<input type="file" name="image2" /><br><br>
</div>

<div>
<p>upload photo-3 </p> 
<input type="file" name="image3" /><br><br>
</div>




<div>
<p>Price of each PG in (Rs)       
<input type="text" name="price" placeholder="price"></p>
</div>

<div>
<p>Describe about your PG     
<textarea name="text" cols="20" rows="4" placeholder="say someting..." > </textarea>
</p>
</div>


</div>


</div>
<center> <input type="submit"   name="submit" value="submit" /></center>

</form>

</section>


</body>

</html>