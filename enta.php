<?php require_once("inc/session.php");?>
<?php  jen();?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['sub2'])){
$bid=$_POST['bid'];
$bid2=$_POST['bid2'];
$query="UPDATE user SET
		ap='{$bid}',
		BN='{$bid2}'

		WHERE id={$_SESSION['iaakenn']}";
		$result=mysql_query($query,$connection);
		if(mysql_affected_rows()==1){
		header("Location:epay.php");
		exit;
		}
		else{
			echo mysql_error();
		}

}
else{
	
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
<div id="head3">

<div id="edt">
<img src="images/downlines.png" height="40" width="40" /><p>E-Payment</p>
</div>

<div id="edt2">
</div>
<div id="edt3">
<?php
$query="SELECT * FROM user WHERE username='{$_SESSION['aakenn']}'";
$resu=mysql_query($query,$connection);
if(mysql_num_rows($resu)==1){
$res=mysql_fetch_array($resu);	
}
else{
	
}

?>
<form action="" method="post" id="emaf">
<p>Intended Deposit: <input type="number" min="5" value="<?php  echo"{$res['ap']}";?>" name="bid" id="eema"/></p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base Currency: <select name="bid2" id="eema">
<option value="USD"

<?php   

$querysw="SELECT * FROM user WHERE username='{$_SESSION['aakenn']}'";
$resu=mysql_query($querysw,$connection);
$resulk=mysql_fetch_array($resu);
if($resulk['BN']=='USD'){
	echo" selected";
}

?>>USD</option>
<option value="GBP" 
<?php   

$querysw="SELECT * FROM user WHERE username='{$_SESSION['aakenn']}'";
$resu=mysql_query($querysw,$connection);
$resulk=mysql_fetch_array($resu);
if($resulk['BN']=='GBP'){
	echo" selected";
}

?>>GBP</option>
<option value="EUR"

<?php   

$querysw="SELECT * FROM user WHERE username='{$_SESSION['aakenn']}'";
$resu=mysql_query($querysw,$connection);
$resulk=mysql_fetch_array($resu);
if($resulk['BN']=='EUR'){
	echo" selected";
}

?>>EUR</option>


</select>
</p>
<p>&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="st2" name="sub2" value="Update" /></p>
</form>
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
