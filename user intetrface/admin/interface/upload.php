<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pg";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	die("failed to connect! ".mysqli_connect_error()  ) ;

  $id =  $_SESSION["id"];
  $name = $_SESSION['pgname'];

$price = $_POST['price'];
$text = $_POST['text'];
	

if( isset( $_POST['submit'] )  )
{

echo $_FILES['image1'];


$img_name1 = $_FILES['image1']['name'];

$tmp_name1 = $_FILES['image1']['tmp_name'];


$img_name2 = $_FILES['image2']['name'];

$tmp_name2 = $_FILES['image2']['tmp_name'];


$img_name3 = $_FILES['image3']['name'];

$tmp_name3 = $_FILES['image3']['tmp_name'];

//----------------------------------------------------
	
	  $ext1 =  explode("." , $img_name1);
$check1 = strtolower(end($ext1));
	
	
	  $ext2 =  explode("." , $img_name2);
$check2 = strtolower(end($ext2));
	
	
	  $ext3 =  explode("." , $img_name3);
$check3 = strtolower(end($ext3));
	
//----------------------------------------------------------
	$allowed = array( 'jpg' , 'jpeg' , 'png','jfif' );
	
	if( in_array($check1,$allowed)  && in_array($check2,$allowed) && in_array($check3,$allowed) ){
		
		$new_img_name1 = uniqid("IMG_".$id.'_1_-' , true  ).'.'.$check1;	
		$image_path11 = 'uploads/'.$new_img_name1;
		
		$new_img_name2 = uniqid("IMG_".$id.'_2_-' , true  ).'.'.$check2;	
		$image_path21 = 'uploads/'.$new_img_name2;
		
		$new_img_name3 = uniqid("IMG_".$id.'_3_-' , true  ).'.'.$check3;	
		$image_path31 = 'uploads/'.$new_img_name3;
		
		
		//------------------------------insert to database---------------------------------------------------
		
		
		$q  =  " INSERT INTO `image1`(`id`, `image_url`, `image_url2`, `image_url3`, `name`, `price`, `text`) VALUES ('$id','$new_img_name1','$new_img_name2','$new_img_name3',  '$name' , '$price' , '$text' )  " ;
		
 $querry = mysqli_query($con,$q);

	
	
	move_uploaded_file($tmp_name1 , $image_path11);
	move_uploaded_file($tmp_name2 , $image_path21);
	move_uploaded_file($tmp_name3 , $image_path31);

	
	

	}	
}

header("Location:../login/login.php?");

?>


<html>
<head>
<title> uploading... </title>
</head>

</html>