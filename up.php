<?php require_once("includes/session.php");?>
<?php require_once("includes/connection.php");?>
<?php 
if(isset($_POST['mtken4'])){
	$kenn=$_POST['ssur'];
	$mta=$_POST['mtken'];
	$mpass=$_POST['mtken2'];
	$inpass=$_POST['mtken3'];
		$queryas="UPDATE user SET
		mta='$mta'
		WHERE username='kent'";
		$result=mysql_query($queryas,$connection);
		if(mysql_affected_rows()==1){
$mess="Company News Updated";	
}
else{
$mess="error";
$mess.=mysql_error();	
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
</table>
</form>
<form action="up.php" method="post" id="formadah" name="dform">
<table width="700px">
<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<?php
$ken=$_POST['ssur'];
$query="SELECT * FROM user WHERE username='{$ken}'";
$rest=mysql_query($query,$connection);
if(mysql_num_rows($rest)==1){
	$rst=mysql_fetch_array($rest);
echo"<tr><td>MT4 Number:&nbsp;<input type=\"text\" name=\"mtken\" id=\"sbu\" value=\"{$rst['mta']}\"></td></tr>";	
echo"<tr><td>Master Pass:&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"mtken2\" id=\"sbu\" value=\"{$rst['mpass']}\"></td></tr>";
echo"<tr><td>Investor Pass:&nbsp;<input type=\"text\" name=\"mtken3\" id=\"sbu\" value=\"{$rst['inpass']}\"></td></tr>";
echo"<tr><td>&nbsp;&nbsp;</td></tr>";
echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" name=\"mtken4\" id=\"sbu\" value=\"Edit {$rst['username']}'s Data\"></td></tr>";
}

?>
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
