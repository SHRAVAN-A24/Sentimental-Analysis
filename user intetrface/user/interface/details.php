
<?php
	
include("functions.php");

session_start();
$_SESSION;


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pg";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect! ".mysqli_connect_error()  ) ;
}

$id =  $_GET['id'];

		$cid = $_SESSION["id"];
	$pid = $id;
	
	
	$dq ="SELECT * FROM `image1` WHERE id = $id";


$qdisplay = mysqli_query($con , $dq);

 $result = mysqli_fetch_array($qdisplay) ; 
 
 
 
 //-------------------------------------------------------------------------------
 
 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
				$uid = $_SESSION["id"];

		
		$text = $_POST['comment'];




process($uid,$id,$text);

			
	}
?>


<!DOCTYPE html>
<html>
<head>
<title> <?php echo " details ";?> </title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

 

<a href="index.php? "><button   style="background-color:#FF267F; float:right;border-radius:20%">Back</button> </a>';
	
	   
	  


	   



    </div>
  </div>
</nav>
</nav>
</head>
<body class="main"   >
<!---------------------------------------------------------------------------------------------------------------------------------------------->
<script>
document.getElementById('button123').addEventListener('click', function (e) {
  console.log(1);
})
</script>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<style>

.button123:hover{
	background-color:#767BF9;
	border-color:#767BF9;
}

img{
	border-radius:5%;
}
img:hover{
		border-radius:25%;

}

.main{
    width: 100%;

  background-image: linear-gradient(#8D49CF, #A5EA52);

}
.row{
	
	margin:80px;
	display:grid;
	grid-template-columns:repeat(3,1fr);
	grid-gap:30px;
	align-items:center;
	
	
}

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
<!---------------------------------------------------------------------------------------------------------------------------------------------->
	<?php
$dq1 ="SELECT * FROM `booking` WHERE cid = $cid and pid = $pid";

$d = mysqli_query($con , $dq1);
 $resultpg = mysqli_fetch_array($d) ; 

?>
	<article class = "one">
	
	<center><h1> <?php echo $result['name'] ; ?>'s PG </h1></center>


<br>


<div class="row m-3 py-5"  >

	<img  style="margin-left:15%;" width=200 height=200 src="../../admin/interface/uploads/	<?php echo $result['image_url'] ; ?>"/>
		<img style="margin-left:10%;" width=200 height=200 src="../../admin/interface/uploads/	<?php echo $result['image_url2'] ; ?>"/>
	<img style="margin-left:15%;" width=200 height=200 src="../../admin/interface/uploads/	<?php echo $result['image_url3'] ; ?>"/>
</div>
	
	<div class="container">

<div class="row1">
<div class="column1">

<button id="button123"  style="background-color:#87FFC9;border-radius:8%; text-align:left;width:60%;border-color:white;border-width:0%;border-height:0%;" >
<h2 style="text-indent:20%;">Ratings</h2>
	<?php
	error_reporting(E_ERROR | E_PARSE);

		$dq1 ="SELECT * FROM `adminlogin` WHERE id = $id";

$d = mysqli_query($con , $dq1);
 $r = mysqli_fetch_array($d) ; 
//-------------------------------------------------------------------------------------------------------------


	$dq7 ="SELECT * FROM `prating`  WHERE id = $id";

$d7 = mysqli_query($con , $dq7);

 $r5 = mysqli_fetch_array($d7) ; 
 
error_reporting(E_ERROR | E_PARSE);
if( count($r5) > 0  ){
?>

<p > Predicted  rating : <?php echo round($r5['prating'] *5,2) ; ?>  ⭐</p>
<br>

<?php
}

else{
?>

<p > Predicted  rating : 0 ⭐</p>
<br>

<?php
}

//---------------------------------------------------------------------------------------------
$dq9 = "SELECT * FROM `rating` WHERE  pid = $pid";

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


$food = $fsum/$total1; 
$hygiene = $hsum/$total1; 
$place = $psum/$total1; 

}	 
 
error_reporting(E_ERROR | E_PARSE);

if( $food> 0 || $hygiene>0|| $place>0  ){
?>

<p > Food  rating : <?php echo round($food,2); ?> ⭐</p>
<br>
<p > Hygiene  rating : <?php echo round($hygiene,2)  ; ?> ⭐</p>
<br>
<p > Place  rating : <?php echo round($place,2)  ; ?> ⭐</p>
<br>

<?php
}

else{
?>

<p > Food  rating : 0  ⭐</p>
<br>
<p> Hygiene  rating : 0 ⭐</p>
<br>
<p > Place  rating : 0 ⭐</p>
<br>


<?php
}

?>
</button>
</div>

<div class="column1">
<button id="button123"  style="background-color:#87FFC9;border-radius:8%; text-align:left;width:60%;border-color:white;border-width:0%;border-height:0%;" >

<h2 style="text-indent:20%;">About</h2>

	<p> Price: Rs. <?php echo $result['price'] ; ?> </p>
	<p> About PG: <?php echo $result['text'] ; ?> </p>
	<p> Owner:  <?php echo $r['ownername'] ; ?> </p>
		<p> e-mail:  <?php echo $r['email'] ; ?> </p>
	<p> Address:  <?php echo $r['adress'] ; ?> </p>
		<p> Phone:  <?php echo $r['phone'] ; ?> </p>
</button>
</div>
</div>
<br><br>
	<?php
	 if($resultpg['status']=="approved" ){
	?>
	<div class="container">

<div class="row1">
<div class="column1" style="background-color:#87FFC9;width:30%;margin-top:11.9%;margin-bottom:20%;border-radius:10%;padding-botton:10%;">


<h2 style="text-indent:20%;">Comments...</h2>

<form method="POST" >
<div>
&nbsp <p>Add a comment:</p>
<p><textarea style="border-radius:8%;background-color:#87CDFF;" type="text" rows = "2.5" cols = "30" name="comment" placeholder="comment"></textarea>
	<input style="border-radius:5%;background-color:#71FF4D;" type = "submit" name="submit"></input></p>

</div>
</form>

<?php
//comments display-------------------------------------------------------------
?>
<p> Comments:</p>

<table border="2" cellpadding="5" cellspacing="10">
<?php

		
		$sql ="SELECT `cid`, `uid`, `pid`, `comment`, `prediction` FROM `comments` WHERE pid = $id ";


 $result1 = $con->query($sql);
 
 if ( $result1 -> num_rows > 0){ 

while( $row = $result1->fetch_assoc() ){
	
	$uid1 = $row['uid'];
		  $s= "SELECT * FROM `userlogin` WHERE id = $uid1 ";

$qdisplay1 = mysqli_query($con , $s);

 $n = mysqli_fetch_array($qdisplay1) ; 
 
echo ' <tr>'.'<td    align="left" nowrap="nowrap">'.$n['name'].'</td>'.'<td    align="left" nowrap="nowrap">'.$row['comment'].'</td>';

if( $cid == $uid1 ){
	echo ' <td> <a href="delete.php?id='.$cid.'&pid='.$id.'&mid='.$row['cid'] .'"> <button> delete </button> </a>';
}
echo '</tr>';
}
	
 }

?>			
				
            </table>

<br><br>

</div>


<div class="column1">


<!------rating star ---------------------------------------->


<div class="container" style="margin-left:20%;">
 <div class="row"  style="background-color:#87FFC9;padding-left:20%;margin-top:25%;padding-botton:5%;border-radius:10%;">
 
<form   method="post">
 
    
        <h2>Student Rating System</h2>
    
 <!----------------------------------------->
    <div>
       <p>Food Rating</p>  <div class="rateyo class1" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
   <span class='result1' >0</span> 
    <input type="hidden" name="rating1" >
    </div>
	<!----------------------------------------->
	  <div>
        <p>Hygiene Rating</p>  <div class="rateyo class2" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
  <span class='result2' >0</span> 
    <input type="hidden" name="rating2" >
    </div>
	<!----------------------------------------->
	  <div>
        <p>Place Rating</p>  <div class="rateyo class3" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
  <span class='result3' >0</span> 
    <input type="hidden" name="rating3" >
    </div>
	<!----------------------------------------->
 
    <div><input style="border-radius:5%;background-color:#71FF4D;"  type="submit" name="add"> </div>
 <br><br>
</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".class1").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result1').text('rating :'+ rating);
			
			createCookie("rating1", rating,"1");
		
        });
    });
	$(function () {
        $(".class2").rateYo().on("rateyo.change", function (e, data) {
            var rating2 = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result2').text('rating :'+ rating2);
			
		createCookie("rating2", rating2,"1");
		
		
        });
    });
	$(function () {
        $(".class3").rateYo().on("rateyo.change", function (e, data) {
            var rating3 = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result3').text('rating :'+ rating3);
			
		createCookie("rating3", rating3,"1");
		
        });
    });
	
function createCookie(name, value, days) {
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}	
 
</script>
</div>
</div>
<?php
	 }
	 ?>
</body>
 
</html>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$rating1 =  $_COOKIE["rating1"];
$rating2 =  $_COOKIE["rating2"];
$rating3 =  $_COOKIE["rating3"];



 if(isset($_COOKIE['fbdata'])) { 
        echo "welcome ".$_COOKIE['fbdata'];
    }
 
    $sql = "INSERT INTO `rating`(`cid`, `pid`, `foodRating`,`hygieneRating`, `place`) VALUES ('$cid','$pid','$rating1','$rating2','$rating3')";
    if (mysqli_query($con, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
}




?>
<!------------------------------------------------------------------------------->
	<?php
$dq1 ="SELECT * FROM `booking` WHERE cid = $cid ";

$d = mysqli_query($con , $dq1);
 $r22 = mysqli_fetch_array($d) ; 

?>

<?php

 if($resultpg['status']=="approved"  ){
	
	echo  " <center><p><b>PG Approved by the owner, Please contact owner  !!  </b></p></center> ";
}else if($resultpg['status']=="pending"){
		echo  " <center><p><b>PG is being processed by the owner, Please wait </b></p></center>  ";
}
else if( $r22['status'] == "approved" || $r22['status'] == "pending" ) {
			echo  " <center><p><b>You have already booked another PG </b></p></center>  ";
}else{
?>
<center>

<form method = "POST" action="booking.php?pid=<?php echo $pid; ?>&cid=<?php echo $cid; ?>">

<?php $_SESSION['cid'] = $cid; ?>
<h2><b>Booking now open !!!! </b></h2>
 <button style="border-radius:20%;background-color:#71FF4D;" >  Book Now  </button>

</form>
</center>

<?php
}
?>

<br>
<br>
<br>


</html>