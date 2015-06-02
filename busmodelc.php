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
      if($(window).scrollTop()>300){
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
echo"<li><a href=\"platfc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">PLATFORMS</a>";
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
echo"<li><a href=\"platfc.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}\">PLATFORMS</a>";
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
<div id="divi">
<div id="div3">
<p><a href="whyfxdc.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>">Why FXDMTrader</a></p>
</div>
<div id="div4">
</div>

<div id="div5">
<p><a href="fxdadc.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>">FXDM Advantage</a></p>
</div>
<div id="divv6">
</div>


<div id="div5">
<p><a href="busmodelc.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>"><font color="#03B9E8">Our Business Model</font></a></p>
</div>
<div id="divv6">
</div>
<div id="div5">
<p><a href="regc.php?IBRefrenceNumber=<?php echo $_GET['IBRefrenceNumber']?>">Regulation & Safety of Funds</a></p>
</div>
<div id="div6">
</div>
<div id="div5">
<p>Company News</p>
</div>
<div id="div6">
</div>
<div id="divsem">
<form action="" method="post">
<input type="submit" value="Webinar Registration" name="suk" id="semir" />

</form>
</div>
</div>
<div id="divj3b">
</div>
<div id="divj33b">
</div>

<div id="div7">
<p>BUSINESS MODEL</p>
<img src="images/banner_12.jpg" width="600" height="166" />
</div>
<div id="div8">
<p>FXDM STP forex broker operates No Dealing Desk. Our business model implements Straight Through Processing (STP), where all orders are sent to the various premier and leading forex banks and qualified financial institutions that make up our pool of liquidity providers. We are passionate about the successful trading of our clients hence our dealing is transparency and fair.</p>
</div>
<div id="ourcc">


</div>
<div id="ourc1">

</div>

<div id="riw">
<p>RISK WARNING: Trading in Forex and Metals, which are leveraged products, is highly speculative and involves substantial risk of loss and may not be suitable for all 
investors It is possible to lose more than the initial capital invested. Trade only with the capital for which you are prepared to lose. So please ensure that you fully consult 
financial advice if necessary.

FXDM is regulated in New Zealand as a Financial Service provider (FSP) with registration number 4634719. We are also a member of the Financial Services Complaints 
Ltd that provides dispute resolution services to participating financial service providers (FSPs) and their numerous clients.
</p>
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
