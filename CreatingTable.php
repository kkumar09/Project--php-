<html>
<head>
    
</head>
<body>
<?php
$con = mysql_connect("localhost","kk","1234");
if(!$con){
    die("Can not connect: " .mysql_error());    
}

mysql_select_db("formdetails",$con);
    
$sql = "CREATE TABLE loginform (
user varchar(20) NOT NULL,email varchar(30) NOT NULL, Gender varchar(7) NOT NULL, Ethinicity varchar(25) NOT NULL, animal varchar(10) NOT NULL
)";
	
mysql_query($sql,$con);
	
mysql_close($con);
?>
</body>
</html>

	