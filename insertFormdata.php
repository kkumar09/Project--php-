<html>
<head>
    
</head>
<body>
	
<form action="insertFormdata.php" method="post">

  <fieldset>
	<legend>Text input</legend>
	<p>
		<label>User</label>
		<input type = "text" id = "myText" name="user" value = "text here" />
	</p>
	<p>
		<label>Email</label>
		<input type = "email" id = "myemail" name="email" value = "email@.com" />
	</p>
  </fieldset>
	<br>

  <fieldset>
	<label>Select a Number</label> 
	<select name="Gender">
		<option  value="Male">Male</option>
		<option  value="Female">Female</option>
		<option></option>
	</select>

  </fieldset>
<br>

<fieldset> 
	<legend>What is Your Ethinicity?</legend>
	<input type="checkbox" name="Ethinicity" value="Asian" />Asian <br />
	<input type="checkbox" name="Ethinicity" value="Hispanic or latin" />Hispanic or latin<br />
	<input type="checkbox" name="Ethinicity" value="African" />African<br />
	<input type="checkbox" name="Ethinicity" value="other" />other<br />
</fieldset>

<fieldset>
	<legend>What is Your Favorite Pet?</legend>
	<input type="checkbox" name="animal" value="Cat" />Cats <br />
	<input type="checkbox" name="animal" value="Dog" />Dogs<br />
	<input type="checkbox" name="animal" value="Bird" />Birds<br />
	<input type="checkbox" name="animal" value="insects" />insects<br />
</fieldset>

<fieldset>
	<legend>Text Area</legend>
	<p><textarea id = "myTextArea" name="textareainfo" rows = "6" cols = "100">Your text here</textarea></p>
</fieldset><br>

<input type="submit" name="submit" value="Submit now" />

</form>	
	
	
	
<?php
	
if(isset($_POST['submit'])){	
$con = mysql_connect("localhost","kk","1234");
if(!$con){
    die("Can not connect: " .mysql_error());    
}

mysql_select_db("formdetails",$con);
    
$sql = "INSERT INTO loginform   (user,email,Gender,Ethinicity,animal) VALUES('$_POST[user]','$_POST[email]','$_POST[Gender]','$_POST[Ethinicity]','$_POST[animal]')";
	
mysql_query($sql,$con);
	
mysql_close($con);
}
?>
	


	
</body>
</html>