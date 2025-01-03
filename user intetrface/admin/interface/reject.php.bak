<?php

$cid = $_GET['id'];
$pid = $_GET['pid'];


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

$querry="UPDATE `booking` SET `pid`='$pid',`status`='$status',`cid`='$cid' WHERE cid =$cid ";
		$st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$querry)  ){
			header( "Location: index.php?error=stmt_failes" );
exit();
		}
		
		
		mysqli_stmt_execute($st);
		mysqli_stmt_close($st);
		
					header( "Location: index.php?message=approval_sucessful" );
