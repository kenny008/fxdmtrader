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
<div id="peace">
<div id="peace1">
<P><font color="#00FF00">FXDM</font> Trader</P>
</div>
<div id="navvsa">
<?php if(isset($_SESSION['aakenn'])){
echo"<div id=\"nav1sa\">";
echo"<ul id=\"dsa\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"aboutus.php\">ABOUT</a>";
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
echo"<li><a href=\"platf.php\">PLATFORMS</a>";
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
echo"<li><a href=\"act.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"client.php\">CLIENT AREA</a></li>";
echo"<li><a href=\"logout.php\">LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
}else{

echo"<div id=\"nav1\">";
echo"<ul id=\"dsa\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"aboutus.php\">ABOUT</a>";
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
echo"<li><a href=\"platf.php\">PLATFORMS</a>";
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
echo"<li><a href=\"act.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"myfxdm.php\">MY FXDM</a></li>";
echo"</ul>";
echo"</div>";
}


?>


</div>
</div>
</div>
<div id="head1">
<div id="head2">
<img src="images/logom.png" width="90" height="90"/><p>Your Success Our Passion</p>
</div>
<div id="head3">
<div id="hdq1">
<div id="hen">
<p><a href="log.php">LIVE ACCOUNT</a></p>
</div>
</div>
<div id="hdq11">
<div id="henn">
<p><a href="demoa.php">DEMO ACCOUNT</a></p>

</div>
</div>
<div id="hdq112">
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
echo"<li><a href=\"aboutus.php\">ABOUT</a>";
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
echo"<li><a href=\"platf.php\">PLATFORMS</a>";
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
echo"<li><a href=\"act.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"patn.php\">PARTNERSHIP</a>";
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

echo"<li><a href=\"contactu.php\">CONTACT</a></li>";
echo"<li><a href=\"clienta.php\">CLIENT AREA</a></li>";
echo"<li><a href=\"logout.php\">LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
}else{

echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"index.php\">HOME</a></li>";
echo"<li><a href=\"aboutus.php\">ABOUT</a>";
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
echo"<li><a href=\"platf.php\">PLATFORMS</a>";
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
echo"<li><a href=\"act.php\">ACCOUNTS</a>";
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
echo"<li><a href=\"patn.php\">PARTNERSHIP</a>";
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
echo"<li><a href=\"contactu.php\">CONTACTS</a></li>";
echo"<li><a href=\"myfxdm.php\">MY FXDM</a></li>";
echo"</ul>";
echo"</div>";
}


?>


</div>

<div id="we">
<div id="divi">
<div id="div3">
<p>Why FXDM Trader</p>
</div>
<div id="divv4">
</div>

<div id="div5">
<p><a href="fxdmad.php">FXDM Advantage</a></p>
</div>
<div id="divv6">
</div>


<div id="div5">
<p><a href="busm.php">Our Business Model</a></p>
</div>
<div id="div6">
</div>
<div id="div5">
<p><a href="rsf.php">Regulation & Safety of Funds</a></p>
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
<input type="text" value="Seminar Registration" name="semir" id="semir" />

</form>
</div>
</div>
<div id="divj3">
</div>
<div id="divj33">
</div>

<div id="div7">
<p>FXDM ADVANTAGE</p>
</div>

<div id="ourcc">

<ul>
<li>No Dealing Desk: Our No-Dealing-Desk and No-requotes on execution for all Forex and commodities trades eliminates dealer intervention, conflict of interest and the risk of price manipulation.</li>
<li>Regulated Broker: FXDM is regulated by FSPR New Zealand and our Registration number is 4634719</li>
<li>Competitive Spread: Our spreads are highly competitive and floating, which reflect the inter-banks movements.</li>
<li>Execution speed: Execution on orders is at the speed of thoughts.</li>
<li>Free Mobile Trader: Never miss any opportunity with FXDM mobile apps for your mobile devices which include android based phone, Ipads and Iphones</li>
<li>Live Market Analysis: One of the best ways to learn how to do anything is to watch the professionals who got the knowledge, skills, experience and expertise in action. FXDM has brought to its esteemed clients the ability to interact with professionals in a live online classroom, allowing them to learn various trading topics, how the market is analyzed to take its full advantage and ask them question specific to their trading methods.</li>
</ul>
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

<div id="zazacontainer" style="display: none;">
<script type="text/javascript">
document.write(unescape("%3Cscript src='http://zazachat.zazasoftware.com/livechatclient/scripts/zazamagic.aspx?div=&zimg=1453&zazac=22488&iv=1&iwidth=230&iheight=26&zzwindow=0&d=0&custom1=&custom2=&custom3=' type='text/javascript'%3E%3C/script%3E"));</script>

			

</div>
</div>
</div>
<div id="fott">
<div id="foott">
<div id="foof1">
<font face="Vrinda" size="+3" color="#1b83be" style="font-weight:bold">About Us</font>
<p>
We built ourselves a reputation, so we decided to build a brand that can match it. FXDM Trader is a trading name of FXDM Trader Ltd, a financial services provider that offers online trading in the global financial markets.
</p>
</div>
<div id="foof2">
<p><font face="Vrinda" size="+1">FXDM TRADER</font></p>
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
<input type="submit" name="suk" id="suk" value="Seminar Registration" />
</form></li>
</ul>
</div>
</div>
</div> 

</div>

</div>
</body>
</html>
