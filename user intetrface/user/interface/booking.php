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

$pid =  $_GET['pid'];
$cid =  $_GET['cid'];
echo $pid;
echo $cid;

$status = "pending";

$dq7 ="SELECT * FROM `booking`  WHERE pid = $pid";

$d7 = mysqli_query($con , $dq7);

 $r5 = mysqli_fetch_array($d7) ; 
 
error_reporting(E_ERROR | E_PARSE);
if( count($r5) > 0  ){
	header("Location:index.php");	
}
else{
$q= "INSERT INTO `booking`(`pid`, `status`, `cid`) VALUES ('$pid','$status','$cid')";
$r = mysqli_query($con , $q);

header("Location:index.php");
}







