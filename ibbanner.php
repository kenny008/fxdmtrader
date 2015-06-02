<?php require_once("inc/session.php");?>
<?php adminl2();?>
<?php require_once("inc/connection.php");?>
<?php 
if(isset($_POST['rere'])){
		$username=$_POST['reus'];
		$reus=$_POST['reus2'];
		$_SESSION['kent']=$reus;
	header("Location:getibcode.php?val=$username");
	exit;
}
else{
	//not clicked
	

}

?>
<html>
<head>
<link rel="shortcut icon" href="images/p.jpg" />
<link rel="stylesheet" href="stylesheets/adminpage.css">
</head>
<body>
<div id="container">
<div id="adpage">
<div id="adpage1">
<p>FXDM TRADER</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+1">ADMIN PAGE</font>
</div>
<div id="adpage2">
</div>
</div>
<div id="nav">
<div id="nav1">
</div>
</div>
<div id="headz">



</div>
<div id="addcot">
<?php 
if(!empty($message)){
echo"<div id=\"mess\">$message</div>";	
}
?>
<form action="" method="post" name="reform" id="reform">
<p><font color="#FF0000">*</font>Full Name:&nbsp;<select id="reus" name="reus">
<?php
$query="SELECT * from user ORDER BY fullname ASC";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['usek']}\">";	
echo"{$result_set['fullname']}";
echo"</option>";
	
}

?>

</select>
</p>
<p><font color="#FF0000">*</font>Image:&nbsp;<select id="reus" name="reus2">
<?php
$query="SELECT * from img";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['name']}\">";	
echo"{$result_set['name']}";
echo"</option>";
	
}

?>

</select>
</p>
<p><input type="submit" value="Get IB Code" id="rere" name="rere">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminpage.php">Cancel</a></p>
</form>
</div>

</div>
</body>
</html>