<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
$hello=$_GET['ken'];
$query="UPDATE depo SET
status='Approved'
WHERE id='$hello'";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
header("Location:updepo.php?test=$hello");
exit;
}
else{
	$message="error";
$message.= mysql_error();	
}
?>

<?php 
if(!empty($message)){
echo"<div id=\"mess\">$message</div>";	
}
?>

