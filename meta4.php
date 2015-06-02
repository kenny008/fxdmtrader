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
echo"<li><a href=\"platforms.php\"><font color=\"#03B9E8\">PLATFORMS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
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
echo"<li><a href=\"account.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"clienta.php\">CLIENT AREA</a></li>";
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
echo"<li><a href=\"platforms.php\"><font color=\"#03B9E8\">PLATFORMS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
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
echo"<li><a href=\"account.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"platforms.php\"><font color=\"#03B9E8\">PLATFORMS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"meta4.php\">META-TRADER-4</a>";
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
echo"<li><a href=\"account.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"platforms.php\"><font color=\"#03B9E8\">PLATFORMS</font></a>";
echo"<ul>";
echo"<li>";

echo"<a href=\"meta4.php\">META-TRADER-4</a>";
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
echo"<li><a href=\"account.php\">ACCOUNTS</a>";
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
<div id="mid">
<br />
<font face="Verdana, Geneva, sans-serif" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are here: Home&nbsp;&raquo;&nbsp;<font color=\"#03B9E8\">Platforms</font></font>
<p align="center">Meta <b>Trader 4</b></p>
<div id="accdt3">
<p>The FXDM MetaTrader 4 terminal is a perfectly equipped traders' workplace that allows to trade in the financial markets (Forex, CFD and Futures). It provides the necessary tools and resources to analyze price dynamics of financial instruments, make the trade transactions, create and use trading programs (Expert Advisors). It represents the all-in-one concept and is the most popular trading terminal in the world.<br /><br /><img src="images/mt41.jpg" /><br /><br />The FXDM MetaTrader 4 terminal offers a number of impressive analytical tools. There are nine timeframes available for each financial instrument that provide detailed analysis of quote dynamics. More than 50 <a href="http://www.metaquotes.net/en/metatrader4/gallery/technical_indicators" target="_new">built-in indicators</a> and tools help simplify the analysis, enabling to determine trends, define various shapes, determine entry and exit points, etc. Besides, one object can be applied over another one, which comes in very useful in various trading systems. Need more? You can also print charts of any instruments and conduct "on paper" analysis.<br /><br /><img src="images/mt42.jpg" /><br /><br /><font size="+2">Automated Trading and MQL4</font><br /><br />The MQL4 IDE built-in development environment allows you to develop your own Expert Advisors, custom indicators and scripts. Modern traders need them in their daily trading. <br /><br />FXDM MetaTrader 4 contains all the trading functions you will need. The terminal supports only market executions. All types of orders are available, ensuring fully-fledged and flexible trading activities. Traders use market orders, pending and stop orders, as well as the Trailing Stop.<br /><br />There are several ways to place trade orders in the terminal, including the ability to trade directly from a chart. The embedded tick chart is extremely useful for an accurate determination of entry and exit points. Alerts on trade positions is another handy tool to help you track all favorable moments. So, with the FXDM MetaTrader 4 trading arsenal, you can implement all of your trading strategies effectively.<br /><br /><img src="images/mt43.jpg" /><br /><br />Security of making the trade transactions is of paramount importance for programs of this kind. In FXDM MetaTrader 4, we have come up with the perfect solution. All data exchange between the client terminal and the platform servers is 128-bit encrypted. This is enough to ensure the security of trade transactions.<br /><br />The FXDM MetaTrader 4 terminal comprises a whole range of functions, but it takes just a few minutes to get acquainted with them. Moreover, the terminal is supplied with a built-in 'Help' facility to answer all of your questions. We've made the FXDM MetaTrader 4 terminal simple and convenient in use, so that you can invest your time into your most important work - trading!<br /><br /><br /><br /><br /><br /><br /></p>

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
<div id="foof1">
<font face="Verdana, Geneva, sans-serif" size="+2" color="#FFFFFF" style="font-weight:bold">About Us</font>
<p>
We built ourselves a reputation, so we decided to build a brand that can match it. FXDM Trader is a trading name of FXDM Trader Ltd, a financial services provider that offers online trading in the global financial markets.
</p>
</div>
<div id="foof2">
<p>FXDM TRADER</p>
<ul>
<li>New Zealand: +6433665086</li>
<li>Nigeria: +2348056905612</li>
<li>Email: Support@fxdmtrader.com</li>
</ul>
</div>
<div id="foof3">
<p>Join Us.</p>
<ul>
<li>Business Hours: Monday to Friday: 9am to 5pm</li>
<li><form action="" method="post">
<input type="submit" name="suk" id="suk" value="Seminar Registration" />
</form></li>
</ul>
</div>
</div>
</div> 
<div id="last">
<p>As a dynamic financial services provider, the mission of FXDM Trader is to offer equal chances for traders to access trading in forex, commodities and CFDs (oil, gold, silver) in a flexible way. And we do this by combining financial know-how, latest technologies, and a pro-active approach to traders' needs. "The client's success is our success" - this is the spirit in which FXDM Trader operates.<br /><br />

FXDM Trader was founded by financial experts whose aim is to create win-win opportunities. We know that long-term business is based on mutual benefits - this is why our traders like us. Our flexible leverage and low spreads are as attractive to clients as the "no hidden fees" and "no negative balance" policy, coupled with best execution and advanced trading platforms that facilitate trading operations.<br /><br />

FXDM Trader believes in incentives: our Bonus Program rewards not only clients who deposit for the first time, but every single subsequent deposit is topped with an extra bonus. We find motivation equally important, this is why we embrace the opportunity to provide online and offline training for all prospective clients who want to know the fascinating world of the forex market with us.<br /><br />

Risk Warning: Forex Trading involves significant risk to your invested capital. Please read and ensure you fully understand our Risk Disclosure.</p>

</div>
</div>
<div id="lastnk">
<div id="lastn2">
<p>2014&nbsp;&copy;&nbsp;FXDM TRADER</p>
</div>
<div id="lastn3">
<p>Connect with us:&nbsp;&nbsp;<img src="images/Facebook.png" id="kin"/>&nbsp;<img src="images/Twitter.png" id="kin"/>&nbsp;<img src="images/Google.png" id="kin"/></p>
</div>
</div>
</div>
</body>
</html>
