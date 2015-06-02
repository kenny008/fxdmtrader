<?php require_once("inc/session.php");?>
<?php  jen();?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['sub'])){
$user=$_POST['usn'];
$pass=$_POST['pass'];
$query="SELECT * FROM user WHERE username='$user' AND hashed_password='$pass'";
	$result=mysql_query($query,$connection);
	if(mysql_num_rows($result)==1){
	$message="hello you are now logged in";	
	}
	else{
		$message="error error error error";
	}
}
else{
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CLIENT AREA</title>
<link rel="stylesheet" media="screen and (min-width: 1201px) and (max-width: 5000px)" href="stylesheets/publicd.css" />
<link rel="stylesheet" media="screen and (min-width: 400px) and (max-width: 1200px)" href="stylesheets/pin.css" />
<script src="jquery-1.7.2.js"></script>
<script src="jquery.easing.1.3.js"></script>


 <script type="text/javascript">
 	var fadeDuration=1000;
	var slideDuration=2000;
	var currentIndex=1;
	var nextIndex=1;
	$(document).ready(function()
	{
		
		$('ul.slideshow li').css({opacity: 0.0});
		$("'ul.slideshow li:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
		var timer = setInterval('nextSlide()',slideDuration);
	})
	function nextSlide(){
			nextIndex =currentIndex+1;
			if(nextIndex > $('ul.slideshow li').length)
			{
				nextIndex =1;
			}
			$("'ul.slideshow li:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
			$("'ul.slideshow li:nth-child("+currentIndex+")'").animate({opacity: 0.0}, fadeDuration).removeClass('show');
			currentIndex = nextIndex;
	}
 </script>
 <style type="text/css">
	
	#cont4{
		float:left;
		margin:0px 0px 0px 20px;
width:500px;	
		
	}
	.slideshow{
		width:500px;
		list-style: none;
		position:relative;
		top:0px;
	}
 	ul.slideshow li {
		position:absolute;
		left:0px;
		top:0px;
		display:inline;
		
	}
	ul.slideshow li.show {
		z-index:500;	
	}
 </style>
<script type="text/javascript">
$(document).ready(function(){
	$('#d li ul').css({
		display: "none",
		left: "auto"
		
		});
		$('#d li').hover(function(){
			$(this)
			.find('ul')
			.stop(true,true)
			.fadeIn('slow');
			
			},function(){
				$(this)
				.find('ul')
				.stop(true,true)
				.fadeOut('slow');
				
				});
	
	});
</script>
</head>

<body>
<div id="head">
<div id="hd">
<img src="images/logo.png" /><p>Your Success, Our Passion</p>
</div>
<div id="hdd">
<table>

<tr>
<td><img src="images/phone.png" id="imghdd"/></td>
<td><p>+6433665086</p></td><td><a href="contacts.php"><img src="images/mail.png"/></a></td><td><img src="images/rss.png" /></td></tr>
<tr></tr>
<tr><td colspan="4">&nbsp;</td></tr>
<tr><td colspan="2"><div id="kent"><p align="center" ><a href="demo.php">Demo<br />Account</a></p></div></td><td colspan="2"><div id="kent2"><p align="center" ><a href="register.php">Live<br />Account</a></p></div></td></tr>
</table>

</div>
<div id="hd2">

</div>
<div id="nav">

<?php if(isset($_SESSION['aakenn'])){
echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"about.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"fxdad.php\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"busmodel.php\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"reg.php\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"plat.php\">PLATFORMS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"tmeta.php\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fmam.php\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mobt.php\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"soct.php\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"acctn.php\">ACCOUNTS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"flite.php\">FXDM LITE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fgold.php\">FXDM GOLD</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mop.php\">MOBILE PLANTINUM</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"pat.php\">PARTNERSHIP</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"ib.php\">INTRODUCING BROKERS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"wl.php\">WHITE LABELS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"pm.php\">PORTFOLIO MANAGERS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";

echo"<li><a href=\"contacts.php\">CONTACT</a></li>";
echo"<li><a href=\"clienta.php\">CLIENT AREA</a></li>";
echo"<li><a href=\"logout.php\">LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
}else{

echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"about.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"fxdad.php\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"busmodel.php\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"reg.php\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"plat.php\">PLATFORMS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"tmeta.php\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fmam.php\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mobt.php\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"soct.php\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"acctn.php\">ACCOUNTS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"flite.php\">FXDM LITE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fgold.php\">FXDM GOLD</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mop.php\">MOBILE PLANTINUM</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"pat.php\">PARTNERSHIP</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"ib.php\">INTRODUCING BROKERS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"wl.php\">WHITE LABELS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"pm.php\">PORTFOLIO MANAGERS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";

echo"<li><a href=\"et.php\">EDUCATION & TOOLS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"we.php\">WEBINAR</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"lma.php\">LIVE MARKET ANALYSIS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"contacts.php\">CONTACTS</a></li>";
echo"<li><a href=\"login.php\">MY FXDM</a></li>";
echo"</ul>";
echo"</div>";
}


?>
</div>
<div id="riliwan">
<?php 
if(!empty($message)){
echo"<div id=\"mis\">$message</div>";	
}
?>
<div id="riliwan3">
<?php
$query="SELECT * FROM user WHERE username='{$_SESSION['aakenn']}'";
$resu=mysql_query($query,$connection);
if(mysql_num_rows($resu)==1){
$res=mysql_fetch_array($resu);	
}
else{
	
}

?>
<p>You are Logged in as <?php   echo "{$res['lname']}&nbsp;{$res['fname']}"?></p>
</div>
<div id="riliwan4">
<ul>
<li><a href="profile.php"><div id="prof"><img src="images/prof.jpg" width="80" height="80" /><p><font color="#3AA768">MY PROFILE</font><br /><font color="#6E6E6E">DETAILS</font></p></div><p><font color="#3AA768"><a href="profile.php"><b>Edit|View your Profile Details</b></a></font></p></a></li>
<li><a href="deposite.php"><div id="prof"><img src="images/dollar.jpg" width="80" height="80" /><p><font color="#3AA768">DEPOSIT</font><br /><font color="#6E6E6E">FUNDS</font></p></div><p><font color="#3AA768"><a href="deposite.php"><b>Submit your Bank Deposits</b></a></font></p></a></li>
<li><a href="withdrawal.php"><div id="prof"><img src="images/wth.jpg" width="80" height="80" /><p><font color="#3AA768">WITHDRAW</font><br /><font color="#6E6E6E">FUNDS</font></p></div><p><font color="#3AA768"><a href="widthrawal.php"><b>Notify us of your Bank Widthdrawal</b></a></font></p></a></li>
</ul>

</div>
<div id="riliwan4">
<ul>
<li><a href="internalfund.php"><div id="prof"><img src="images/FUND.jpg" width="80" height="80" /><p><font color="#3AA768">INTERNAL</font><br /><font color="#6E6E6E">FUND TRANSFER</font></p></div><p><font color="#3AA768"><a href="internalfund.php"><b>Transfer funds between Accouts</b></a></font></p></a></li>
<li>&nbsp;</li>
<li><a href="accountop.php"><div id="prof"><img src="images/ACCT.jpg" width="80" height="80" /><p><font color="#3AA768">ACCOUNT</font><br /><font color="#6E6E6E">OPENING</font></p></div><p><font color="#3AA768"><a href="accountop.php"><b>Open another Account(s)</b></a></font></p></a></li>
</ul>

</div>
</div>


<div id="foot">
<p><font color="#FF0000" size="+1">RISK WARNING:</font> Trading in Forex and Metals, which are leveraged products, is highly speculative and involves substantial risk of loss and may not be suitable for all <br />investors It is possible to lose more than the initial capital invested. Trade only with the capital for which you are prepared to lose. So please ensure that you fully consult <br />financial advice if necessary.<br /><br />FXDM is regulated in New Zealand as a Financial Service provider (FSP) with registration number 4634719. We are also a member of the Financial Services Complaints <br />Ltd that provides dispute resolution services to participating financial service providers (FSPs) and their numerous clients.<br /><br /><br /><font color="#FF0000">FXDM does not provide services for United States and Canada residents and/or citizens.</font><br /><br />Copyright © 2013, fxdmtrader.com</p>
</div>
</div>

</body>
</html>


