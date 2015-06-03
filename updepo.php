<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['mtken4'])){
$mt4=$_POST['mtken'];
$mpass=$_POST['mtken2'];
$inpass=$_POST['mtken3'];
$hll=$_SESSION['test'];
$query="UPDATE user SET
mta='$mt4',
mpass='$mpass',
inpass='$inpass'
WHERE username='$hll'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1)
{
$message="Successfully";
}
else{
$message="error";
$message.=mysql_error();	
}
}
else{
if($_GET['test']!=NULL){
	$ken=$_GET['test'];
	$query="SELECT * FROM depo WHERE id='$ken'";
	$result=mysql_query($query,$connection);
	if(mysql_num_rows($result)){
		$rre=mysql_fetch_array($result);
		$message=$rre['duser']."'s". " Deposit have being approved";
	}
	else{
	$message="error";
	$message.=mysql_error();	
	}
}
	
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
<form action="" method="post" id="formadah" name="formadah">
<table width="700px">
<tr><td>
Username:&nbsp;<select id="ssur" name="ssur">
<?php
$query="SELECT DISTINCT duser from depo WHERE status='Pending'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
echo"<option value=\"{$result_set['duser']}\">";	
echo"{$result_set['duser']}";
echo"</option>";
	
}

?>
</select>
<input type="submit" name="sbu" id="sbu" value="SEARCH">


</td></tr>
</table>
</form>
<form action="" method="post" id="formadah" name="dform">
<table width="600px">
<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<?php
if(isset($_POST['sbu'])){
$ken=$_POST['ssur'];
$query="SELECT * FROM depo WHERE duser='{$ken}' AND status='Pending'";
$rest=mysql_query($query,$connection);
while($rst=mysql_fetch_array($rest)){
	$_SESSION['test']=$rst['duser'];
	echo"<tr><td>";

echo $rst['mt4a'];	

echo"</td>";
echo"<td>";

echo $rst['amt'];	

echo"</td>";
echo"<td>";
$queryhi="SELECT * FROM user WHERE username='{$rst['duser']}'";
$resulthi=mysql_query($queryhi,$connection);
if(mysql_num_rows($resulthi)==1){
	$rite=mysql_fetch_array($resulthi);
echo $rite['fullname'];	
}
echo"</td>";
echo"<td>";

echo $rst['dater'];	

echo"</td>";
echo"<td>";

echo "<a href=\"upstat.php?ken={$rst['id']}\">".$rst['status']."</a>";	
echo"</td></tr>";
}
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
