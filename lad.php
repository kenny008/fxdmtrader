<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<?php   
if(isset($_POST['nam7'])){
	
	$fname=$_POST['nam'];
	$lname=$_POST['nam2'];
	$email=$_POST['nam3'];
	$cont=$_POST['nam4'];
	$pho=$_POST['nam5'];
	$intd=$_POST['nam6'];
	$to="mike.fowope@fxdmtrader.com";
	$subject="BONUS REQUEST";
	$header="FROM: BONUS REQUEST\n";
	$message="BONUS REQUEST DETAILS"."\n"."\n";
	$message.="FULL NAME: ".$fname."\n"."\n";
	$message.="LAST NAME: ".$lname."\n"."\n";
	$message.="EMAIL: ".$email."\n"."\n";
	$message.="COUNTRY: ".$cont."\n"."\n";
	$message.="PHONE: ".$pho."\n"."\n";
	$message.="INTENDED DEPOSIT: ".$intd."\n"."\n";
		if(mail($to,$subject,$header,$message)){
echo '<script type="text/javascript">
        window.alert("Your Request is Being Processed, Thank You.")
        </script>';
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
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
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/lad.css"/>
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/lad2.css"/>
<!-- Facebook Conversion Code for Read more -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6017473161565', {'value':'0.01','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017473161565&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
</head>

<body>
<div id="containerr">
<div id="head">
<div id="head1">
<div id="head2">
<div id="hd">
<p>FXDM Trader Bonus</p>
</div>
<div id="hd2">
<table border="1px" width="500px" id="tab"><tr><td align="center" bgcolor="#009ddc">Minimum Deposit in $</td><td align="center" bgcolor="#009ddc">First Deposit in $</td><td align="center" bgcolor="#009ddc">Required minimum trading volume to withdraw bonus</td></tr><tr><td align="center">100</td><td align="center">25</td><td align="center">4.0</td></tr><tr bgcolor="#CCCCCC"><td align="center">200</td><td align="center">50</td><td align="center">7.0</td></tr><tr><td align="center">500</td><td align="center">125</td><td align="center">15</td></tr>
<tr bgcolor="#CCCCCC"><td align="center">1000</td><td align="center">250</td><td align="center">35</td></tr><tr><td align="center">2000</td><td align="center">500</td><td align="center">70</td></tr></table>
</div>
<div id="hd3">
<p>Welcome Bonus Terms $ Conditions</p>
</div>
<div id="hd4">
<p>As a new FXDM Client during the promotional period and upon request, the bonus is added to your account upon account     opening and receipt of the first deposit. <br /><br />The bonus size is determined by the size of the first deposit and not any subsequent deposits.<br /><br />The bonus will be credited to your account after all identification documents are verified. <br /><br />Once your account has been opened and funded to claim your bonus you must send an email to operations@fxdmtrader.com     prior to commencing trading. The welcome bonus will be added to your account provided that all requirements set out in these     Terms & Conditions are met.<br /><br />In order to withdraw your free bonus, you are required to execute a minimum trading volume as specified in the table above for     bonus received before 31st October 2014.<br /><br />If you fail to trade the required minimum trading volume on or before 90 days of your deposit, your bonus will be cancelled and     removed from your account.<br /><br />The volume requirements in the above table are for FX pairs. For CFD's, a 1 lot trade is equivalent to 0.1 standard lots for the     purpose of volume calculation.<br /><br /> Until the required minimum trading volume has been achieved, the welcome bonus can only be used as initial margin and will not     be taken into account when calculating the account's liquidation level. Once the required minimum trading volume has been     achieved the welcome bonus is added to the account balance and can be withdrawn.<br /><br /> If you wish to withdraw funds from your account before the required minimum trading volume has been achieved, the bonus will     be withdrawn from your account before any funds are paid out.<br /><br />FXDM has the right to decide not to accept a client for whatever reason.<br /><br /> FXDM reserves the right to modify, restrict or terminate this offer at any time and without prior notice<br /><br />This offer only applies to clients trading on FXDM's MetaTrader4 platform.<br /><br />This offer cannot be combined with any other promotions.<br /><br />This promotion does not apply to clients that are referred by an Introducing Broker or managed by a third party.<br /><br />This offer only applies to new accounts and is limited to one account per client.<br /><br />This offer is only available for USD accounts. If you send funds in a different currency than USD and want to take advantage of our     welcome bonus offer, your funds will be converted to USD at our best available rate</p>
</div>
</div>
<div id="head3">
<div id="head4">
<?php 
if(!empty($message)){
echo"<div id=\"mess\">$mess</div>";	
}
?>
<div id="hed">
<p>Get Fxdm Trader Bonus</p>
</div>
<div id="hed2">
<p>Please complete all the fields</p>
</div>
<div id="hed3">
<form action="" method="post">
<p><input type="text" name="nam" id="nam" placeholder="&nbsp;&nbsp;First Name"  required/></p>
<p><input type="text" name="nam2" id="nam" placeholder="&nbsp;&nbsp;Last Name" required/></p>
<p><input type="text" name="nam3" id="nam"  placeholder="&nbsp;&nbsp;Email" required/></p>
<p><input type="text" name="nam4" id="nam" placeholder="&nbsp;&nbsp;Country" required/></p>
<p><input type="text" name="nam5" id="nam5" placeholder="&nbsp;&nbsp;Phone Number" required/></p>
<p><select id="nam6" name="nam6" required >
<option>Intended Deoposit</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="500">500</option>
<option value="1000">1000</option>
<option value="2000">2000</option>

</select></p>
<p><input type="submit" name="nam7" id="nam7"  value="Request a Bonus Account"/></p>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
