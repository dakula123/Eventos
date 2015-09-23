<!DOCTYPE html>
<html lang="en-US">
<head>
<script type="text/javascript">
function showDiv(idInfo) {
  var sel = document.getElementById('divlinks').getElementsByTagName('div');
  for (var i=0; i<sel.length; i++) {
    sel[i].style.display = 'none';
  }
  document.getElementById('container'+idInfo).style.display = 'block';
}
</script>
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
	ul
	{
	float:left;
	list-style:none;
    margin:0px auto;
	}
	.menu > li {
    float:left;
    display:inline-block;
    font-size:19px;
	padding:8 px;
    }
    .menu > li > a {
	text-decoration:none;
    padding:10px 40px;
    display:block;
    text-shadow:0px 1px 0px rgba(0,0,0,0.4);
    }
	.menu li:hover > a
	{
    text-decoration:none;
    color:#be5b70;
    background:#2e2728;
    }
   	#content
	{
	width:100%;
	height:550px;
	float:left;
    }
	#footer {
	    height:50 px;
		width:100%;
		float:left;
		margin-bottom: 10px;
	}
.form{
	background:#99CCFF ; width:450px; margin:0 auto; padding-left:50px; padding-top:20px;
}
.form fieldset{border:0px; padding:0px; margin:0px;}
.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:serif}

.form input[type="text"] { width: 400px; }
.form input[type="email"] { width: 400px; }
.form input[type="password"] { width: 400px; }
.form input.birthday{width:60px;}
.form input.birthyear{width:120px;}
.form label { color: Blue; font-weight:bold;font-size: 15px;font-family:serif; }
.form label.month {width: 135px;}
.form input, textarea { border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: serif; color: red; font-size: 14px; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
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
.tg  {float:left;width:100%;border-collapse:collapse;border-spacing:0;border-color:#999;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:14px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:14px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-infz{font-weight:bold;font-size:16px;font-family:"Times New Roman", Times, serif !important;;background-color:#fe0000;color:#ffffff}
.tg .tg-56bi{background-color:#99CCFF;color:#000000}
</style>
</head>
<body onload="showDiv('1');return false"> 
 <div id="header"><a href="#"><img src="logo.png" width="200" height="50"></a> </div>
 <div id="header2">
 <a href="https://twitter.com/"><img title="Twitter" src="Twitter.png" alt="Twitter" width="35" height="35" /></a>
 <a href="https://www.facebook.com/"><img title="facebook" src="fb.png" alt="facebook" width="35" height="35" /></a>
 <a href="https://plus.google.com/"><img title="googleplus" src="google+.png" alt="googleplus" width="35" height="35" /></a>
  <a href="https://www.pinterest.com/"><img title="pinterest" src="pinterest.png" alt="pinterest" width="35" height="35" /></a>
 </div>
 
  <div id="navigation">
  <ul class="menu">
  <li><a href="My Profile" Onclick="showDiv('1');return false">My Profile</a></li>
   <li><a href="My Events" Onclick="showDiv('2');return false">My Events</a></li>
  <li><a href="Schedule" Onclick="showDiv('3');return false" >Schedule</a></li>
  <li><a href="Track Events" Onclick="showDiv('4');return false">Track</a></li>
  <li><a href="Help" Onclick="showDiv('5');return false">Help</a></li>
  </div>
  <div id="divlinks" width="100%" height="550px">
    <div id = "container1">
    		<form id="contactform" class="form" style = "margin-top: 5em;"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="password">Change password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label> </p>
    			<input type="password" id="repassword" name="repassword" required="">
        
               <fieldset style="width:550" align="center" >
                 <label>Birthday</label>
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
                <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </fieldset></br>
  
            <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select></br></br>
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"></br></br>
            <p><input class="button" name="edit" id="edit" tabindex="5" value="Edit" type="submit"><input class="button" name="save" id="save" tabindex="5" value="Save" type="submit"></p></br> 	 
   </form>
   </div>
      <div id="container2">
	  <table class="tg" style = "margin-top: 3em">
  <tr>
    <th class="tg-infz">Event id</th>
    <th class="tg-infz">Event Name</th>
    <th class="tg-infz">Event Start Date</th>
    <th class="tg-infz">Event End Date</th>
    <th class="tg-infz">Total Number of Days</th>
    <th class="tg-infz">Paid Amount</th>
    <th class="tg-infz">Comments            </th>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
</table>
</div>
      
      <div id="container3"><p>
	  <form id="contactform" class="form" style = "margin-top: 5em;"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="EventName" required="" tabindex="1" type="text"> 
				<form id="contactform" class="form"> 
    			<p class="contact"><label for="Description">Description</label></p> 
    			<input id="Description" name="Description" placeholder="Description" required="" tabindex="1" type="text">
				<p class="contact"><label for="Time">Time</label></p> 
				<select class="Time" name="Time">
                <option value="8.00 am - 12.00 pm">8.00 am - 12.00 pm</option>
                <option value="1.00 pm - 5.00 pm">1.00 pm - 5.00 pm</option>
                <option value="7.00 pm - 11.00 pm">7.00 pm - 11.00 pm</option>
                <option value="First two slots">First two slots</option>
				<option value="Last two slots">Last two slots</option>
				<option value="First and Last slots">First and Last slots</option>
               </select>
                <p class="contact"><label for="Start date">Start date</label> 
                <input id="start" style="width: 40%"/><img title="calendar" src="Calender.jpg" alt="calendar" width="35" height="35" style top-margin="2em" /></p>
                <p class="contact"><label for="End date">End date</label> 
                <input id="end" style="width: 40%"/><img title="calendar" src="Calender.jpg" alt="calendar" width="35" height="35" /></p>	
			   <p> <button formnovalidate="formnovalidate" name="action" value="add">Add</button> 
               <button name="action" value="update">Save</button> </p>				
           

        </div>      
      <div id="container4">
  <table class="tg" style = "margin-top: 3em">
  <tr>
    <th class="tg-infz">Event id</th>
    <th class="tg-infz">Event Name</th>
    <th class="tg-infz">Event Start Date</th>
    <th class="tg-infz">Event End Date</th>
    <th class="tg-infz">Total Number of Days</th>
    <th class="tg-infz">Paid Amount</th>
    <th class="tg-infz">Comments            </th>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
  <tr>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
    <td class="tg-56bi"></td>
  </tr>
</table>
       </div>
	  <div id="container5"><p> Write descrip of 5
       </div>
	   </div>
 <div id="footer">
copyright@EVENTOS   2015 </div>
 </body>
 </html>
