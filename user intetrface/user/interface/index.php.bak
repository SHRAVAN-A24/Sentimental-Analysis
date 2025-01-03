
<?php
	
include("functions.php");

session_start();


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pg";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect! ".mysqli_connect_error()  ) ;
}

		$id = $_SESSION["id"];
		$name = $_SESSION["name"];
		$email = $_SESSION["email"];
		$uname =  $_SESSION["uname"];
		$password = $_SESSION["password"];
		
		$adress = $_SESSION['adress'];
		$phone = $_SESSION["phone"];

	
?>

<html>
<head>
<title> <?php echo " welcome $uname ";?> </title>
<style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: #F72626;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
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
	background-color:#F72626;
	color:aliceblue;
	padding:13px 30px;
	cursor:pointer;
	text-transform:uppercase;
	transition: 0.3s ease;

}
button:hover {
		background-color:#3a3833;
		border-radius:5%;
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
// background-image:url("https://media.istockphoto.com/photos/abstract-blue-background-with-grunge-texture-and-white-geometric-and-picture-id1293539824?b=1&k=20&m=1293539824&s=170667a&w=0&h=GnQ_AHJ4ob3B0K_nc-l-Ihiff9gWqnNkfLpWYpz0M9U=");
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



.row{
	
	margin:80px;
	display:grid;
	grid-template-columns:repeat(3,1fr);
	grid-gap:30px;
	align-items:center;
	
	
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;

}
.icon{
    width: 200px;
    float: left;
    height: 70px;

}
.logo{
    color: brown;
    font-size: 35px;
    font-family: Arial;
    padding-left: 10px;
    float: left;
    padding-top: 5px;


}
.menu{
    float: right;

}
.btn1{
		font-size0.8rem;
	font-weight:700;
	outline:none;
	border:none;
	background-color:#FFFFFF;
	color:aliceblue;
	padding:13px 30px;
	cursor:pointer;
	text-transform:uppercase;
	transition: 0.3s ease;
}
.btn1:hover {
	
		background-color:#96F1FC;
		border-radius:5%;
	
}

img:hover{
	border-radius:10%;
}
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0 4px;
}

.column{
  margin-top: 8px;
  vertical-align: middle;
  margin-left:100px;
  
}

.dum1{
	border-radius=50%;
	width:30%;
}
</style>


</head>

<body>

<!-- NAVIGATION-->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 ">
  <div class="container">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      

	  <?php


	 
	  if( isset($_SESSION["id"]) ){
 echo  ' <br>
 
 <center>    <h3>PG\'S AVAILABLE</h3>  </center>
 <br>
 	  <center> <hr style="text-align:left;margin-left:0"> </center>

 ';
	  }
	 
	 echo '                      ';
	 
	  if( isset($_SESSION["id"]) ){
		  
		  
		  
 echo  ' 
     <div class="main">
        <div class="navbar">
 <div class="menu">
         
                       <a href="logout.php"> <button align-items=right style="border-radius:8%;" >Logout </button> </a>  
                     <a href="tweets.php?cid='.$id .'"> <button align-items=right style="background-color:#9E54C1;border-radius:8%"> Blogs </button> </a> 
              
            </div>
 </div>
  </div>

	';
	  }
	 
	   ?>
	   
	  







    </div>
  </div>
</nav>
</nav>


<br>
<br>
<br>
<br>

<?php


?>




<div class="row">

<?php

$dq ="SELECT * FROM `image1` WHERE 1";


$qdisplay = mysqli_query($con , $dq);

?>
  <div class="column">
  <?php
while( $result = mysqli_fetch_array($qdisplay)  ){
	?>
	

	<?php   $pid = $result['id'];
			$resultData = in($con , $pid);
				?>
				<button class="btn1"> <a href="details.php?id=<?php echo $result['id'];?>">
	<img  width=200 height=200 src="../../admin/interface/uploads/	<?php echo $result['image_url'] ; ?>"/><br>
	<h3> name : <?php echo $result['name'] ; ?> </h3><br>
	<p> Location : <?php echo $resultData['adress'] ; ?> </p><br>
	
	  <a>  </button>

<?php
}
?>
</div>
</div>



</body>



</html>