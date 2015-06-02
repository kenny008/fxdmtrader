<?php require_once("inc/session.php");?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['suk'])){
header("Location:we.php");
exit;	
	
}

?>
<?php   
if(isset($_POST['skin2'])){
	$po=$_POST['qct4'];
	$em=$_POST['qctt4'];
	
$to="info@fxdmtrader.com";
	$subject="NEWSLETTER REQUEST";
	$header="\n";
	$message="CALL BACK REQUEST"."\n"."\n";
	$message.="FULLNAME: ".$name."\n"."\n";
	$message.="PHONE: ".$phone."\n"."\n";
		if(mail($to,$subject,$header,$message)){
	echo '<script type="text/javascript">
        window.alert("You will be contacted as soon as possible.")
        </script>';
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	


	
}


?>
<?php
if(isset($_POST['sklm'])){
$name=$_POST['requ'];
$phone=$_POST['nukk'];
$to="support@fxdmtrader.com";
	$subject="CALL BACK REQUEST";
	$header="\n";
	$message="CALL BACK REQUEST"."\n"."\n";
	$message.="FULLNAME: ".$name."\n"."\n";
	$message.="PHONE: ".$phone."\n"."\n";
		if(mail($to,$subject,$header,$message)){
	echo '<script type="text/javascript">
        window.alert("You will be contacted as soon as possible.")
        </script>';
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	
	
}
else{
	
}

?>
<?php
if(isset($_POST['skin'])){
$name=$_POST['qct'];
$phone=$_POST['qct2'];
$email=$_POST['qct3'];
$mes=$_POST['qct4'];
$to="support@fxdmtrader.com";
	$subject="CONTACT";
	$header="\n";
	$message="CONTACT DETAILS"."\n"."\n";
	$message.="FULLNAME: ".$name."\n"."\n";
	$message.="PHONE: ".$phone."\n"."\n";
	$message.="EMAIL: ".$email."\n"."\n";
	$message.="MESSAGE: ".$mes."\n"."\n";
		if(mail($to,$subject,$header,$message)){
	echo '<script type="text/javascript">
        window.alert("You will be contacted as soon as possible.")
        </script>';
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	
	
}
else{
	
}

?>
<?php
if(isset($_POST['cl2'])){
	header("Location:whyfxd.php");
	exit;
}

?>
<?php
if(isset($_POST['ca2'])){
	header("Location:bonus.php");
	exit;
}

?>
<?php
if(isset($_POST['live'])){
	header("Location:log.php");
	exit;
}
else if(isset($_POST['demo'])){
	header("Location:demoa.php");
	exit;
}

else if(isset($_POST['oacc'])){
header("Location:act.php");
exit;	
}
else if(isset($_POST['minfl'])){
header("Location:lma.php");
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

<meta property="og:image" content="http://www.fxdmtrader.com/images/forex-banner-1 (2).jpg">

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
      if($(window).scrollTop()>1200){
         $("#footer").fadeOut();
      }else{
         $("#footer").fadeIn();
      }

});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#kane").click(function(){
	location.href="http://www.fxdmtrader.com/reg.php";
	 });
	  });
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#kane110").click(function(){
	location.href="http://www.fxdmtrader.com/mobt.php";
	 });
	  });
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#kane11").click(function(){
	location.href="http://www.fxdmtrader.com/ib.php";
	 });
	  });
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#kane111").click(function(){
	location.href="http://www.fxdmtrader.com/pm.php";
	 });
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
     $("#kane11").hover(function(){
		$(".kane111").animelt({
    transform: "rotate(180deg)",
    width: "90px"   
},  800, "easeOutElastic");
$(" .kane111").css("background","#293a48");

		
		$("#kane211").css("color","#d8311d");
		},function(){
			$(".kane111").animelt({
    transform: "rotate(0deg)",
    width: "90px" 
},  800, "easeOutElastic");
			$(" .kane111").css("background","#d8311d");
			$(".kane111").animate({
			width:'80px',
			height:'80px'
		}, 1000);
		 $("#kane211").css("color","#333");
		 
		 
		 
	 });

});
</script>



<script type="text/javascript">

$(document).ready(function(){
     $("#kane111").hover(function(){
		$(".kane1111").animelt({
    transform: "rotate(180deg)",
    width: "90px"   
},  800, "easeOutElastic");
$(" .kane1111").css("background","#293a48");

		
		$("#kane2111").css("color","#d8311d");
		},function(){
			$(".kane1111").animelt({
    transform: "rotate(0deg)",
    width: "90px" 
},  800, "easeOutElastic");
			$(" .kane1111").css("background","#d8311d");
			$(".kane1111").animate({
			width:'80px',
			height:'80px'
		}, 1000);
		 $("#kane2111").css("color","#333");
		 
		 
		 
	 });

});
</script>




<script type="text/javascript">

$(document).ready(function(){
     $("#kane110").hover(function(){
		$(".kane11").animelt({
    transform: "rotate(180deg)",
    width: "90px"   
},  800, "easeOutElastic");
$(" .kane11").css("background","#293a48");

		
		$("#kane21").css("color","#d8311d");
		},function(){
			$(".kane11").animelt({
    transform: "rotate(0deg)",
    width: "90px" 
},  800, "easeOutElastic");
			$(".kane11").css("background","#d8311d");
			$(".kane11").animate({
			width:'80px',
			height:'80px'
		}, 1000);
		 $("#kane21").css("color","#333");
		 
		 
		 
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
<a href="index.php"><img src="images/logom.png" width="90" height="90"/></a><p>Your Success Our Passion</p>
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
echo"<li><a href=\"index.php\"><font color=\"#03B9E8\">HOME</font></a></li>";
echo"<li><a href=\"aboutus.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"whyfxd.php\">WHY FXDMTrader</a>";
echo"</li>";
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
echo"<li><a href=\"client.php\">CLIENT AREA</a></li>";
echo"<li><a href=\"logout.php\">LOGOUT</a></li>";
echo"</ul>";
echo"</div>";
}else{

echo"<div id=\"nav1\">";
echo"<ul id=\"d\">";
echo"<li><a href=\"index.php\"><font color=\"#03B9E8\">HOME</font></a></li>";
echo"<li><a href=\"aboutus.php\">ABOUT</a>";
echo"<ul>";
echo"<li>";
echo"<a href=\"whyfxd.php\">WHY FXDMTrader</a>";
echo"</li>";
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
<div id="mid">
<div class="fullwidthbanner-container">
					<div class="fullwidthabnner tp-simpleresponsive hovered" style="height: 703px;">
						<ul>
							<!-- THE FIRST SLIDE -->
							<li data-transition="slide" data-slotamount="10" data-masterspeed="300" data-thumb="images/thumbs/thumb1.jpg" style="visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<div class="slotholder"><img src="images/wide1.jpg" class="defaultimg" style="width: 1920px; height: 500px; position: absolute; left: -285.5px; top: 0px; opacity: 1;"></div>

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb tp-caption start" data-x="176" data-y="15" data-speed="300" data-start="800" data-easing="easeOutExpo" style="font-size: 40px; padding: 0px; margin: 0px; border: 0px; line-height: 40px; white-space: nowrap; opacity: 1; left: 370.5px; top: 15px; -webkit-transform: scale(1, 1) rotate(0deg); visibility: visible;">NUMEROUS SATISFIED CUSTOMERS</div>

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
						<li data-transition="slide" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb5.jpg" style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">

									<div class="slotholder"><img src="images/forex-banner-1 (2).jpg" class="defaultimg" style="width: 960px; height: 350px; opacity: 0;"></div>
<div class="caption large_text sfr tp-caption start" data-x="30" data-y="435" data-speed="300" data-start="1100" data-easing="easeOutExpo" style="font-size: 20px; padding: 0px; margin: 0px; border: 0px; line-height: 40px; white-space: nowrap; opacity: 0; left: 178px; top: 78px; -webkit-transform: scale(1, 1) rotate(0deg); visibility: visible;"><span style="color: #ffc600;"><form action="" method="post"><input type="submit" name="cl2" id="cl2" value="READ MORE" /></form></span></div>
									
							</li>

                            
<li data-transition="slide" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb5.jpg" style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">

									<div class="slotholder"><img src="images/forex-banner-2(1).jpg" class="defaultimg" style="width: 960px; height: 350px; opacity: 0;"></div>

									
							</li>

<li data-transition="slide" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb5.jpg" style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">

									<div class="slotholder"><img src="images/forex-banner-3.jpg" class="defaultimg" style="width: 960px; height: 350px; opacity: 0;"></div>

									
							</li>
<li data-transition="slide" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb5.jpg" style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">

									<div class="slotholder"><img src="images/toke2.jpg" class="defaultimg" style="width: 960px; height: 350px; opacity: 0;"></div>
<div class="caption large_text sfr tp-caption start" data-x="150" data-y="435" data-speed="300" data-start="1100" data-easing="easeOutExpo" style="font-size: 20px; padding: 0px; margin: 0px; border: 0px; line-height: 40px; white-space: nowrap; opacity: 0; left: 178px; top: 78px; -webkit-transform: scale(1, 1) rotate(0deg); visibility: visible;"><span style="color: #ffc600;"><form action="" method="post"><input type="submit" name="ca2" id="cl2" value="READ MORE" /></form></span></div>
									
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
<p align="center">Welcome to <b><font style="text-shadow:2px 2px 2px #999" face="Trebuchet MS, Arial, Helvetica, sans-serif">FXDMTrader</font></b></p>
</div>
<div id="wee">
<div id="kanet">
<div id="kane">
<div class="kane1">

</div>
<div id="kane2">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Regulations</font>
<br /><br />
FXDM Financial services limited (FXDM) is an Authorized online forex broker regulated by the New Zealand Financial Providers Registrar (FSPR) as a Financial Services provider (FSP) and is mandated to adhere to strict regulations and ..... 
</p>
</div>
</div>

<div id="kane110">
<div class="kane11">

</div>
<div id="kane21">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Mobile Trading</font>
<br /><br />
Mobile trading allows you to manage your accounts from portable devices like smartphones, pocket and tablet PCs. In MetaTrader 4, mobile trading offers a great variety of analytical options and graphical display of quotes in addition to the complete trade account management. 
</p>
</div>
</div>




<div id="kane11">
<div class="kane111">
</div>
<div id="kane211">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Introducing<br />Brokers</font>
<br /><br />
FXDM's Introducing Broker (IB) program allows Individuals and Organizations to get compensated for introducing clients to FXDM. We take care of all the administration and back-end allowing you our IB to focus on what you know doing best – Referring clients 
</p>
</div>
</div>




<div id="kane111">
<div class="kane1111">
</div>
<div id="kane2111">
<p align="center"><font style="font-weight:bold"  face="Courier New, Courier, monospace" size="+2">Portfolio<br />Manager</font>
<br /><br />
FXDM's Multi Account Manager (MAM) software offers professional traders of multiple accounts and asset managers with an ideal solution to manage several MetaTrader 4 (MT4) trading accounts simultaneously.
</p>
</div>
</div>






</div>

</div>

<div id="kan">
<ul class="tabs"> 
        <li class="active" rel="tab1">Why Us</li>
        <li rel="tab2"> Account Types</li>
        <li rel="tab4"> Live Market Analysis</li>
       
        <li rel="tab6"> Contact Us</li>
    </ul>

<div class="tab_container"> 

     <div id="tab1" class="tab_content"> 
 
      <div id="t1a">
     <p> FXDMTrader Limited is one of the global leaders in the realms of online Forex brokerage. Armed with cutting edge technology, tools and superior customer support, FXDM Trader stands ahead of the crowd in terms of competition which makes us all the more special. Read more</p>
     <form action="" method="post">
     <input type="submit" id="live" name="live" value="Open Live Account"/>&nbsp;&nbsp;<input type="submit" id="demo" name="demo" value="Open Demo Account"/>
     </form>
      </div>
      <div id="t1b">
      </div>
      <div id="t1c">
      <p>Why should I trade with FXDMTrader ?
     </p>
      <ul>
      <li>Global experience & expertise</li>
      <li>Multiple payment options</li>
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
      <input type="text" name="requ" id="requ" placeholder="&nbsp;&nbsp;&nbsp;Enter Name" required/> 
     
      <input type="text" name="nukk" id="snig" placeholder="&nbsp;&nbsp;Enter Phone" required/>
      <input type="submit" value="submit" name="sklm" id="sklm" />
      </form>
      </div>
         
         </p>

     </div><!-- #tab1 -->
     <div id="tab2" class="tab_content"> 

       
      	<div id="t2a">
        <p>Fxdm Lite</p>
        <div id="lil"></div>&nbsp;&nbsp;FXDM Lite is designed for traders who &nbsp;&nbsp;are new to the Forex market. FXDMLITE &nbsp;&nbsp;account gives traders ample opportunity to &nbsp;&nbsp;trade smaller lot sizes and an initial &nbsp;&nbsp;deposit as low as $50.<br /><br />
        
        <form action="" method="post">
        <input type="submit" name="oacc" id="sklm2" value="More info" />
        </form>
        
        </div>
        <div id="t2b">
        </div>
      	<div id="t2c">
        <p>Fxdm Gold</p>
       <table width="280px" id="tim" name="tim">
       <tr><td><div id="lil"></div>&nbsp;&nbsp;FXDM Gold is designed for experienced &nbsp;&nbsp;traders. FXDM GOLD gives traders excellent &nbsp;&nbsp;trading conditions with include a no-requotes.</td>
      
      
       
       </table>
       <br /><br />
        <form action="" method="post">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="oacc" id="sklm2" value="More Info" />
        </form>
        </div>
      	
    <div id="t2b">
        </div>


	<div id="t2c2">
        <p>Fxdm Plantinum</p>
       <table width="280px" id="tim2" name="tim2">
       <tr><td><div id="lil"></div>&nbsp;&nbsp;FXDM PLATINUM is designed for high volume &nbsp;&nbsp;traders who are looking for excellent trading &nbsp;&nbsp;condition and tight spreads</tr>
      
       
       </table>
       <br /><br />
        <form action="" method="post">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="oacc" id="sklm2" value="More Info" />
        </form>
        </div>

     </div><!-- #tab2 -->
    

     
     <div id="tab4" class="tab_content"> 

      <div id="t3a">
      <p>Live Market Analysis</p>
      <br />
      Trading cannot be taught, but practised. Fundamental and technical analyses play a vital role to study the market situation and reduce the risks involved.
      <br /><br />
       <form action="" method="post">
        <input type="submit" name="minfl" id="sklm2" value="More info" />
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
     
       <div id="tab6" class="tab_content"> 

     <div id="t4a">
     <p>Quick Contact</p>
     <form action="" method="post">
        <input type="text" name="qct" id="qct" placeholder="&nbsp;&nbsp;Enter Name" required/>&nbsp;<input type="text" name="qct2" id="qct2" placeholder="&nbsp;&nbsp;Enter Phone No" required/><br />
        <input type="text" name="qct3" id="qct3" placeholder="&nbsp;&nbsp;Enter Email Number"  required/><br />
        <input type="text" name="qct4" id="qct3" placeholder="&nbsp;&nbsp;Enter Message"  required/><br />
        <input type="submit" value="Submit" name="skin" id="skin" />
        </form>
     </div>
   <div id="t2b">
     </div>
     
     <div id="t4b">
     <p>NEW ZEALAND OFFICE</p>
     <br />
     38, Birmingham Drive,
Middleton,<BR />
Christchurch 8024, New<BR />
Zealand<br />
     <br />
     
Tel : +64 33665086<br />
Mailto:support@fxdmtrader.com
     </div>
      <div id="t2b">
     </div>
     <div id="t4c">
     <p>Connect With Us</p>
     <img src="images/Facebook(1).png" /><img src="images/Twitter(1).png" /><img src="images/youtube.png" /><img src="images/rss.png" /><img src="images/linkedin.png" />
     <p>Subscribe to Daily Expert Analysis </p>
     
     <form action="" method="post">
     <input type="text" name="qct4" id="love" placeholder="&nbsp;Enter Phone" /><input type="text" name="qctt4" id="love2" placeholder="&nbsp;&nbsp;Enter Email" /><br />
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
