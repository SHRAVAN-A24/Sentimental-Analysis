<?php
	include("connection.php");






function in($con , $id){
	
$querry ="SELECT * FROM `adminlogin` WHERE  id =?   ";
	$st = mysqli_stmt_init($con  );
		if( !mysqli_stmt_prepare($st,$querry)  ){
			header( "Location: signup.php?error=stmt_failes" );
exit();
		}
		
		
		mysqli_stmt_bind_param($st,"s",$id );
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

function process($uid,$pid,$text){
	$_SESSION["tuid"] = $uid;
$_SESSION["tpid"] = $pid;
$_SESSION["text"] = $text;




header("Location:../../../predict/predict.php");
}


