<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['suk'])){
header("Location:wec.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}");
exit;	
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Forex and Derivatives markets, training & mentorship</title>
	<link rel="icon" type="image/png" href="http://www.oftaldent.pl/gfx/slider/images/sitelogo.png">



    <!-- commented, remove this line to use IE & iOS favicons -->
    <link rel="shortcut icon" href="images/logo.png" />



    <!-- get jQuery from the google apis -->
    <script src="jsl/jquery.backstretch.min.js"></script>
    <script src="jsl/froogaloop2.min.js"></script><script type="text/javascript" src="jsl/jquery.js"></script>
    <script type="text/javascript" src="jsl/jquery-ui.js"></script>
    <script type="text/javascript" src="animelt.js"></script>


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

<script type="text/javascript">

$(window).scroll(function(){
      if($(window).scrollTop()>1450){
         $("#footer").fadeOut();
      }else{
         $("#footer").fadeIn();
      }

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $("#kane").hover(function(){
		$(".kane1").animelt({
    transform: "rotate(180deg)",
    width: "90px"   
},  800, "easeOutElastic");
$(" .kane1").css("background","#293a48");

		
		$("#kane2").css("color","#d8311d");
		},function(){
			$(".kane1").animelt({
    transform: "rotate(0deg)",
    width: "90px" 
},  800, "easeOutElastic");
			$(" .kane1").css("background","#d8311d");
			$(".kane1").animate({
			width:'80px',
			height:'80px'
		}, 1000);
		 $("#kane2").css("color","#333");
		 
		 
		 
	 });

});
</script>





<script type="text/javascript">

$(document).ready(function(){
     $(" #kane21").hover(function(){
		$(" .kane11").css("background","#293a48");
		$("#kane21").css("color","#d8311d");
		},function(){
			$(" .kane11").css("background","#d8311d");
		 $("#kane21").css("color","#333");
		 
		 
		 
	 });

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $(" .kane11").hover(function(){
		$(" .kane11").css("background","#293a48");
		$("#kane21").css("color","#d8311d");
		},function(){
			$(" .kane11").css("background","#d8311d");
		 $("#kane21").css("color","#333");
		 
		 
		 
	 });

});
</script>





<script type="text/javascript">

$(document).ready(function(){
     $(" #kane211").hover(function(){
		$(" .kane111").css("background","#293a48");
		$("#kane211").css("color","#d8311d");
		},function(){
			$(" .kane111").css("background","#d8311d");
		 $("#kane211").css("color","#333");
		 
		 
		 
	 });

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $("#hdq1").hover(function(){
		$("#hen").css("background","#1b1613");
		
		},function(){
			
		 $("#hen").css("background","#0067ac");
		 
		 
	 });

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $("#hdq11").hover(function(){
		$("#henn").css("background","#1b1613");
		
		},function(){
			
		 $("#henn").css("background","#00852a");
		 
		 
	 });

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $(" .kane111").hover(function(){
		$(" .kane111").css("background","#293a48");
		$("#kane211").css("color","#d8311d");
		},function(){
			$(" .kane111").css("background","#d8311d");
		 $("#kane211").css("color","#333");
		 
		 
		 
	 });

});
</script>




<script type="text/javascript">

$(document).ready(function(){
     $(" #kane2111").hover(function(){
		$(" .kane1111").css("background","#293a48");
		$("#kane2111").css("color","#d8311d");
		},function(){
			$(" .kane1111").css("background","#d8311d");
		 $("#kane2111").css("color","#333");
		 
		 
		 
	 });

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $(" .kane1111").hover(function(){
		$(" .kane1111").css("background","#293a48");
		$("#kane2111").css("color","#d8311d");
		},function(){
			$(" .kane1111").css("background","#d8311d");
		 $("#kane2111").css("color","#333");
		 
		 
		 
	 });

});
</script>
</head>

<body>
<div id="containerr">
<div id="pim">



<div id="head1">
<div id="head2">
<a href="indexc.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>"><img src="images/logom.png" width="90" height="90"/></a><p>Your Success Our Passion</p>
</div>
<div id="head3">
<div id="hdq1">
<div id="hen">
<p><a href="lregister.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>">LIVE ACCOUNT</a></p>
</div>
</div>
<div id="hdq11">
<div id="henn">
<p><a href="demoac.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>">DEMO ACCOUNT</a></p>

</div>
</div>
<div id="hdq112a">
<div id="henna">
<p><div id="zazacontainer" style="display: none;">
<script type="text/javascript">
document.write(unescape("%3Cscript src='http://zazachat.zazasoftware.com/livechatclient/scripts/zazamagic.aspx?div=&zimg=1453&zazac=22488&iv=1&iwidth=200&iheight=60&zzwindow=0&d=0&custom1=&custom2=&custom3=' type='text/javascript'%3E%3C/script%3E"));</script>

			

</div></p>

</div>
</div>
</div>

</div>
<div id="navv">
<?php if(isset($_SESSION['aakenn'])){
echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"indexc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">HOME</a></li>";
echo"<li><a href=\"aboutusc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"whyfxdc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">WHY FXDMTrader</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fxdadc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"busmodelc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"regc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"platfc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\"><font color=\"#03B9E8\">PLATFORMS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"tmetac.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fmamc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mobtc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"soctc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"actc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">ACCOUNTS</a>";

echo"</li>";
echo"<li><a href=\"patnc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">PARTNERSHIP</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"ibc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">INTRODUCING BROKERS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"wlc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">WHITE LABELS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"pmc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">PORTFOLIO MANAGERS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";

echo"<li><a href=\"contactuc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">CONTACT</a></li>";
echo"<li><a href=\"client.php\">CLIENT AREA</a></li>";
echo"<li><a href=\"logout.php\">LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
}else{

echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"indexc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">HOME</a></li>";
echo"<li><a href=\"aboutusc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"whyfxdc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">WHY FXDMTrader</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fxdadc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">FXDM ADVANTAGE</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"busmodelc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">BUSINESS MODEL</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"regc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">REGULATION & SAFETY OF FUNDS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"platfc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\"><font color=\"#03B9E8\">PLATFORMS</font></a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"tmetac.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">META-TRADER-4</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"fmamc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">FXDM MAM</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"mobtc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">MOBILE TRADING</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"soctc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">SOCIAL TRADING</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"actc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">ACCOUNTS</a>";

echo"</li>";
echo"<li><a href=\"patnc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">PARTNERSHIP</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"ibc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">INTRODUCING BROKERS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"wlc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">WHITE LABELS</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"pmc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">PORTFOLIO MANAGERS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";

echo"<li><a href=\"etc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">EDUCATION & TOOLS</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"wec.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">WEBINAR</a>";
echo"</li>";
echo"<li>";
echo"<a href=\"lmac.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">LIVE MARKET ANALYSIS</a>";
echo"</li>";
echo"</ul>";
echo"</li>";
echo"<li><a href=\"contactuc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">CONTACTS</a></li>";
echo"<li><a href=\"myfxdmc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">MY FXDM</a></li>";
echo"</ul>";
echo"</div>";
}


?>

</div>

<div id="we">
<div id="mind">
<img src="images/pf.png" /><div id="rel">
Amazing spreads and trading conditions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#0067ac"><b>At Your Service</b></font>
</div><br />
<form action="" method="post"><input type="submit" name="cl" id="cl" value="MT4 DOWNLOAD" /></form>
</div>
<div id="am">
<p><font size="+2" color="#0067ac"><b>FXDM Trading Platform</b><br /><br /></font>The FXDM MetaTrader 4 terminal is a perfectly equipped traders' workplace that allows to trade in the financial markets (Forex, CFD and Futures). It provides the necessary tools and resources to analyze price dynamics of financial instruments, make the trade transactions, create and use trading programs (Expert Advisors). It represents the all-in-one concept and is the most popular trading terminal in the world.<br /><br /><img src="images/mt41.png" /><br /><br />The FXDM MetaTrader 4 terminal offers a number of impressive analytical tools. There are nine timeframes available for each financial instrument that provide detailed analysis of quote dynamics. More than 50 <a href="http://www.metaquotes.net/en/metatrader4/gallery/technical_indicators" target="_new">built-in indicators</a> and tools help simplify the analysis, enabling to determine trends, define various shapes, determine entry and exit points, etc. Besides, one object can be applied over another one, which comes in very useful in various trading systems. Need more? You can also print charts of any instruments and conduct "on paper" analysis.<br /><br /><img src="images/mt42.png" /><br /><br /><font size="+2" color="#0067ac">Automated Trading and MQL4</font><br /><br />The MQL4 IDE built-in development environment allows you to develop your own Expert Advisors, custom indicators and scripts. Modern traders need them in their daily trading. <br /><br />FXDM MetaTrader 4 contains all the trading functions you will need. The terminal supports only market executions. All types of orders are available, ensuring fully-fledged and flexible trading activities. Traders use market orders, pending and stop orders, as well as the Trailing Stop.<br /><br />There are several ways to place trade orders in the terminal, including the ability to trade directly from a chart. The embedded tick chart is extremely useful for an accurate determination of entry and exit points. Alerts on trade positions is another handy tool to help you track all favorable moments. So, with the FXDM MetaTrader 4 trading arsenal, you can implement all of your trading strategies effectively.<br /><br /><img src="images/mt433.png" /><br /><br />Security of making the trade transactions is of paramount importance for programs of this kind. In FXDM MetaTrader 4, we have come up with the perfect solution. All data exchange between the client terminal and the platform servers is 128-bit encrypted. This is enough to ensure the security of trade transactions.<br /><br />The FXDM MetaTrader 4 terminal comprises a whole range of functions, but it takes just a few minutes to get acquainted with them. Moreover, the terminal is supplied with a built-in 'Help' facility to answer all of your questions. We've made the FXDM MetaTrader 4 terminal simple and convenient in use, so that you can invest your time into your most important work - trading!<br /><br /><br /><br /><br /><br /><br /></p>
</div>
</div>



 
    

<div id="footer">
<div id="foot2">


</div>
</div>
<div id="fott">
<div id="foott">
<div id="foof1">
<font face="Vrinda" size="+3" color="#1b83be" style="font-weight:bold">About Us</font>
<p>
We built ourselves a reputation, so we decided to build a brand that can match it. FXDMTrader is a trading name of FXDMTrader Ltd, a financial services provider that offers online trading in the global financial markets.
</p>
</div>
<div id="foof2">
<p><font face="Vrinda" size="+1">FXDMTrader</font></p>
<ul>
<li>New Zealand: +6433665086</li>
<li>Email: Support@fxdmtrader.com</li>
</ul>
</div>
<div id="foof3">
<p><font face="Vrinda" size="+1">Join Us</font></p>
<ul>
<li>Business Hours: Monday to Friday: 9am to 5pm</li>
<li><form action="" method="post">
<input type="submit" name="suk" id="suk" value="Webinar Registration" />
</form></li>
</ul>
</div>
</div>
</div> 

</div>

</div>
</body>
</html>

