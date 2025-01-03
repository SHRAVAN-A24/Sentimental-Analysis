<?php

$cid = $_GET['id'];
$pid = $_GET['pid'];
$mid = $_GET['mid'];


echo $cid ;
echo $pid;

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pg";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect! ".mysqli_connect_error()  ) ;
}

session_start();
$status="approved";

$querry="DELETE FROM `comments` WHERE uid =$cid and pid=$pid and cid= $mid ";
		$st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$querry)  ){
			header( "Location: index.php?error=stmt_failes" );
exit();
		}
		
		
		mysqli_stmt_execute($st);
		mysqli_stmt_close($st);
		
					


//-------DATABASE--------------------


if(strlen($text) > 0){

$querry = "INSERT INTO `comments`(`uid`, `pid`, `comment`, `prediction`) VALUES  ('$uid' , '$pid' , '$text' , '$result' )";

$r = mysqli_query($con , $querry);



}

$dq9 = "SELECT * FROM `comments` WHERE  pid = $pid";

 $p=0;
 

 $result1 = $con->query($dq9);
 
 if ( $result1 -> num_rows > 0){ 
 
 $total1 = mysqli_num_rows($result1);
 
while( $row = $result1->fetch_assoc() ){
	if($row['prediction'] == "Positive"){
	$p++; 

	}		
}	
$rating = $p / $total1;

 }




//------------------------------------------------


$dqt = "SELECT * FROM `prating` WHERE  id = $pid";
 $result6 = $con->query($dqt);
 
 if ( $result6 -> num_rows > 0){
	 


$qt = "DELETE FROM `prating`  WHERE id =$pid ";

if ($con->query($qt) === TRUE) {
} else {
  echo "Error updating record: " . $con->error;
}
$qr = "INSERT INTO `prating`( `id`, `prating`) VALUES ('$pid' ,'$rating')";

$r5 = mysqli_query($con , $qr);


 }else{

$qr = "INSERT INTO `prating`( `id`, `prating`) VALUES ('$pid' ,'$rating')";

$r5 = mysqli_query($con , $qr);

 }

header( "Location: index.php?message=approval_sucessful" );


  ?>