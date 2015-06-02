<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "fxd";

mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

mysql_select_db($database) or die("Can not select the database: ".mysql_error());

$id = $_GET['id'];

$query = mysql_query("SELECT img FROM currency  WHERE id=$id");
$row = mysql_fetch_assoc($query);

header('Content-type: image/jpg');
       echo $row['img'];





?>
<html>
<head>
<title>hello</title>
</head>
<body>

</body>
</html>