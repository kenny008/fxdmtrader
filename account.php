<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Untitled Document</title>
	<link rel="icon" type="image/png" href="http://www.oftaldent.pl/gfx/slider/images/sitelogo.png">



    <!-- commented, remove this line to use IE & iOS favicons -->
    <link rel="shortcut icon" href="http://www.oftaldent.pl/gfx/slider/images/favicon.ico">



    <!-- get jQuery from the google apis -->
    <script src="jsl/jquery.backstretch.min.js"></script>
    <script src="jsl/froogaloop2.min.js"></script><script type="text/javascript" src="jsl/jquery.js"></script>
    <script type="text/javascript" src="jsl/jquery-ui.js"></script>


    <!-- CSS STYLE -->
    <link rel="stylesheet" type="text/css" href="jsl/style.css" media="screen">
	


     <!-- jQuery KenBurn Slider  -->
	<script type="text/javascript" src="jsl/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="jsl/jquery.themepunch.revolution.min.js"></script>


	<!-- MODULES ONLY FOR THE DEMONSTATION -->
	<script type="text/javascript" src="jsl/preview-normal.js"></script>


	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="jsl/settings.css" media="screen">
	<link rel="stylesheet" type="text/css" href="jsl/captions.css" media="screen">

	<!-- GOOGLE FONTS -->
	<link href="jsl/css" rel="stylesheet" type="text/css">

<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/ken.css" />
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/ken1.css" />

<script type="text/javascript">

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script> 
<script type="text/javascript">

$(window).scroll(function(){
      if($(window).scrollTop()>158){
         $("#peace").fadeIn();
      }else{
         $("#peace").fadeOut();
      }

});
</script>

</head>

<body>
<div id="containerr">
<div id="pim">
<div id="peace">
<div id="peace1">
<P><font color="#00FF00">FXDM</font> Trader</P>
</div>
<div id="navvsa">
<?php if(isset($_SESSION['aakenn'])){
echo"<div id=\"nav1sa\">";
echo"<ul id=\"dsa\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"about.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"fadt.php\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"bismodel.php\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"rsf.php\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mamf.php\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mit.php\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"stra.php\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"acctount.php\"><font color=\"#03B9E8\">ACCOUNTS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"lite.php\">FXDM LITE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"gold.php\">FXDM GOLD</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mpl.php\">MOBILE PLANTINUM</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"client.php\">CLIENT AREA</a></li>";
echo"<li><a href=\"logout.php\">LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
}else{

echo"<div id=\"nav1\">";
echo"<ul id=\"dsa\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"about.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"fadt.php\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"bismodel.php\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"rsf.php\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mamf.php\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mit.php\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"stra.php\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"account.php\"><font color=\"#03B9E8\">ACCOUNTS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"lite.php\">FXDM LITE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"gold.php\">FXDM GOLD</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mpl.php\">MOBILE PLANTINUM</a>";
echo"</li>";
echo"</ul>";
echo"</li>";


echo"<li><a href=\"eto.php\">EDUCATION & TOOLS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"wer.php\">WEBINAR</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"lmas.php\">LIVE MARKET ANALYSIS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"login.php\">MY FXDM</a></li>";
echo"</ul>";
echo"</div>";
}


?>


</div>
</div>
</div>
<div id="head1">
<div id="head2">
<img src="images/logo.png" width="90" height="90"/><p>Your Success Our Passion</p>
</div>
<div id="head3">
<div id="hdq1">
<div id="hen">
<p><a href="">LIVE ACCOUNT</a></p>
</div>
</div>
<div id="hdq11">
<div id="henn">
<p><a href="">DEMO ACCOUNT</a></p>

</div>
</div>
<div id="hdq11">
<div id="henna">
<p><img src="images/p.png" />+6433665086</p>

</div>
</div>
</div>

</div>
<div id="navv">
<?php if(isset($_SESSION['aakenn'])){
echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"about.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"fadt.php\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"bismodel.php\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"rsf.php\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mamf.php\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mit.php\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"stra.php\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"account.php\"><font color=\"#03B9E8\">ACCOUNTS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"lite.php\">FXDM LITE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"gold.php\">FXDM GOLD</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mpl.php\">MOBILE PLANTINUM</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"pats.php\">PARTNERSHIP</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"ibs.php\">INTRODUCING BROKERS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"wls.php\">WHITE LABELS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"pms.php\">PORTFOLIO MANAGERS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";

echo"<li><a href=\"contact.php\">CONTACT</a></li>";
echo"<li><a href=\"client.php\">CLIENT AREA</a></li>";
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
echo"<a href=\"fadt.php\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"bismodel.php\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"rsf.php\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mamf.php\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mit.php\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"stra.php\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"account.php\"><font color=\"#03B9E8\">ACCOUNTS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"lite.php\">FXDM LITE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"gold.php\">FXDM GOLD</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mpl.php\">MOBILE PLANTINUM</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"pats.php\">PARTNERSHIP</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"ibs.php\">INTRODUCING BROKERS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"wls.php\">WHITE LABELS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"pms.php\">PORTFOLIO MANAGERS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";

echo"<li><a href=\"ets.php\">EDUCATION & TOOLS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"wes.php\">WEBINAR</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"lmas.php\">LIVE MARKET ANALYSIS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"contact.php\">CONTACTS</a></li>";
echo"<li><a href=\"login.php\">MY FXDM</a></li>";
echo"</ul>";
echo"</div>";
}


?>


</div>
<div id="mid">
<br />
<font face="Verdana, Geneva, sans-serif" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are here: Home&nbsp;&raquo;&nbsp;<font color=\"#03B9E8\">Accounts</font></font>
<p align="center">Trading <b>Accounts</b></p>
<div id="accdt">


</div>

<div id="accdt2">
<div id="dem">
<p>Demo Account</p>
</div>
<div id="dem1">
<p>Live Account</p>
</div>
<div id="dem2">
<p>Account Types</p>
<ul>
<li><a href="#">Fxdm Lite</a></li>
<li><a href="#">Fxdm Gold</a></li>
<li><a href="#">Fxdm Premium</a></li>
</ul>
</div>
<div id="dem2">
<p>Platforms</p>
<ul>
<li><a href="#">Meta Trader 4</a></li>
<li><a href="#">Fxdm MAM</a></li>
<li><a href="#">Mobile Trading</a></li>
<li><a href="#">Social Trading</a></li>
</ul>
</div>
<div id="dem2">
<p>Education & Tools</p>
<ul>
<li><a href="#">Webinar</a></li>
<li><a href="#">Live Market Analysis</a></li>
</ul>
</div>
<div id="dem2">
<p>About Us</p>
<ul>
<li><a href="#">Fxdm Advantage</a></li>
<li><a href="#">Business Model</a></li>
<li><a href="#">Regulation & Safety of Funds</a></li>
</ul>
</div>

</div>
</div>
<div id="we">

</div>
<div id="wee">




</div>
<div id="kan">



</div>
<div id="sur">

</div>
<div id="footer">
<div id="foot2">

<div id="zazacontainer" style="display: none;">
<script type="text/javascript">
document.write(unescape("%3Cscript src='http://zazachat.zazasoftware.com/livechatclient/scripts/zazamagic.aspx?div=&zimg=1453&zazac=22488&iv=1&iwidth=230&iheight=26&zzwindow=0&d=0&custom1=&custom2=&custom3=' type='text/javascript'%3E%3C/script%3E"));</script>

			

</div>
</div>
</div>
<div id="fott">
<div id="foott">
<p><font color="#FF0000" size="+1">RISK WARNING:</font> Trading in Forex and Metals, which are leveraged products, is highly speculative and involves substantial risk of loss and may <br />not be suitable for all investors It is possible to lose more than the initial capital invested. Trade only with the capital for which you are prepared to lose. <br />So please ensure that you fully consult financial advice if necessary.<br /><br />FXDM is regulated in New Zealand as a Financial Service provider (FSP) with registration number 4634719. We are also a member of the Financial <br />Services Complaints Ltd that provides dispute resolution services to participating financial service providers (FSPs) and their numerous clients.<br /><br /><br /><font color="#FF0000">FXDM does not provide services for United States and Canada residents and/or citizens.</font><br /><br />Copyright © 2013, fxdmtrader.com
</p>
</div>
</div> 
</div>
</div>
</body>
</html>

