<?php
	include("connection.php");

function emptyInput($name, $email ,$Uname,$password, $rpassword ){
	if( empty($name) || empty($email) || empty($Uname) || empty($password) || empty($rpassword) ){
		return true;
	}
	return false;
}


function  invalidUid($Uname){
	if(! preg_match("/^[a-zA-Z0-9]*$/",$Uname) ){
		return true;
	}
	return false;
	
}


function invalidEmail($email)
{
		if( !filter_var($email,FILTER_VALIDATE_EMAIL) ){
		return true;
	}
	return false;
	
	
}

function invalidPassword($password,$rpassword ) 
{
			if( $password !== $rpassword){
		return true;
	}
	return false;
	
	
}




function UidExists($con, $email,$password ){
	
		$querry="select * from userlogin where email = ? and password = ? ; ";
		$st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$querry)  ){
			header( "Location: signup.php?error=stmt_failes" );
exit();
		}
		
		
		mysqli_stmt_bind_param($st,"ss",$email,$password );
		mysqli_stmt_execute($st);
		
		$resultData = mysqli_stmt_get_result($st);
		if( $row=mysqli_fetch_assoc($resultData)){//<!--array of data fetched -->
	//user exists
	return $row;
	
	}else{
		return false;
	}
		mysqli_stmt_close($st);
}

function  createuser($con,$name,$email,$Uname,$rpassword ,$adr,$ph )
{
	$querry="insert into userlogin(name,email,uname,password,adress,phone) values(?,?,?,?,?,?); ";
		$st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$querry)  ){
			header( "Location: signup.php?error=stmt_failes" );
exit();
		}
		
		
		mysqli_stmt_bind_param($st,"ssssss", $name,$email,$Uname,$rpassword,$adr,$ph  );
		mysqli_stmt_execute($st);
		mysqli_stmt_close($st);
		
		$dq ="SELECT `id`,  `email` FROM `userlogin` WHERE  email= $email";


$qdisplay = mysqli_query($con , $dq);

 $result = mysqli_fetch_array($qdisplay) ; 
 
	return $result['id'];
}
		

	




function emptyInputLogin($email ,$password) {
	if( empty($email) || empty($password)  ){
		return true;
	}
	return false;
}



function loginUser($con,$email ,$password){
	$eExists =UidExists($con, $email,$password );
	
if($eExists ===false){
		header( "Location: login.php?error=invalid_email/password" );
		echo ' databse does not exists ';
die();
	}
	else{
		$_SESSION["id"]= $eExists["id"];
		$_SESSION["name"]= $eExists["name"];
		$_SESSION["email"] = $eExists["email"];
		$_SESSION["uname"]= $eExists["uname"];
		$_SESSION["password"] = $eExists["password"];
		
		$_SESSION['adress']= $eExists["adress"];
		$_SESSION["phone"]= $eExists["phone"];
		

		return 1;
die();
exit();
		
	}
	
}


			



