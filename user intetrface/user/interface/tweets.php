<center><h1 style="color:#FF337A;">Messages</h1></center>
<style>

button {
	font-weight:700;
	outline:none;
	border:none;
	background-color:#B65DF2;
	color:aliceblue;
	padding:13px 30px;
	cursor:pointer;
	text-transform:uppercase;
	transition: 0.3s ease;

}
button:hover {
		background-color:#5DF2DE;
}




 body {
 background-image:url("https://www.gallerysystems.com/wp-content/uploads/LASkyline.jpg");
width:100%;
height:100px;
background-size:cover;
background-position:top  center;
flex-direction: column;
justify-content:center;
align-items: flex-center;
}


</style>


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

$cid = $_GET['cid'];
$message="";


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
	
 
	 $message = $_POST['comment'];

	 $q = "INSERT INTO `tweets`(`cid`, `message`) VALUES ('$cid','$message')";
	 $st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$q)  ){
			header( "Location: index.php?error=stmt_failes" );
exit();
		}
		
		
		mysqli_stmt_execute($st);
		mysqli_stmt_close($st);
 
	}
 
	
?>
<html>

<head>
<title>Blogs</title>
</head>

<body>
<a align="left" href="index.php?id="><button>Back</button></a>
<center>
<br>
<form method="POST" >
<div style="background-color:rgba(195,255,207,0.7);margin-left:35%;margin-right:27%;margin-botton:10%;paddin-up:10%s">
<p style="color:#000000; background-color:rgba(246,210,255,0.6);">Add a message about your life!!!:</p>
<p><textarea style="border-radius:8%;background-color:#4BF3D8;" type="text" rows = "4" cols = "40" name="comment" value="<?php echo $message; ?>" placeholder="Comment"></textarea>
	<input type = "submit" name="submit"></input></p>


</form>



<table border="2" cellpadding="5" cellspacing="10" style="border-color:#1351DA;">
<th style="text-align:center;background-color:rgba(35,255,227,0.4);color:#8D0033;" ><h3>Name</h3></th>
<th style="text-align:center;background-color:rgba(35,255,227,0.4);color:#8D0033;"><h3>e-mail</h3></th>
<th style="text-align:center;background-color:rgba(35,255,227,0.4);color:#8D0033;"><h3>Messages</h3></th>



<?php

		
		$sql ="SELECT * FROM `tweets` WHERE 1 order by id desc";


 $result1 = $con->query($sql);
 
 if ( $result1 -> num_rows > 0){ 

while( $row = $result1->fetch_assoc() ){
	
	$uid = $row['cid'];
		  $s= "SELECT * FROM `userlogin` WHERE id = $uid ";

$qdisplay1 = mysqli_query($con , $s);

 $n = mysqli_fetch_array($qdisplay1) ; 
 
echo ' <tr>'.'<td   style="background-color:#29FE7F;" align="left" nowrap="nowrap">'.$n['name'].'</td>'
.'<td   style="background-color:#29FE7F;"  align="left" nowrap="nowrap">'.$n['email'].'</td>'
.'<td    style="background-color:#29FE7F;" align="left" nowrap="nowrap">'.$row['message'].'</td>'. '</tr>';

}
	
 }

?>			
				
            </table>
</div>
</center>
</body>
</html>