<html>
<head>
    
</head>
<body>
<?php
$con = mysql_connect("localhost","kk","1234");
if(!$con){
    die("Can not connect: " .mysql_error());    
}
if (mysql_query("CREATE DATABASE formdetails", $con)){
    echo "Congrats Your Database is Created";
}
    else echo "Error: ".mysql_error();
    

mysql_close($con);
?>
</body>
</html>