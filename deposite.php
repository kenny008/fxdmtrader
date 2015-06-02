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
<p>Widthdraw Funds</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Transfer Funds</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Platforms</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Affiliate Downlines</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Affiliate Comission</p>
</div>
<div id="head5">
</div>
<div id="head4">
<p>Marketing Tools</p>
</div>


</div>
<div id="head3">

<div id="edt">
<img src="images/bank.png" height="40" width="40" /><p>Edit Bank Info</p>
</div>
<div id="edt2">
</div>
<div id="edt3">
<form action="" method="post" id="emaf" name="emaf">
<p><b>Bank Name</b></p>
<p><input type="text" name="eema" id="eema"  value="<?php
$ken=$_SESSION['aakenn']; 
$query="SELECT * FROM user WHERE username='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$results=mysql_fetch_array($result);
echo"&nbsp;&nbsp;";
echo $results['bna'];	
}
else{
echo mysql_error();	
}

  ?>"/></p>
<p>&nbsp;&nbsp;</p>
<p><b>Account Name</b></p>
<p><input type="text" name="efna" id="eema" value="<?php
$ken=$_SESSION['aakenn']; 
$query="SELECT * FROM user WHERE username='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$results=mysql_fetch_array($result);
echo"&nbsp;&nbsp;";
echo $results['actna'];	
}
else{
echo mysql_error();	
}

  ?>"/></p>
<p>&nbsp;&nbsp;</p>
<p><b>Account Number</b></p>
<p><input type="text" name="ephn" id="eema" value="<?php
$ken=$_SESSION['aakenn']; 
$query="SELECT * FROM user WHERE username='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$results=mysql_fetch_array($result);
echo"&nbsp;&nbsp;";
echo $results['actnu'];	
}
else{
echo mysql_error();	
}

  ?>"/></p>
<p>&nbsp;&nbsp;</p>
<p><b>Phone</b></p>
<p><input type="text" name="edob" id="eema" value="<?php
$ken=$_SESSION['aakenn']; 
$query="SELECT * FROM user WHERE username='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
$results=mysql_fetch_array($result);
echo"&nbsp;&nbsp;";
echo $results['telephone'];	
}
else{
echo mysql_error();	
}

  ?>"/></p>

<p>&nbsp;&nbsp;</p>
<p><input type="submit" name="st2" id="st2" value="Update Bank Info" /></p>
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
>
