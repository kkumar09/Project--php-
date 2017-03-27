<html>
<head>
    
</head>
<body>
<?php
$con = mysql_connect("localhost","kk","1234");
if(!$con){
    die("Can not connect: " .mysql_error());
}

mysql_close($con);
?>
</body>
</html>