<?php require_once("inc/session.php");?>
<?php  jen();?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['st2'])){
	$eema2=$_POST['eema2'];
$efna=$_POST['efna'];
$eema3=$_POST['eema3'];
$user=$_SESSION['aakenn'];
$dater=date("Y-m-d");
$query="INSERT INTO transfer(trf,amt,trt,truser,dater) VALUES('{$eema2}','{$efna}','{$eema3}','{$user}','{$dater}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	
	$to="operations@fxdmtrader.com";
	$subject="TRANSFER REQUEST";
	$header="\n";
	$message="TRANSFER DETAILS"."\n"."\n";
	$message.="TRANSFER FROM".$eema2."\n"."\n";
	$message.="AMOUNT".$efna."\n"."\n";
	$message.="TRANSFER TO".$eema3."\n"."\n";
		if(mail($to,$subject,$header,$message)){
$mess="Your request will be processed as soon as posible";
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	
	}
else{
$mess="error";	
}
}
else{
//not clicked	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/dash.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/dash2.css" />
</head>

<body>
<div id="containerr">
<div id="head">
<div id="hell">
&nbsp;&nbsp;
</div>
<div id="hell2">
<a href="client.php"><font color="#FFF">Dashboard</font></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Support</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Live Chat</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><?php
$ken=$_SESSION['aakenn']; 
$query="SELECT * FROM user WHERE username='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$results=mysql_fetch_array($result);
echo $results['fullname'];	
}
else{
echo mysql_error();	
}

  ?></a><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Sign Out</a>
</div>
</div>
<div id="head1">
<div id="head2">
<div id="head4">
<p><img src="images/home.png" heght="20" width="20" /><a href="client.php">Dashboard</a></p>
</div>
<div id="head5">
</div>

<div id="head4">
<p><img src="images/profile_icon.png" heght="23" width="23" /><a href="editprofile.php">Personal Data</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/doc.png" heght="23" width="23" /><a href="doc.php">Documents</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/acc.png" heght="23" width="23" /><a href="accountm.php">Account Management</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/bank.png" heght="23" width="23" /><a href="baif.php">Bank Information</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/deposite.png" heght="23" width="23" /><a href="deposit.php">Deposit Funds</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/withdraw.png" heght="23" width="23" /><a href="withdraw.php">Withdraw Funds</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/ftp_icon.png" heght="23" width="23" /><a href="transfer.php">Transfer Funds</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/doi.png" heght="23" width="23" /><a href="mplat.php">Platforms</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/downlines.png" heght="20" width="20" /><a href="downlines.php">Affiliate Clients</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/downlines.png" heght="20" width="20" /><a href="affiliatec.php">E-Payment</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><img src="images/fx.png" heght="20" width="20" /><a href="foreign.php">Foreign Exchange</a></p>
</div>

</div>
<div id="head33a">

<div id="edt">
<img src="images/ftp_icon.png" height="40" width="40" /><p>Transfer Funds</p>
</div>
<div id="edt2">
</div>

<div id="edt3">
<form action="" method="post" id="emaf" name="emaf">
<p><b>Transfer From</b></p>
<p><input type="text" name="eema2" id="eema"  /></p>
<p>&nbsp;&nbsp;</p>
<p><b>Amount $</b></p>
<p><input type="text" name="efna" id="eema" /></p>

<p>&nbsp;&nbsp;</p>
<p><b>Transfer To</b></p>
<p><input type="text" name="eema3" id="eema"  /></p>

<p>&nbsp;&nbsp;</p>
<p><input type="submit" name="st2" id="st2" value="Transfer" /></p>
</form>
</div>

<div id="edt">
<p>&nbsp;&nbsp;&nbsp;&nbsp;Recent Transfer</p>
</div>
<div id="edt2">
</div>

<table id="kai2" name="kai2" border="0px" width="790px">
<tr><td><b>Amount ID</b></td><td><b>Amount</b></td><td><b>Transfer To</b></td><td><b>Date</b></td><td><b>Status</b></td></tr>
<?php
$user=$_SESSION['aakenn'];
$id=$_SESSION['iaakenn'];
$uid=$user.$id;
$query="SELECT * FROM transfer WHERE truser='$user'";
$result=mysql_query($query,$connection);
while($result_set=mysql_fetch_array($result)){
	echo"<tr>";
	echo"<td>";
	echo"{$result_set['id']}";
	echo"</td>";
	echo"<td>";
	echo"{$result_set['amt']}";
	echo"</td>";
	echo"<td>";
	echo"{$result_set['trt']}";
	echo"</td>";
	echo"<td>";
	echo"{$result_set['dater']}";
	echo"</td>";
	echo"<td>";
	echo"{$result_set['status']}";
	echo"</td>";
	echo"</tr>";
	
	
}


?>
</table>


</div>


</div>
<div id="las">
<div id="las1">
<p>Home&nbsp;&nbsp;|&nbsp;&nbsp;About us&nbsp;&nbsp;|&nbsp;&nbsp;Careers&nbsp;&nbsp;|&nbsp;&nbsp;Contact us</p>
</div>
</div>
</div>
</body>
</html>
