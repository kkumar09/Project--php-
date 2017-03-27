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
    
$sql = "SELECT * FROM loginform";
$myData = mysql_query($sql,$con);

echo "<table border=1>
	<tr>
	<th>user</th>
	<th>email</th>
	<th>Gender</th>
	<th>Ethinicity</th>
	<th>animal</th>
	</tr>";
while($record = mysql_fetch_array($myData)){
	echo "<tr>";
	echo "<td>".$record['user']. "</td>";
	echo "<td>".$record['email']. "</td>";
	echo "<td>".$record['Gender']. "</td>";
	echo "<td>".$record['Ethinicity']. "</td>";
	echo "<td>".$record['animal']. "</td>";
	echo "</tr>";
}
echo "</table>";
	
mysql_close($con);

?>
	


	
</body>
</html>