<?php
session_start();

if ( isset( $_POST["login"] ) ) {
 login();
} elseif ( isset( $_GET["action"] ) and $_GET["action"] == "logout" ) {
 logout();
} else {
 displayLoginForm();
}

function login() {
 if ( isset( $_POST["username"] ) and isset( $_POST["password"] ) ) {
	 $a=$_POST["username"];
	 $b=$_POST["password"];
echo $b.'<br>';

$dsn="mysql:host=localhost;dbname=eventseventos";
$username="dakula1234";
$password="Eventos1234";

try{
	$conn=new PDO($dsn,$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
	echo "Connection failed : ".$e->getMessage();
}

	 $sql="SELECT * FROM orga where uname= '$a'";

try {
$st = $conn->query( $sql );
$st->execute();
$row=$st->fetch(PDO::FETCH_ASSOC);
 } 
catch ( PDOException $e ) {
 echo 'Query failed: ' . $e->getMessage();
}

if($a=='' and $b=='')
{
	echo "Please enter username and password both";
} elseif ( $b==$row['upass'] ) {
 $_SESSION["username"] = $a;
 session_write_close();
 ini_set( "session.cookie_lifetime", 10 );
 header( "Location: login.php" );
echo "<script language='JavaScript' type='text/JavaScript'>
<!--
window.location='Inside.html';
//-->
</script>";
 } else {
 displayLoginForm( "Sorry, that username/password could not be found.
Please try again." );
 }
 }
}

function logout() {
 unset( $_SESSION["username"] );
 session_write_close();
 header( "Location: login.php" );
}

function displayPage() {
 displayPageHeader();
include "Inside.html";
 }

function displayLoginForm( $message="" ) {
 displayPageHeader();
?>
 <div id="header"><a href="#"><img src="logo.png" width="250" height="75"></a> </div>
 <div id="header2">
 <a href="https://twitter.com/"><img title="Twitter" src="Twitter.png" alt="Twitter" width="35" height="35" /></a>
 <a href="https://www.facebook.com/"><img title="facebook" src="fb.png" alt="facebook" width="35" height="35" /></a>
 <a href="https://plus.google.com/"><img title="googleplus" src="google+.png" alt="googleplus" width="35" height="35" /></a>
  <a href="https://www.pinterest.com/"><img tCorporate officeitle="pinterest" src="pinterest.png" alt="pinterest" width="35" height="35" /></a>
 </div>
<div class="login">
   <?php if ( $message ) echo ' <p class="error">' . $message . '</p >' ?>
  <form action="login.php" method="post" style="margin-top: 200px;margin-left: 500px;">
      <div class="input" >
        <input type="text" name="username" class="form-control" placeholder="Username or email"></br></br></br>
		<input type="password" name="password" class="form-control" placeholder="Password"></br></br></br>
		<div id="button">
        <button type="submit" name="login">Login</button>
		<button type="submit"><a href="re.php">Sign up</a></button></br></br></br>
 		</div>
		 <div class="login-help" style="font-family:Serif; margin-left:60px;font-size:1em;color:#FFFFFF;">
      <b>Forgot your password?</b> <a href=# style="text-decoration:none;color:#FFFFFF;">Click here to reset it</a></div>
    </div>
	
       </form>
	   
 		</div>
 </div>
 </body>
 </html>

 <?php
}
function displayPageHeader() {
?>
<!Doc html>
<html>
<head>
<style>
	#header{
	    height:50px;
		width:20%;
		float:left;
		margin-top:0px;
	}
	#header2{
	    height:35px;
		margin-top:0px;
		margin-left:85%;
	}
body {
    background-image: url("curtains.jpg");
	transition: background-image 1s ease-in-out;
	background-repeat: no-repeat;
    background-attachment: fixed;
	background-position: center; 
    background-size: contain;	
}
body:hover{
background-image: url("Theater1.jpg");
background-size:cover;}
input {
   width:50%;
    align:center;
    float:left;
	box-sizing: border-box;
	padding: 1em;
	border: 0.15em solid #808080;
	border-radius: 0.5em;
	text-align:left
}
button {
  background: #55d934;
  background-image: -webkit-linear-gradient(top, #55d934, #63b82b);
  background-image: -moz-linear-gradient(top, #55d934, #63b82b);
  background-image: -ms-linear-gradient(top, #55d934, #63b82b);
  background-image: -o-linear-gradient(top, #55d934, #63b82b);
  background-image: linear-gradient(to bottom, #55d934, #63b82b);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  width:25%;
}

button:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
a{text-decoration: none;color:white;}
</style>
</head>
<body>

 <?php
}
?>
