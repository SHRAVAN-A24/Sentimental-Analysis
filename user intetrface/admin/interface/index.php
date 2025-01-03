
<?php




$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pg";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect! ".mysqli_connect_error()  ) ;
}

session_start();


  $id =  $_SESSION["id"];
  $pid = $id;
	$pgname =	$_SESSION["pgname"];
	$email = 	$_SESSION["email"] ;
	$ownername = 	$_SESSION["ownername"];
	$password = 	$_SESSION["password"] ;
		
	$adress = 	$_SESSION['adress'];
	$phone = 	$_SESSION["phone"];


	
?>

<html>
<head>
<title> <?php echo " welcome $ownername ";?> </title>
</head>
<body style="background-image:linear-gradient(#E06BFE,#DA60A1);">

<script>
.row {
  display: flex;
}

.column {
  flex: 50%;
}

</script>

<?php

if(!empty($id)){
		
	
	$dq ="SELECT * FROM `image1` WHERE id = $id";


$qdisplay = mysqli_query($con , $dq);

 $result = mysqli_fetch_array($qdisplay) ; 
 
 
 

?>
	
	
	<center><h1> <?php echo $result['name'] ; ?>'s PG </h1></center>


<br>
<a href="logout.php" ><button  style="width:4%;height:3%;align-items=right;background-color:red;border-radius:20%;">Logout</button></a>
<br>
<br>
<br>
<br>



<center>

<div class="row m-3 py-5">

	<img  width=200 height=200 style="border-radius:8%;" src="../../admin/interface/uploads/	<?php echo $result['image_url'] ; ?>"/>&nbsp &nbsp &nbsp &nbsp  &nbsp;
		<img  width=200 height=200  style="border-radius:8%;"src="../../admin/interface/uploads/	<?php echo $result['image_url2'] ; ?>"/>&nbsp &nbsp &nbsp &nbsp  &nbsp;
	<img  width=200 height=200  style="border-radius:8%;" src="../../admin/interface/uploads/	<?php echo $result['image_url3'] ; ?>"/>&nbsp &nbsp &nbsp &nbsp  &nbsp; 
</div>
</center>
<br><br>
<style>
.column1 {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

button:hover{
		background-color:rgb(99, 159, 249);
	color:#FF47A9;
}


</style>
<div class="container">

<div class="row1">
<div class="column1">
<center>
	<?php
	
		$dq1 ="SELECT * FROM `adminlogin` WHERE id = $id";

$d = mysqli_query($con , $dq1);
 $r = mysqli_fetch_array($d) ; 
	
	

	$dq7 ="SELECT * FROM `prating`  WHERE id = $id";

$d7 = mysqli_query($con , $dq7);

 $r5 = mysqli_fetch_array($d7) ; 
 
error_reporting(E_ERROR | E_PARSE);
if( count($r5) > 0  ){
?>

<script>
document.querySelector('button').addEventListener('click', function (e) {
  console.log(1);
})
</script>

<div style="text-align:left; text-indent:10%;">
<button style="text-align:left;border-radius:5%;background-color:#72FBF6;border-width:0%;border-color:white;" >
<b><h2 style="text-indent:40%" >Rating</h2></b>

<p>Predicted  rating : <?php echo round($r5['prating'] *5,2) ; ?> ⭐ </p>


<?php
}

else{
?>
<p >Rating</p>

<p >Predicted  rating : 0 ⭐</p>




<?php
}

//---------------------------------------------------------------------------------------------
$dq9 = "SELECT * FROM `rating` WHERE  pid = $id";

 $food=0.0;
 $hygiene=0.0;
 $place=0.0;

 $result1 = $con->query($dq9);
 
 if ( $result1 -> num_rows > 0){ 
 
 $total1 = mysqli_num_rows($result1);
 $fsum=0.0;
 $hsum=0.0;
 $psum=0.0;
 
 while( $row = $result1->fetch_assoc() ){
	$fsum += $row['foodRating'];
	$hsum += $row['hygieneRating'];
	$psum += $row['place'];
	}		


$food = round($fsum/$total1,2); 
$hygiene = round($hsum/$total1,2); 
$place = round($psum/$total1,2); 

}	 
 
error_reporting(E_ERROR | E_PARSE);

if( $food> 0 || $hygiene>0|| $place>0  ){
?>

<?php
//---------------------food --------------------
if($food < 2.5){

?>
<p > Food  rating : <?php echo $food; ?>  &nbsp  &nbsp  &nbsp  &nbsp    ⭐  &nbsp  &nbsp  Poor  &nbsp  &nbsp   Suggestion:Need quick improvement</p>
<?php
}


if($food > 2.5 && $food < 3.5){

?>
<p > Food  rating : <?php echo $food;    ?>  &nbsp  &nbsp  &nbsp  &nbsp  ⭐ &nbsp  &nbsp  Average  &nbsp  &nbsp   Suggestion:Need improvement</p>
<br>

<?php
}
if($food > 3.5 && $food < 4.5){

?>
<p > Food  rating : <?php echo $food; ?>  &nbsp  &nbsp  &nbsp  &nbsp  ⭐ &nbsp  &nbsp  Good  &nbsp  &nbsp   Suggestion: Improvement required </p>
<br>

<?php
}

if($food > 4.5){

?>
<p > Food  rating : <?php echo $food; ?>  &nbsp  &nbsp  &nbsp  &nbsp ⭐  &nbsp  &nbsp  Excellent  &nbsp  &nbsp   Suggestion:Good going</p>
<br>

<?php
}


?>


<?php
//----------------------hygiene---------------
if($hygiene < 2.5){

?>
<p > Hygiene  rating : <?php echo $hygiene; ?>&nbsp &nbsp⭐ &nbsp  &nbsp  Poor  &nbsp  &nbsp   Suggestion:Need quick improvement</p>
<br>

<?php
}


if($hygiene > 2.5 && $hygiene < 3.5){

?>
<p > Hygiene  rating : <?php echo $hygiene; ?>&nbsp &nbsp⭐  &nbsp  &nbsp  Average  &nbsp  &nbsp   Suggestion:Need improvement</p>
<br>

<?php
}
if($hygiene > 3.5 && $hygiene < 4.5){

?>
<p > Hygiene  rating : <?php echo $hygiene; ?>&nbsp &nbsp⭐  &nbsp  &nbsp  Good  &nbsp  &nbsp   Suggestion: Improvement required </p>
<br>

<?php
}

if($hygiene > 4.5){

?>
<p > Hygiene  rating : <?php echo $hygiene; ?>&nbsp &nbsp⭐  &nbsp  &nbsp  Excellent  &nbsp  &nbsp   Suggestion:Good going</p>
<br>

<?php
}


?>
<?php
//----------------------place---------------
if($place < 2.5){

?>
<p > Place  rating : <?php echo $place; ?> &nbsp &nbsp &nbsp ⭐ &nbsp  &nbsp  Poor  &nbsp  &nbsp   Suggestion:Need quick improvement</p>
<br>

<?php
}


if($place > 2.5 && $place < 3.5){

?>
<p > Place  rating : <?php echo $place; ?>  &nbsp &nbsp &nbsp ⭐&nbsp  &nbsp  Average  &nbsp  &nbsp   Suggestion:Need improvement</p>
<br>

<?php
}
if($place > 3.5 && $palce < 4.5){

?>
<p > Place  rating : <?php echo $place; ?> &nbsp &nbsp &nbsp ⭐ &nbsp  &nbsp  Good  &nbsp  &nbsp   Suggestion: Improvement required </p>
<br>

<?php
}

if($place > 4.5){

?>
<p > Place  rating : <?php echo $place; ?>&nbsp &nbsp &nbsp  ⭐ &nbsp  &nbsp  Excellent  &nbsp  &nbsp   Suggestion:Good going</p>
<br>

<?php
}


?>

<?php
}

else{
?>

<p > Food  rating : 0 ⭐ </p>
<br>
<p > Hygiene  rating : 0 ⭐</p>
<br>
<p > Place  rating : 0 ⭐</p>
<br>


<?php
}

?>
</button>
</center>
</div>


<?php

$q = "SELECT * FROM `booking` WHERE pid = $id";
$dw = mysqli_query($con , $q);

 $rp = mysqli_fetch_array($dw) ;
$cid = $rp['cid'];
 
 
 $w = "SELECT * FROM `userlogin` WHERE id =$cid";
 $dw1 = mysqli_query($con , $w);

 $user = mysqli_fetch_array($dw1) ;
 
 
 
 
 
 ?>


<div class="column1">
<center>
<div style="text-align:left;width:60%;">
<button style="border-radius:5%;background-color:#72FBF6;border-width:0%;border-color:white;text-align:left;" >

<b><h2 style="text-indent:40%" >About</h2></b>
		<p> Price: Rs. <?php echo $result['price'] ; ?> </p>
	<p> About PG: <?php echo $result['text'] ; ?> </p>
	<p> Seller:  <?php echo $r['ownername'] ; ?> </p>
		<p> e-mail:  <?php echo $r['email'] ; ?> </p>
	<p> Address:  <?php echo $r['adress'] ; ?> </p>
		<p> Phone:  <?php echo $r['phone'] ; ?> </p>
		</button>
</div>
</center>

</div>
</div>
</div>
<br>

<div class="container">
 

<div class="row1">
<div class="column1">
  
  
<div style="text-align:left; text-indent:10%">
<button style="border-radius:5%;background-color:#72FBF6;border-width:0%;border-color:white;text-align:left;" >

<h2 style="text-indent:30%" >Comments...</h2>
<table border="2" cellpadding="5" cellspacing="10" >
<th align="left">Name</th>
			<th align="left" >Comment</th>
			<th align="left" >Prediction</th>
<?php


		
		$sql ="SELECT `cid`, `uid`, `pid`, `comment`, `prediction` FROM `comments` WHERE pid = $id ";


 $result1 = $con->query($sql);
 
 if ( $result1 -> num_rows > 0){ 

while( $row = $result1->fetch_assoc() ){
	
	$uid = $row['uid'];
		  $s= "SELECT * FROM `userlogin` WHERE id = $uid ";

$qdisplay1 = mysqli_query($con , $s);

 $n = mysqli_fetch_array($qdisplay1) ; 
 
echo ' <tr>'.'<td    align="left" nowrap="nowrap">'.$n['name'].'</td>'.'<td    align="left" nowrap="nowrap">'.$row['comment'].'</td>'.
'<td    align="left" nowrap="nowrap">'.$row['prediction'].'</td>'.
 '</tr>';

}
	
 }
?>			
				
            </table>

</button>
</div>
</div>
<br>
  <div class="column1">
<button style="border-radius:5%;background-color:#72FBF6;border-width:0%;border-color:white;text-align:left;" >

<b><h2 style="text-indent:40%" >My Bookings</h2></b>


   
<table align="right"   border="2" cellpadding="5" cellspacing="20" >

<th style="text-align:center;" >Name</th>
<th style="text-align:center;">e-mail</th>
<th style="text-align:center;">Address</th>
<th style="text-align:center;">Phone</th>
<th style="text-align:center;">Status</th>
<th style="text-align:center;">Approve</th>
<th style="text-align:center;">Reject</th>




<?php

		
		$sql ="SELECT * FROM `booking` WHERE pid = $pid ";


 $result1 = $con->query($sql);
 
 if ( $result1 -> num_rows > 0){ 

while( $row = $result1->fetch_assoc() ){
	
	$uid = $row['cid'];
		  $s= "SELECT * FROM `userlogin` WHERE id = $uid ";

$qdisplay1 = mysqli_query($con , $s);

 $n = mysqli_fetch_array($qdisplay1) ; 
 
echo ' <tr>'.'<td    align="left" nowrap="nowrap">'.$n['uname'].'</td>'
.'<td    align="left" nowrap="nowrap">'.$n['email'].'</td>'
.'<td    align="left" nowrap="nowrap">'.$n['adress'].'</td>'
.'<td    align="left" nowrap="nowrap">'.$n['phone'].'</td>'
.'<td    align="left" nowrap="nowrap">'.$row['status'].'</td>'
.'<td align="left"  ><a href="process.php?id='.$uid.'&pid='.$pid.'"> <button>confirm</button></a></td>' 
.'<td align="left"  ><a href="reject.php?id='.$uid.'&pid='.$pid.'"> <button>confirm</button></a></td>' . '</tr>';



;

}
	
 }

?>			
	

 
            </table>
		
			</button>
				<br><br>
  </div>
    </div>
  


<?php

}else{
?>
	<script>
	alert("invaild users");
	</script>
	<?php
	header("Location:login.php?message=no_user_found");

}
	?>
