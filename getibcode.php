<?php require_once("inc/session.php");?>
<?php adminl2();?>
<?php require_once("inc/connection.php");?>
<?php 
if(isset($_POST['rere'])){
		$username=$_POST['reus'];
	
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
<p><textarea cols="40" rows="7" id="reuss" name="reus" readonly>
<?php
$ken=$_GET['val'];
$query="SELECT * from user WHERE usek='$ken'";
$result=mysql_query($query,$connection);
if(mysql_num_rows($result)==1){
	$result_set=mysql_fetch_array($result);
	$jen=$result_set['usek'];
	$mike=$_SESSION['kent'];
	$queryuh="SELECT * FROM img WHERE name='$mike'";
	$resultuh=mysql_query($queryuh,$connection);
	if(mysql_num_rows($resultuh)==1){
$resultset=mysql_fetch_array($resultuh);
$imgna=$resultset['name'];
$wid=$resultset['width'];
$hig=$resultset['height'];
echo"<a href=\"http://www.fxdmtrader.com/lregister.php?IBRefrenceNumber=$jen\"><img src=\"http://www.fxdmtrader.com/imgg/".$imgna."\" width=\"".$wid."\" height=\"".$hig."\"></a>";

	}
	else{
		
	//error selecting from image	
	}
}
else{
//error selecting	
	
}
?>

</textarea>
</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p><a href="lregister.php?IBRefrenceNumber=<?php echo $jen ?>" target="_new"><img src="imgg/<?php

echo $imgna;

?>" width="<?php

echo $wid;

?>" height="<?php

echo $hig;

?>"></a></p>

<p>&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p><a href="ibbanner.php">Cancel</a></p>
</form>
</div>

</div>
</body>
</html>