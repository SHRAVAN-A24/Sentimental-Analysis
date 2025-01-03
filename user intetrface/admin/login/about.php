<?php
session_start();

$_SESSION;
include("../login/connection.php");
include("../login/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Repeated code -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> a4Automative </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
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
	background-color:#1d1d1d;
	color:aliceblue;
	padding:13px 30px;
	cursor:pointer;
	text-transform:uppercase;
	transition: 0.3s ease;

}
button:hover {
		background-color:#3a3833;
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
 background-image:url("https://th.bing.com/th/id/OIP.D6GmkicBehC4SeC8IqUkJQHaFi?w=202&h=180&c=7&o=5&dpr=1.25&pid=1.7");
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

 .one:hover{
	cursor:pointer;
	background-color:#d1c4e9;
	transform:translateY(-70px);
		transition:0.3s ease;

}
</style>

</head>


<body>
<!-- NAVIGATION-->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 ">
  <div class="container">
<img width="400" height="120" src="data:image/png;base64,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" alt="logo"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      

	  <?php


	  if( isset($_SESSION["id"]) ){
 echo  '  <li class="nav-item">  Welcome, ' .$_SESSION["name"]. " </li>  ";
	  }
	  else{

		 echo'  <li class="nav-item"><a class="nav-link" href="login.php">LogIn</a>   </li> ';
	  }
	   ?>
	   	     <li class="nav-item">
  <a class="nav-link" href="../../index.php">Back</a>   
	   </li>
	 


    </div>
  </div>
</nav>
</nav>
<!----------------------------------------------------------------------------------------- -->


<center><h1> <b><u>Project A4automotive</u></b> </h1></center>


<center><p> This is the project made by Pawan bharadwaj n p(4vp18cs059) and sampath kumar pl (4vp18cs074) <br>combined to fulfill the requirement of web technology  mini project guided by Prof.Bharati in 6th semester <br> as per the vtu requirements. </p>

</center>













<!-- footer of webpage --> 
<footer class="mt-5 py-5" style="background-color:#222222;">

<div  class="row container mx-auto pt-5"> 

<div  class="footer-one  col-lg-3 col-md-6 col-12" > 
<img alt="img logo" width=50% height=70% src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAABJlBMVEUAAADrHCQGBgYvLzAREREgICDyHSUyMjLh3NxycXdtbHJHR0fzHSUWFRjj396xr7BeXl7U0tCqp6alpKeKiY9/foMkJCVdXGJAP0O5t7iAfn+dnZ96enqVlZjmGyPDwcLMy8mvFRvWGiFvAAAzAAAkAACjExmWEhd9DxPCFx5+AADscnLsZ2fsU1TsTU31SEnsNzhnCA1MCQwsBQdfCw+XEhdDCApwDRFSCg0WAACPjYxQUFNVAACYAAW/AArTIyr3W1/zi43ylpj3h4jSY2a/UFKYMzbwk5S+QUSLIybscXCyKy7sYWC7JCjwSEr0MTOPAAK0DBQ7SEhUYWElODcSJCQyBggAFRSGEBT/bHH+g4jcSE3kNDewOTuEJinXTlB0JSddGxzdYKaRAAAIY0lEQVR4nO2ai1/aShbHEx4hQSSE8AohzwoSbRUQRcGudru73btVWFtrua3du/v//xN7Js+JttYHgbb3fD9tncycOXPmNzMnD8swCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCILcYuP42Rbh2fHGqkNZPRvPXv7lZHr6/NOrN38lvHn1evtvf//H6M8qzWDrojd9/skV4w3hVcjr7bN//na46gCXzdCyd0+3XwPbIf8iPA84O9152z9adZxLY2jpu6fuvANevHix4wGFoLgz3b0+76862GWw19Fn00CC6W6vN9NZrkDBsrNeyGymWwerDjlhRg7X61378wUxOCKHbjsX/956Rtjaennh2FDHsQFcwe6uOuzkOJrr3AxWXmd1d7JcgbWtrcPs5bv371utZrPZarXy799dfmA25pYNeoWysJ2rVQefCHBoosVniR77x0cf3rlqtCjIVend5cd290IPtwvHXvx6R+jKYqnjwOlW/yh1uVa6g8nlR6Z/EfbiOGew6kkslD2LOggFvTNkUh8aa9+l8SEF560QdvyFVNmzClRqsIYM87GWuyc12CxOoApbcH6NE9SO9oh3C0llsrXsvallU8yhE+0V6xfItvtRRmCtQ6LIw0kxQzvy0ln1lJ7IPLzXcPrmHlSkHgfDdClPP/PzSt8OM4E9f7K3TpRW7J/1BXEYKcKyi3hvObCpZNtegMMl057b1BMabPjRIrzuU/evp2+8pdLuOmxMETKJ/UV4PrBDhwV71B+Nuj6j/vDw4Grvh/i4kOoe78UqBu6rCnubRSSBo+GclrnARfgv1fbJyfnb30aDlYrz8vdPv599/nx+7jjOycmMm31FjjAJDB8/znG3c37d293tfdt/wAzMdnf++PKfJwz3JA6mn7afn52eTnfJt5A7FHFV0Tcf/CDaHoIavVnv+95pdBBm5/T0jy//XcG33fb07JR8EYOI7xMyx9n3lWVv0N/snHhflu50zd0iEma68+Lzl/8lK8EtBj33Y5kXNfkkogM2oLuw7kc0Ln7w9c43U8tRe2PQ7252zk+u/e9sX5u/99HJHcB2HMvqAPubhH0oWRcOjE4GJvLAhpnuLFeW0cwPHIZ39keHV7HsloIpDof9UXe+CbECnf15t3+4cSsFQva0bPt6ujMFIB24B+Xm6tu2c2FZxMNwONho351H2wM4dBeQ7wuuMNdvl/eiZHnbunDvI3EHRwMQr2M5EUTDOdxov6LifdkY7Tusu2WekuIfhPvAUHB+8Iftq7mjw4GzF/Lk+D3acK65n+P147BjgypL2Ct9ji1YyQ+zIAYdveDsfd/uacy5wmbSYyyUkV1I+k3JKizkPWaZHDh2sk/+jpOo+2Q4sBLNKs4P8Sb6YIZJ3hVW9Zr1VFKrDuBPSCaXo67SuezNq1o6hm+QCitqvnE2l07f8F2LWiMvGc86fQPiILfO1HK5DO0CBszEQ4hFmAxGsShGV3xRpdqkYpNhlCJPUxxDg2DyxQCeL7sTHxf5Yinmeg2sXd+1Mk/ZS8SDdsOrRBxA/1yxaNIuikWFYcTizQASpVWUJD6aisRrVKPJgyaiFAdCykMnsexj8LxJlnbMQ2NsDU2oKMPPjMnzRmAuwgUINb7h1WSYJk8CGfN8K3KhSHyDYcox02aigsB+NU0D/lDToFfBlCA8/zd6pqRm3ALM35CM9ciq6YXZlExTorYco5KKsmdAe4UZlhjXVzbTkqQ1bwBYHlIPg5pmeHpKkqS5nqTSevi7xdjZSgDVNCct0wylN0w6esNsMV9pSUlUPUNm4c7cNMFb1FAyTVExyVEsmyadadKmGW7GvGmG6QziIJoIVDiKpw+J8nHzewQTw4CgRcMIUqFi0DtTMQSqHGqSM4xY4lAMOPNMyzByMvz1K7MGeC0bmtdOr21GMcKkVYo6EAeu2ygcqHED0Axj7dFzfChlRYHh1xQlWDhRoTURlTxVDltyihLTRFTIkWkpSqOmKGW/UiVGsjL22mOaiOFwTElRQk3yiuLuBgjHkz+rKN5ZHENNMyTZs5MXRXcdmqLo782ySJ+KsliiypEmobmHLBIhBFFsMCXRNwPXMDGV/ANdyzFNZDHccmAfHqt84HYsKo1YWGORQkn0XpyVZc2PUla9Z0NZpjVR5RJVDlvSshzTRJXJWcjLMix5RZbJNs/Jbp0mN912OaaJKleCckmW01R5EvjXvB++XVOmEBPVpKmqk2wNyJZU1TslmpqnDDS1RJXD3JKGfkzMjEwBfIAmKVXVMqSKXDBjtem2qzFNNDXcchNVjTRRVT9r5N0BmmFbS1UbT5zrPWloMdzxxxqdKcZaNPeKFqpV07RYyqtoZD1LmpbzvFaZvOb5qWqC267FNBlr4ZabaFqQ3omDwO1YGxNHwYiCpi1Jk2olhrsNKpU6ZVGpTCjrOlVPWzFe30ml4spar1TyvjfoRKYlVCo1yjxNdV+jmsBBI6qeQHiBkuCPfgFJjkm16p0c9/TUq1USkFCtpjP+f6XJrFWrUShCtU6Vq7nAKpWBrhPPXzporVazVCfwk8+G5jUhMAQagaXnoEGN4Hl1ISM0QpKTJysIdOrICIIAabYhxKAs8kK0Z3LCDTOSoCeC4C15DWoaQae69yNOpC6Ml6XK4XTTscHr3+i9aCb1Or2hmVy9TibSqOcj6tQTvNcchExb5SfuHm/U6/70GvUgL0y8UmpCm8cdRWNABNHj7oS+ANcUy3ukjVj3ufvZaP1+ZgGZ0B4/CCEIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiCIy/8BZUAT1+cUlVIAAAAASUVORK5CYII=" />
 <p>This is an online car magzine designed to create and improve knowledge about cars.</p>
 </div>


<div  class="footer-one  col-lg-3 col-md-6 col-12" > 
<h5 class="pb-2" style="color:#a2cf6e" >Featured</h5>
<ul class="text-uppercase  list-unstyled">
<li>hatchback</li>
<li>suv</li>
<li>sedan</li>
<li>coupe</li>
<li>sports car</li>
<li>offRoader</li>
</ul>
</div>


<div  class="footer-one  col-lg-3 col-md-6 col-12" > 

<h5 class="pb-2" style="color:#a2cf6e" >Contact us</h5>
<div class="text-uppercase">
<P>Phone Number(+91): 9448724072 , 7022136392 </p>
</div>
<P>Email : pawanbharadwajnp@gmail.com sampathkumarsharmapl@gmail.com  </p>
</div>


</div>

<br>
<div class="copyright">
<div class="row container mx-auto" >
<div class="col-lg-3 col-md-6 col-12">
<a href="https://www.facebook.com/pawan.bharadwaj.106" target="_blank"  > <i class=" fab fa-facebook-f"></i> </a>
<a href="https://www.facebook.com/sumbath.vp" target="_blank"  > <i class=" fab fa-facebook-f"></i> </a>
</div>
</div>
</div>
<br>

<div >
for more information go to :<a href="http://www.vcetputtur.ac.in/">vcetputtur.ac.in</a> 
</div>




</footer>


</body>

</html>