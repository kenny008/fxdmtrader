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

<script type="text/javascript">

$(window).scroll(function(){
      if($(window).scrollTop()>1200){
         $("#footer").fadeOut();
      }else{
         $("#footer").fadeIn();
      }

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $(" #kane2").hover(function(){
		$(" .kane1").css("background","#293a48");
		$("#kane2").css("color","#d8311d");
		},function(){
			$(" .kane1").css("background","#d8311d");
		 $("#kane2").css("color","#333");
		 
		 
		 
	 });

});
</script>
<script type="text/javascript">

$(document).ready(function(){
     $(" .kane1").hover(function(){
		$(" .kane1").css("background","#293a48");
		$("#kane2").css("color","#d8311d");
		},function(){
			$(" .kane1").css("background","#d8311d");
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
echo"<li><a href=\"index.php\"><font color=\"#03B9E8\">HOME</font></a></li>";
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
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
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
echo"<li><a href=\"index.php\"><font color=\"#03B9E8\">HOME</font></a></li>";
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
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
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
echo"<li><a href=\"index.php\"><font color=\"#03B9E8\">HOME</font></a></li>";
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
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
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
echo"<li><a href=\"index.php\"><font color=\"#03B9E8\">HOME</font></a></li>";
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
echo"<li><a href=\"platforms.php\">PLATFORMS</a>";
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
<div class="fullwidthbanner-container">
					<div class="fullwidthabnner tp-simpleresponsive hovered" style="height: 703px;">
						<ul>
							<!-- THE FIRST SLIDE -->
							<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-thumb="images/thumbs/thumb1.jpg" style="visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<div class="slotholder"><img src="images/wide1.jpg" class="defaultimg" style="width: 1920px; height: 500px; position: absolute; left: -285.5px; top: 0px; opacity: 1;"></div>

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb tp-caption start" data-x="176" data-y="15" data-speed="300" data-start="800" data-easing="easeOutExpo" style="font-size: 40px; padding: 0px; margin: 0px; border: 0px; line-height: 40px; white-space: nowrap; opacity: 1; left: 370.5px; top: 15px; -webkit-transform: scale(1, 1) rotate(0deg); visibility: visible;">OVER <span style="color: #ffcc00;">1000</span> SATISFIED CUSTOMERS</div>

										<div class="caption randomrotate tp-caption start" data-x="189" data-y="76" data-speed="600" data-start="1100" data-easing="easeOutExpo" style="left: 383.5px; top: 76px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p1.jpg" alt="Image 2" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="0" data-y="92" data-speed="600" data-start="1200" data-easing="easeOutExpo" style="left: 194.5px; top: 92px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p2.jpg" alt="Image 3" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="200" data-y="209" data-speed="600" data-start="1300" data-easing="easeOutExpo" style="left: 394.5px; top: 209px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p3.jpg" alt="Image 4" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="97" data-y="117" data-speed="300" data-start="1400" data-easing="easeOutExpo" style="left: 291.5px; top: 117px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p4.jpg" alt="Image 5" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="14" data-y="222" data-speed="600" data-start="1500" data-easing="easeOutExpo" style="left: 208.5px; top: 222px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p5.jpg" alt="Image 6" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="638" data-y="201" data-speed="300" data-start="1600" data-easing="easeOutExpo" style="left: 832.5px; top: 201px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p6.jpg" alt="Image 7" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="717" data-y="294" data-speed="300" data-start="1700" data-easing="easeOutExpo" style="left: 911.5px; top: 294px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p7.jpg" alt="Image 8" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="682" data-y="79" data-speed="300" data-start="1800" data-easing="easeOutExpo" style="left: 876.5px; top: 79px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p8.jpg" alt="Image 9" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="807" data-y="71" data-speed="300" data-start="1900" data-easing="easeOutExpo" style="left: 1001.5px; top: 71px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p9.jpg" alt="Image 10" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="818" data-y="271" data-speed="300" data-start="2000" data-easing="easeOutExpo" style="left: 1012.5px; top: 271px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p10.jpg" alt="Image 11" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="95" data-y="248" data-speed="300" data-start="2100" data-easing="easeOutExpo" style="left: 289.5px; top: 248px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p11.jpg" alt="Image 12" style="width: 140px; height: 140px;"></div>

										<div class="caption randomrotate tp-caption start" data-x="762" data-y="165" data-speed="300" data-start="2200" data-easing="easeOutExpo" style="left: 956.5px; top: 165px; opacity: 1; -webkit-transform: scale(1, 1) rotate(0deg) translate(0px, 0px); visibility: visible;"><img src="images/p12.jpg" alt="Image 13" style="width: 140px; height: 140px;"></div>
																		</li>

							

							<!-- THE THIRD SLIDE -->
							

							<!-- THE FOURTH SLIDE -->
							<li data-transition="papercut" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb5.jpg">

									<div class="slotholder"></div>

								


									<div class="caption lfl tp-caption start" data-x="53" data-y="192" data-speed="300" data-start="1400" data-easing="easeOutExpo"><img src="images/imac.png" alt="Image 4"></div>

									<div class="caption lfl tp-caption start" data-x="253" data-y="282" data-speed="300" data-start="1500" data-easing="easeOutExpo"><img src="images/ipad.png" alt="Image 5"></div>

									<div class="caption lfl tp-caption start" data-x="322" data-y="313" data-speed="300" data-start="1600" data-easing="easeOutExpo"><img src="images/iphone.png" alt="Image 6"></div>
                                    <div class="caption big_black sfb stb tp-caption start" data-x="610" data-y="100" data-speed="800" data-start="1600" data-easing="easeOutExpo"><span style="color: #d8311d; font-size: 25px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">PRACTICE TRADING FOREX</span></div>
                                    <div class="caption big_black sfb stb tp-caption start" data-x="630" data-y="150" data-speed="800" data-start="1600" data-easing="easeOutExpo"><span style="color: #0067ac; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">Trade risk free</span></div>
                                    <div class="caption big_black sfb stb tp-caption start" data-x="630" data-y="190" data-speed="800" data-start="1600" data-easing="easeOutExpo"><span style="color: #0067ac; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">Live buy & sell prices</span></div>
                                    <div class="caption big_black sfb stb tp-caption start" data-x="630" data-y="230" data-speed="800" data-start="1600" data-easing="easeOutExpo"><span style="color: #0067ac; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">$50,000 of virtual money</span></div>
                                    <div class="caption big_black sfb stb tp-caption start" data-x="630" data-y="270" data-speed="800" data-start="1600" data-easing="easeOutExpo"><span style="color: #0067ac; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">Trade online, 24-hours a day, 5 days a week</span></div>
                                    
                                    <div class="caption sft tp-caption start" data-x="600" data-y="350" data-speed="300" data-start="2300" data-easing="easeOutExpo" data-linktoslide="4"><form action="" method="post" name="unk" id="unk">
                                    <input type="submit" name="nt" id="nt" value="Live Account Registration" />
                                    </form></div>
                                    
							</li>


							<!-- THE FIFTH SLIDE -->
						
						</ul>



						<div class="tp-bannertimer" style="width: 88.40678629872582%; overflow: hidden;"></div>
					<div class="tp-loader" style="display: none;"></div></div>
				<div class="tp-bannershadow tp-shadow1" style="width: 1349px;"></div><div class="tp-bullets simplebullets round" style="visibility: visible; width: 141px; left: 604px; bottom: 20px; opacity: 1;"><div class="bullet first selected"></div><div class="bullet"></div><div class="bullet"></div><div class="bullet"></div><div class="bullet"></div><div class="bullet last"></div><div style="clear:both"></div></div><div class="tp-bullets tp-thumbs round" style="width: 500px; height: 50px; visibility: hidden; opacity: 1;"><div class="tp-mask" style="width: 500px; height: 50px;"><div class="tp-thumbcontainer" style="left: 0px;"><div class="bullet thumb first selected" style="width: 100px; height: 50px;"><img src="./SLIDER REVOLUTION - The Responsive Slider jQuery Plugin_files/thumb1.jpg"></div><div class="bullet thumb" style="width: 100px; height: 50px;"><img src="./SLIDER REVOLUTION - The Responsive Slider jQuery Plugin_files/thumb2.jpg"></div><div class="bullet thumb" style="width: 100px; height: 50px;"><img src="./SLIDER REVOLUTION - The Responsive Slider jQuery Plugin_files/thumb3.jpg"></div><div class="bullet thumb" style="width: 100px; height: 50px;"><img src="./SLIDER REVOLUTION - The Responsive Slider jQuery Plugin_files/thumb4.jpg"></div><div class="bullet thumb" style="width: 100px; height: 50px;"><img src="./SLIDER REVOLUTION - The Responsive Slider jQuery Plugin_files/thumb5.jpg"></div><div class="bullet thumb last" style="width: 100px; height: 50px;"><img src="./SLIDER REVOLUTION - The Responsive Slider jQuery Plugin_files/thumb6.jpg"></div><div style="clear:both"></div></div></div></div><div style="visibility: visible; position: absolute; left: 0px; top: 250px; opacity: 1;" class="tp-leftarrow tparrows round large"></div><div style="visibility: visible; position: absolute; left: 1309px; top: 250px; opacity: 1;" class="tp-rightarrow tparrows round large"></div></div>

				

				<div class="configurator">



					


					
				



					

				
				
				
					


					
					
				

					


					

					


					
					
					
					
					
					


		

		

		<script>
			var api;
			jQuery(document).ready(function() {
				 api =  jQuery('.fullwidthabnner').revolution(
								{
									delay:9000,
									startheight:500,
									startwidth:960,

									hideThumbs:10,

									thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
									thumbHeight:50,
									thumbAmount:5,

									navigationType:"both",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
									navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
									navigationStyle:"round",				//round,square,navbar

									touchenabled:"on",						// Enable Swipe Function : on/off
									onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

									navOffsetHorizontal:0,
									navOffsetVertical:20,

									stopAtSlide:-1,
									stopAfterLoops:-1,

									shadow:1,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
									fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
								});
			});
			
			function loadVideo(){
				jQuery("#video_link").html('<iframe id="video_frame" width="960" height="540" src="http://www.youtube.com/embed/t9N36YbFS4c?autoplay=1&fmt=22" frameborder="0" allowfullscreen style="max-width:100%;"></iframe>');
			}
		</script>



</div>
<div id="we">
<p align="center">Welcome to <b><font style="text-shadow:2px 2px 2px #999" face="Trebuchet MS, Arial, Helvetica, sans-serif">FXDM TRADER</font></b> Simplified</p><p align="center"><font size="4">Welcome to FXDM Trader, We built ourselves a reputation, so we decided to build a brand that can match it. FXDM Trader is a trading name of<br />FXDM Trader Ltd, a financial services provider that offers online forex trading in the global financial markets. Our clients benefit from <br />direct access to the financial markets in over 100 financial instruments including forex, equity indices, precious metals, and energies, with <br />transparent real-time pricing, lowest spreads, and flexible leverage. </font></p>
</div>
<div id="wee">
<div id="kanet">
<div id="kane">
<div class="kane1">
</div>
<div id="kane2">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Regulations</font>
<br /><br />
FXDM Trader Limited is authorised and regulated by the Financial Conduct Authority(FCA). FXDM Trader Financial Services Limited is authorised and regulated by the Cyprus Securities and Exchange Commision(CYSECO).
</p>
</div>
</div>

<div id="kane1">
<div class="kane11">
</div>
<div id="kane21">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Segregated <br />Accounts</font>
<br /><br />
The funds of FXDM Trader clients are deposited in segregated accounts at investment grade banks such as Barclays bank PLC, Credit Suisse AG and Royal Bank of Scotland.
</p>
</div>
</div>




<div id="kane11">
<div class="kane111">
</div>
<div id="kane211">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Insured Client<br />Funds</font>
<br /><br />
Clients of FXDM Trader are insured by the Financial Compensation Scheme (FSCS). Clients of FXDM Trader Financial Services Limited are insured by the investor's Compensation Fund(ICF).
</p>
</div>
</div>




<div id="kane111">
<div class="kane1111">
</div>
<div id="kane2111">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Negative Balance<br />Protection</font>
<br /><br />
FXDM Trader clinets benefit from negative balance protection, preventing their balances from dropping below zero at FXDm Trader own cost.
</p>
</div>
</div>






</div>

</div>

<div id="kan">
<ul class="tabs"> 
        <li class="active" rel="tab1">Why Us</li>
        <li rel="tab2"> Account Types</li>
        <li rel="tab3"> Bonus</li>
        <li rel="tab4"> Live Market Analysis</li>
        <li rel="tab5"> FAQ</li>
        <li rel="tab6"> Contact Us</li>
    </ul>

<div class="tab_container"> 

     <div id="tab1" class="tab_content"> 
 
      <div id="t1a">
     <p> FXDM Trader Limited is one of the global leaders in the realms of online Forex brokerage. Armed with cutting edge technology, tools and superior customer support, FXDM Trader stands ahead of the crowd in terms of competition makes us all the more special. Read more</p>
     <form action="" method="post">
     <input type="submit" id="live" name="live" value="Open Live Account"/>&nbsp;&nbsp;<input type="submit" id="demo" name="demo" value="Open Demo Account"/>
     </form>
      </div>
      <div id="t1b">
      </div>
      <div id="t1c">
      <p>Why should I trade with FXDM Trader ?
     </p>
      <ul>
      <li>Global experience & expertise</li>
      <li>60+ payment options</li>
      <li>Fast & Easy Withdrawals</li>
      <li>Safety of funds</li>
      <li>Spreads from 0 pips</li>
      <li>Extensive research and advisory support</li>
      </ul>
      </div>
      <div id="t1b">
      </div>
      <div id="t1d">
      <p>Call Back Request</p>
      <form action="" method="post" id="fal" name="fal">
      <input type="text" name="requ" id="requ" placeholder="&nbsp;&nbsp;&nbsp;Enter Name" /> 
      <select id="snig" name="snig">
      <option value="nigeria">&nbsp;&nbsp;Nigeria&nbsp;(+234)</option>
      
      </select>
      <input type="text" name="nuk" id="nuk" disabled="disabled" value="&nbsp;&nbsp;&nbsp;234"/>&nbsp;&nbsp;<input type="text" name="nukk" id="nukk" placeholder="&nbsp;&nbsp;Enter Phone"/>
      <input type="submit" value="submit" name="sklm" id="sklm" />
      </form>
      </div>
         
         </p>

     </div><!-- #tab1 -->
     <div id="tab2" class="tab_content"> 

       
      	<div id="t2a">
        <p>Account types we offer</p>
        <div id="lil"></div>&nbsp;&nbsp;Fxdm Lite<br /><br />
        <div id="lil"></div>&nbsp;&nbsp;Fxdm Gold<br /><br />
        <div id="lil"></div>&nbsp;&nbsp;Fxdm Premium<br /><br />
        <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
        
        </div>
        <div id="t2b">
        </div>
      	<div id="t2c">
        <p>Meta Trading 4</p>
       <table width="280px" id="tim" name="tim">
       <tr><td><div id="lil"></div>&nbsp;&nbsp;EA compatible</td>
       <td><div id="lil"></div>&nbsp;&nbsp;Intuitive interface</td></tr>
       <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
       <tr><td><div id="lil"></div>&nbsp;&nbsp;Mobile trading</td>
       <td><div id="lil"></div>&nbsp;&nbsp;Instant order execution</td></tr>
      
       
       </table>
        <form action="" method="post">
        <input type="submit" name="oacc" id="live2" value="Open Live Account" />&nbsp;<input type="submit" name="oacc222" id="live3" value="Open Demo Account" />
        </form>
        </div>
      	
    <div id="t2b">
        </div>


	<div id="t2c2">
        <p>Islamic Accounts</p>
       <table width="280px" id="tim2" name="tim2">
       <tr><td><div id="lil"></div>&nbsp;&nbsp;No swap rates</td>
       <td><div id="lil"></div>&nbsp;&nbsp;All offers applicable</td></tr>
       <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
       <tr><td><div id="lil"></div>&nbsp;&nbsp;Easy trading</td>
       <td><div id="lil"></div>&nbsp;&nbsp;Choice of executions</td></tr>
      
       
       </table>
        <form action="" method="post">
        <input type="submit" name="oacc2" id="live22" value="Open Live Account" />&nbsp;<input type="submit" name="oacc22" id="live33" value="Open Demo Account" />
        </form>
        </div>

     </div><!-- #tab2 -->
     <div id="tab3" class="tab_content"> 

     <div id="t3a">
     <p>Welcome Bonus</p>
     <ul>
     <li><div id="lil"></div>&nbsp;&nbsp;20% withdrawalable bonus</li>
      <li><div id="lil"></div>&nbsp;&nbsp;Instant and automatic credit of bonus</li>
       <li><div id="lil"></div>&nbsp;&nbsp;Maximum bonus/account is 5000 USD</li>
        <li><div id="lil"></div>&nbsp;&nbsp;Offered in MT4 Classic variant</li>
     </ul>
     <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
     </div>
     <div id="t2b">
     </div>
       <div id="t3a2">
     <p>Withdraw Bonus</p>
     <ul>
     <li><div id="lil"></div>&nbsp;&nbsp;Bonus is withdrawable by clients</li>
      <li><div id="lil"></div>&nbsp;&nbsp;Withdrawable deposit bonus of 25%</li>
       <li><div id="lil"></div>&nbsp;&nbsp;Instant and automatic credit of bonus</li>
        <li><div id="lil"></div>&nbsp;&nbsp;Offered in MT4 Classic variant</li>
     </ul>
     <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
     </div>
         <div id="t2b">
     </div>
       <div id="t3a2">
     <p>Trade Bonus</p>
     <ul>
     <li><div id="lil"></div>&nbsp;&nbsp;Bonus amount up to 100%</li>
      <li><div id="lil"></div>&nbsp;&nbsp;Offer applicable to all account types</li>
       <li><div id="lil"></div>&nbsp;&nbsp;Maximum bonus/account is 5000 USD</li>
        <li><div id="lil"></div>&nbsp;&nbsp;Only for trading purpose</li>
     </ul>
     <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
     </div>

     </div><!-- #tab3 -->
     <div id="tab4" class="tab_content"> 

      <div id="t3a">
      <p>Live Market Analysis</p>
      <br />
      Trading cannot be taught, but practised. Fundamental and technical analyses play a vital role to study the market situation and reduce the risks involved.
      <br /><br />
       <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
      </div>
 <div id="t2b">
     </div>
      <div id="t3a2">
      <p>Economic Calendar</p>
      <br />
     Economic Calendar powered by Econoday precisely tracks the economic events influencing the Forex markets.
      <br /><br /><br />
       <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
      </div>
       <div id="t2b">
     </div>
      <div id="t3a2">
      <p>Other Forex Tools</p>
      <br />
  Interest rates and holidays of major world banks play significant role for the traders to keep track of the market situation for the whole year.
      <br /><br />
       <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="More info" />
        </form>
      </div>
     
     
     </div><!-- #tab4 --> 
      <div id="tab5" class="tab_content"> 

           <div id="t3a">
      <p>Technical FAQs</p>
    <ul>
    <li>  How do I use an EA in MT4?</li>
      <li>Can I trade from charts?</li>
     <li> When to trade currency pairs?</li>
     <li> Why to trade gold and silver?</li>
      </ul>
      <br />
       <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="Find Here" />
        </form>
      </div>
 <div id="t2b">
     </div>
      <div id="t3a2">
      <p>Business FAQs</p>
      <ul>
    <li> How to open a trading account with you?</li>
    <li> What instruments can I trade?</li>
    <li> How can I become a partner?</li>
    <li> How will I get commissions?</li>
     </ul>
     <br />
       <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="Find Here" />
        </form>
      </div>
       <div id="t2b">
     </div>
      <div id="t3a2">
      <p>Funding FAQs</p>
      <ul>
<li>How to start funding my account?</li>
<li>What payment options do you offer?</li>
<li>What are your funding terms?</li>
<li>When can I withdraw my profit?</li>
</ul>
      <br />
       <form action="" method="post">
        <input type="submit" name="minf" id="sklm2" value="Find Here" />
        </form>
      </div>

     </div><!-- #tab4 -->
       <div id="tab6" class="tab_content"> 

     <div id="t4a">
     <p>Quick Contact</p>
     <form action="" method="post">
        <input type="text" name="qct" id="qct" placeholder="&nbsp;&nbsp;Enter Name" />&nbsp;<input type="text" name="qct2" id="qct2" placeholder="&nbsp;&nbsp;Enter Phone No" /><br />
        <input type="text" name="qct3" id="qct3" placeholder="&nbsp;&nbsp;Enter Email Number" /><br />
        <input type="text" name="qct4" id="qct3" placeholder="&nbsp;&nbsp;Enter Message" /><br />
        <input type="reset" value="Submit" name="skin" id="skin" />
        </form>
     </div>
   <div id="t2b">
     </div>
     
     <div id="t4b">
     <p>FXDM Trader Ltd</p>
     <br />
     14th Floor Bookshop House,<br /> 50-52 Broad Street<br /> Lagos Island, Lagos.
     <br />
     
Tel : +64 33665086<br />
Mailto:support@fxdmtrader.com
     </div>
      <div id="t2b">
     </div>
     <div id="t4c">
     <p>Connect With Us</p>
     <img src="images/Facebook(1).png" /><img src="images/Twitter(1).png" /><img src="images/youtube.png" /><img src="images/rss.png" /><img src="images/linkedin.png" />
     <p>Join Our Subscription Mailing List </p>
     
     <form action="" method="post">
     <input type="text" name="qct4" id="qct3" placeholder="&nbsp;&nbsp;Enter Email Number" /><br />
      <input type="submit" value="Subscribe" name="skin2" id="skin" />
     </form>
     </div>
     </div><!-- #tab4 -->
     
 </div> <!-- .tab_container -->
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

</div>

</div>
</body>
</html>
