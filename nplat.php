<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="stylesheets/dash.css" />
</head>

<body>
<div id="containerr">
<div id="head">
<div id="hell">
&nbsp;&nbsp;
</div>
<div id="hell2">
<a href="#"><font color="#FFF">Dashboard</font></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Support</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Live Chat</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><?php
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
<p><a href="client.php">Dashboard</a></p>
</div>
<div id="head5">
</div>

<div id="head4">
<p><a href="editprofile.php">Personal Data</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Documents</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Account Management</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="baif.php">Bank Information</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="deposit.php">Deposit Funds</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="withdraw.php">Withdraw Funds</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="transfer.php">Transfer Funds</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="mplat.php">Platforms</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="downlines.php">Affiliate Downlines</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p><a href="affiliatec.php">Affiliate Comission</a></p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Foreing Exchange</p>
</div>


</div>
<div id="head3">

<div id="edt">
<img src="images/doi.png" height="40" width="40" /><p>Desktop Platform</p>
</div>

<div id="edt2">
</div>



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
