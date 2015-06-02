<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['upload'])){
	$ken=$_SESSION['eaakenn'];
//This is the directory where images will be saved
$target = "pics/";
$target = $target . basename( $_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['Filename']['name']);
$Description=$_POST['Description'];


//Writes the Filename to the server
if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
    //Tells you if its all ok
    $mess= "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
    // Connects to your Database
    mysql_connect("localhost", "root", "") or die(mysql_error()) ;
    mysql_select_db("fxd") or die(mysql_error()) ;

    //Writes the information to the database
	$id=$_SESSION['iaakenn'];
    mysql_query("UPDATE user SET
	Filename='$Filename'
	WHERE id='$id'") ;
} else {
    //Gives and error if its not
    $mess= "Sorry, there was a problem uploading your file.";
}

}

?>

<?php
if(isset($_POST['upload2'])){
	$ken=$_SESSION['eaakenn'];
//This is the directory where images will be saved
$target = "pics/";
$target = $target . basename( $_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['Filename']['name']);
$Description=$_POST['Description'];


//Writes the Filename to the server
if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
    //Tells you if its all ok
    $mess= "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
    // Connects to your Database
    mysql_connect("localhost", "root", "") or die(mysql_error()) ;
    mysql_select_db("fxd") or die(mysql_error()) ;

    //Writes the information to the database
	$id=$_SESSION['iaakenn'];
    mysql_query("UPDATE user SET
	Pof='$Filename'
	WHERE id='$id'") ;
} else {
    //Gives and error if its not
    $mess= "Sorry, there was a problem uploading your file.";
}

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
<?php 
if(!empty($mess)){
echo"<div id=\"mess\">$mess</div>";	
}
?>
<div id="edt">
<img src="images/doc.png" height="40" width="40" /><p>Documents</p>
</div>

<div id="edt2">
</div>
<div id="edy">
<p>Please upload your Goverment Registered ID (e.g Voters card, National ID Card or Drivers License) and Proof of Address (e.g Bank Statment, Utility Bill)</p>
</div>
<form enctype="multipart/form-data" method="post" id="formadd" name="formadd">
 <input type="file" name="Filename" id="upid"> 
<p>&nbsp;&nbsp;</p>
<p><input type="submit" name="upload" id="st4" value="Upload ID" /></p>
</form>

<form enctype="multipart/form-data" method="post" id="formadd" name="formadd">
 <input type="file" name="Filename" id="upid"> 
<p>&nbsp;&nbsp;</p>
<p><input type="submit" name="upload2" id="st4k" value="Proof of Address" /></p>
</form>
<div id="edtt">

</div>
<div id="kai">
&nbsp;&nbsp;
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
