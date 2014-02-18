<?php

require_once 'login/classes/Membership.php';
$membership = New Membership();

$membership->confirm_Member();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/css2.css" />
<link rel="stylesheet" href="login/css/default.css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="login/js/DD_belatedPNG_0.0.7a-min.js"></script>
<![endif]-->


<title>Ultimate Athlete University</title>

<link rel="stylesheet" type="text/css" href="css/css2.css" />

</head>

<body>

<div id="container">
	<h5>
    	You have reached the camp sign-up page. We are undergoing construction, please contact us by phone or <a href="mailto:info@ultimateathleteuniversity.com">email</a> to sign-up for 2012 athletic camps. We will send an E-Mail Notification to you when online sign-ups are available.    
	</h5>
    <a href="index.html?status=loggedout">Log Out</a>
</div><!--end container-->
<br>
<form>
<fieldset>
<legend>Team Information:</legend>
<br>
<label>Team Name: </label><input type="text" name="teamname" /><br />
<label>School Name: </label><input type="text" name="schoolname" /><br />
<label>Head Coach First Name: </label><input type="text" name="hcfirstname"/><br />
<label>Head Coach Last Name: </label><input type="text" name="hclastname" /><br />
<label>Head Coach Work Phone: </label><input type="text" name="hcworkphone" /><br />
<label>Head Coach Cell Phone: </label><input type="text" name="hccellphone" /><br />
<label>Assistant Coach / Team Manager Name: </label><input type="text" name="assistancoach" /><br />
<label>Assistant Coach / Team Manager Phone: </label><input type="text" name="acphone" /><br />
<label>Team Email: </label><input type="text" name="teamemail" /><br />
<label>Team Address: </label><input type="text" name="adress" size="30"/><br />
<label>Team City: </label><input type="text" name="city"  /><br />
<label>Team State: </label> <select name="state" >
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">Dist of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select><br /><br>
<label>Team Zip: </label> <input type="text" name="zip" />
<br>
<input type="submit" value="Save / Update" />

</fieldset>
</form>
</body>
</html>
