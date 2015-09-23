<?php

if ( isset( $_POST["submit"] ) ) {
 submit();
} else {
 displayLoginForm(array()); 
}

function validateField( $fieldName, $missingFields ) {
 if ( in_array( $fieldName, $missingFields ) ) {
 echo 'class="error"';
 }
}

function setValue( $fieldName ) {
 if ( isset( $_POST[$fieldName] ) ) {
 echo $_POST[$fieldName];
 }
}

function submit(){
	$requiredFields = array( "fname", "lname","email" , "password",
 "username", "gender" , "BirthMonth", "BirthDay" , "BirthYear" , "phone");
 $missingFields = array();
 foreach ( $requiredFields as $requiredField ) {
 if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {
 $missingFields[] = $requiredField;
 }
 }
 if ( $missingFields ) {
 displayLoginForm( $missingFields );
 } else {
 processform();
 }
}


function processform() {
 if ( isset( $_POST["username"] ) and isset( $_POST["password"] )  ) {
	 $a=$_POST["username"];
	 $b=$_POST["password"];
	$c=$_POST["fname"];
	$d=$_POST["lname"];
	$e=$_POST["email"];
	$f=$_POST["gender"];
	$g=$_POST["BirthMonth"];
	$h=$_POST["BirthDay"];
	$i=$_POST["BirthYear"];
	$j=$_POST["phone"];
	
	
	$k=$i.'-'.$g.'-'.$h;

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

$sql="INSERT INTO orga VALUES (NULL, '$c', '$d', '$a', '$b', '$e', '$k', '$f', '$j')";

try {
$st = $conn->query( $sql );
$st->execute();
 } 
catch ( PDOException $e ) {
 echo 'Query failed: ' . $e->getMessage();
}
 displayPage();
 }
}


function displayPage() {
 displayPageHeader();
?>
 <p >Welcome, <strong >!
<br> You are currently logged in. </p >
 <p > <a href="login.php?action=logout"> Logout </a > </p >
 </body >
 </html >
 <?php
}

function displayLoginForm( $missingFields ) {
 displayPageHeader();
?><?php setValue( "firstName" ) ?>
 <div id="header"><a href="#"><img src="logo.png" width="200" height="50"></a> </div>
 <div id="header2">
 <a href="https://twitter.com/"><img title="Twitter" src="Twitter.png" alt="Twitter" width="35" height="35" /></a>
 <a href="https://www.facebook.com/"><img title="facebook" src="fb.png" alt="facebook" width="35" height="35" /></a>
 <a href="https://plus.google.com/"><img title="googleplus" src="google+.png" alt="googleplus" width="35" height="35" /></a>
  <a href="https://www.pinterest.com/"><img tCorporate officeitle="pinterest" src="pinterest.png" alt="pinterest" width="35" height="35" /></a>
 </div>
<body>
<div  class="form">
    		<form id="contactform" action="re.php" method="post"> 
    			<p class="contact"><label for="fname" <?php validateField( "fname",
$missingFields ) ?>>Frist Name</label></p> 
    			<input id="name" name="fname" placeholder="First name" required="" tabindex="1" type="text" <?php setValue( "fname" ) ?>> 
    			 
				 <p class="contact"><label for="lname"<?php validateField( "lname",
$missingFields ) ?>>Last Name</label></p> 
    			<input id="name" name="lname" placeholder="last name" required="" tabindex="1" type="text" <?php setValue( "lname" ) ?>> 
    			 
    			<p class="contact"><label for="email"<?php validateField( "email",
$missingFields ) ?>>Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email" <?php setValue( "email" ) ?>> 
                
                <p class="contact"><label for="username" <?php validateField( "username",
$missingFields ) ?>>Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text" <?php setValue( "username" ) ?>>
    			 
                <p class="contact"><label for="password"<?php validateField( "password",
$missingFields ) ?>>Create a password</label></p> 
    			<input type="password" id="password" name="password" required="" > 
                
				<p class="contact"><label for="repassword">Confirm your password</label> </p>
    			<input type="password" id="repassword" name="repassword" required="">
        
               <fieldset style="width:550">
                 <br><label <?php validateField( "BirthMonth",
$missingFields ) ?>>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>  
                  </label>
                 </select>    
                <label <?php validateField( "BirthDay",
$missingFields ) ?>>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                <label <?php validateField( "BirthYear",
$missingFields ) ?>>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </fieldset></br>
  		
			<p class="contact"><label for="mygender" <?php validateField( "gender",
$missingFields ) ?>>i am..</label> </p>   	
            <select class="select-style gender" name="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select></br></br>
            
            <p class="contact"><label for="phone"<?php validateField( "phone",
$missingFields ) ?>>Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text" <?php setValue( "phone" ) ?>></br></br>
            <input class="button" name="submit" id="submit" tabindex="5" value="Sign up" type="submit"></br> 	 
   </form>
</div>   
</body>
</html>
 <?php
}
function displayPageHeader() {
?>

<!Doc html>
<html>
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
	
.form{
	background:#111222; width:450px; margin:0 auto; padding-left:50px; padding-top:20px;
}
.form fieldset{border:0px; padding:0px; margin:0px;}
.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:serif}

.form input[type="text"] { width: 400px; }
.form input[type="email"] { width: 400px; }
.form input[type="password"] { width: 400px; }
.form input.birthday{width:60px;}
.form input.birthyear{width:120px;}
.form label { color: white; font-weight:bold;font-size: 15px;font-family:serif; }
.form label.month {width: 135px;}
.form input, textarea { border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: serif; color: #000000; font-size: 14px; font-weight: bold; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
.form input:focus, textarea:focus { border: 1px solid #ff5400; background-color: rgba(255, 255, 255, 1); }
.form .select-style {
  -webkit-appearance: button;
  -webkit-border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  -webkit-padding-end: 20px;
  -webkit-padding-start: 2px;
  -webkit-user-select: none; 
 -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
  background-position: center;
  border: 0px solid #FFF;
  color: red;
  font-size: 14px;
  margin: 0;
  overflow: hidden;
  padding-top: 5px;
  padding-bottom: 5px;
  text-overflow: ellipsis;
  white-space: nowrap;
  }
.form .gender 
{
  width:410px;
 }
.form input.button
{ background: lime; display:block; padding: 5px 10px 6px; text-decoration: none; font-weight: bold; line-height: 1; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999; -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; border: none; position: relative; cursor: pointer; font-size: 14px; font-family:serif;}
.form input.button:hover
{ background-color: blue; }
.error{background-color:red;}
</style>
<body> 

 <?php
}
?>
