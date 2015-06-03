<?php require_once("includes/session.php");?>

<?php require_once("includes/connection.php");?>
<?php 
if(isset($_POST['addsub'])){
		$username=$_POST['aduser'];
	$password=$_POST['addpass'];
	$hashed_password=sha1($password);
	$go=true;
	$query1="SELECT username FROM admin";
	$user_set=mysql_query($query1,$connection);
	while($usern=mysql_fetch_array($user_set)){
	if($usern['username']==$username)
	{
		$message="username already exists";
		$go=false;
		
	}
	
	}
	if($go!=false){
	$query="INSERT INTO admin(username,hashed_password) 
	VALUES('{$username}','{$hashed_password}')";
	$result=mysql_query($query,$connection);
	if(mysql_affected_rows()==1){
		$message="User added Successfully";
	}
	else{
	$message="insert failed ";
	$message.=mysql_error();	
	}
	}
}
else{
	
	

}

?>
<html>
<head>
<link rel="shortcut icon" href="images/moneytree.jpg" />
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
<p></p>
</div>
<div id="addcot">
<?php 
if(!empty($message)){
echo"<div id=\"mess\">$message</div>";	
}
?>
<form action="up.php" method="post" id="formadah" name="formadah">
<table width="700px">
<tr><td>
Username:&nbsp;<select id="ssur" name="ssur">
<?php
$query="SELECT username from user";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['username']}\">";	
echo"{$result_set['username']}";
echo"</option>";
	
}

?>
</select>
<input type="submit" name="sbu" id="sbu" value="SEARCH">


</td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td><a href="adminpage.php"><font color="#0000CC">Back</font></a></td></tr>
</table>
</form>
</div>
<div id="end">
<p align="center">&copy;2012 IstartMoneyTree all rights reserved</p>
</div>
</div>
</body>
</html>
