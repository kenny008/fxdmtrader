<?php
if(isset($_POST['reg'])){
	$tname=$_POST['tname'];
	$cit=$_POST['cit'];
	$ema=$_POST['ema'];
	$pho=$_POST['pho'];
	$to="leads.webinar@fxdmtrader.com";
	$subject="SEMINAR REGISTRATION";
	$header="FROM: SEMINAR REGISTRATION\n";
	$message="SEMINAR REGISTRATION"."\n"."\n"."\n";
	$message.="FULL NAME: ".$tname."\n"."\n";
	$message.="CITY: ".$cit."\n"."\n";
	$message.="EMAIL ADDRESS: ".$ema."\n"."\n";
	$message.="MOBILE PHONE: ".$pho."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$mess="Thanks, you will be contacted as soon as possible";
	}
	else{
	$mess="message not sent";
	$mess.=mysql_error();	
	}
	
	
	
}
else{
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="jquery.js"></script>
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
<link rel='stylesheet' id='style-css'  href='diapo.css' type='text/css' media='all'> 
<script type='text/javascript' src='scripts/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 
<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>
<style>
section {
	margin:0px 0px 0px 0px;
	display: block;
	overflow: hidden;
	position: relative;
}
.button {
	background: #014464;
	background: -moz-linear-gradient(top, #0D658E, #0C577A 50%, #014D71 51%, #003E5C);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #0E658E), color-stop(.5, #0C577A), color-stop(.5, #014D71), to(#003E5C)); 
	border: 1px solid #368DBE;
	border-top: 1px solid #c3d6df;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0 1px 3px black;
	-webkit-box-shadow: 0 1px 3px black;
	box-shadow: 0 1px 3px black;
	color: white;
	display: block;
	font-size: 12px;
	font-weight: bold;
	height: 30px;
	line-height: 30px;
	padding: 5px 20px;
	text-align: center;
	text-decoration: none;
	text-shadow: 1px 1px 1px black;
	text-transform: uppercase;
	width: auto;
}
.button2 {
	background: #d9ae00;
	background: -moz-linear-gradient(top, #b28b06, #9c7705 50%, #9c7705 51%, #5c4100);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #b28b06), color-stop(.5, #9c7705), color-stop(.5, #9c7705), to(#5c4100)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.button3 {
	background: #ffd838;
	background: -moz-linear-gradient(top, #edbf21, #c89b0f 50%, #9c7705 51%, #906706);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #edbf21), color-stop(.5, #c89b0f), color-stop(.5, #c89b0f), to(#906706)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.price_table {
    float: right;
	font-size: 12px;
    margin: 10px auto 0;
    padding: 20px 0;
	position: relative;
	width: 570px;
}
.price_table .price_column.highlighted {
	background: #ffd838;
    margin: -5px!important;
	padding: 10px;
    z-index: 2;
}
.price_table .price_column {
	display: block;
	margin: 5px;
    float: left;
    position: absolute;
	width: 180px;
    z-index: 1;
}
.price_table .price_column > div {
	background: #eeeeee;
}
.price_table .price_column > div > div {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_column > div > p {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_column > div > ul {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_title {
	background-color: #333333;
    border-top: 0!important;
    color: #ffffff;
    font-size: 14px;
}
.price_table .highlighted .price_title {
    font-size: 16px;
}
.price_table .price_price {
    font-size: 36px;
    line-height: 40px;
}
.price_table .highlighted  .price_price {
    font-size: 40px;
    line-height: 44px;
}
.price_table .price_explanation {
	font-size: 10px;
    line-height: 13px;
    text-transform: uppercase;
}
.price_table .cusButton {
	background-color: #333333;
	display: block;
    text-align: center;
}
.price_table li {
	padding: 5px 0;
}
.price_table div.pix_check {
	background: url(images/demo/list-check-green.png) no-repeat 15px center;
    padding-left: 38px!important;
}
.price_table div.pix_error {
	background: url(images/demo/list-error.png) no-repeat 15px center;
    padding-left: 38px!important;
}
</style>

<style type="text/css">

	ul.tabs {
		margin: 30px 0px 0px 200px;
		padding: 0;
		float: left;
		list-style: none;
		height: 32px;
		border-bottom: 1px solid #999999;
		border-left: 1px solid #999999;
		width: 750px;
		
	}
	ul.tabs li {
		float: left;
		margin: 0;
		cursor: pointer;
		padding: 0px 21px ;
		height: 31px;
		line-height: 31px;
		border: 1px solid #999999;
		border-left: none;
		font-weight: bold;
		background: #EEEEEE;
		overflow: hidden;
		position: relative;
	}
	ul.tabs li:hover {
		background: #CCCCCC;
	}	
	ul.tabs li.active{
		background: #FFFFFF;
		border-bottom: 1px solid #FFFFFF;
	}
	.tab_container {
		border: 1px solid #999999;
		border-top: none;
		clear: both;
		float: left; 
		width: 750px;
		background: #FFFFFF;
		margin: 0px 0px 0px 200px;
		
	}

	.tab_content {
		padding: 20px;
		font-size: 1.2em;
		display: none;
		height:140px;
		margin:40px 0px 0px 0px;
		box-shadow: 0px 8px 10px  #9c9c9c;
	}
	.tab_content img {
		float:left;
		margin:0px 40px 0px 0px;
		border-radius:5px;
	}
	.tab_content #tt{
	
		margin:0px 0px 0px 0px;
			font-family:Verdana, Geneva, sans-serif;
	font-size:13px;
		
	}
	.tab_content a{
	
		color:#03B9E8;
		text-decoration:none;
		
	}
	.tab_content p {
	font-family:Verdana, Geneva, sans-serif;
	font-size:13px;
	}
	#container {
		width: 750px;
		margin: 0 auto;	
	}
</style>
<!-- Facebook Conversion Code for Reserve a Seat -->
<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6015323583365';
fb_param.value = '0.01';
fb_param.currency = 'USD';
(function(){
var fpw = document.createElement('script');
fpw.async = true;
fpw.src = '//connect.facebook.net/en_US/fp.js';
var ref = document.getElementsByTagName('script')[0];
ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6015323583365&amp;value=0.01&amp;currency=USD" /></noscript>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/sem.css" />
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/semres.css" />
</head>

<body>
<div id="head">
<div id="head1">
<img src="images/logo.png" /><p>Your Success Our Passion</p>
</div>
</div>
<div id="nav">
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
<div id="mid">

<div id="mid1">
<section> 
    
    	<div style="overflow:hidden; width:960px; "> 
                <div class="pix_diapo">

                    <div data-thumb="images/thumbs/megamind1048.jpg">
                        <img src="images/slide.jpg" width="940" height="470">
                     
                    </div>
                    
                    <div data-thumb="images/thumbs/megamind_07.jpg">
                        <img src="images/slide3.jpg" width="940" height="470"> 
                       
                       
                    </div>
                    
                    <div data-thumb="images/thumbs/wall-e.jpg" data-time="7000">
                        <img src="images/slide4.jpg" height="470" width="1000">
                       
                        
                       
                        
                    </div>
                    
                   
                    
                    <div data-thumb="images/thumbs/big_buck_bunny.jpg" data-time="7000">
                        <div style="position:absolute; top:0; left:0; width:900px; height:430px; padding:20px; background:#fff; color:#222;">
                        	<div style="float:left; width:300px;">
                                <p><br><br>You can display any html element directly in the slider, but pay attention, with many elements the transition effect could be slowed.<br>
                                In this case you can see a Vimeo video and a price table</p>
                                <iframe src="http://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;portrait=0&amp;color=f0bc00&amp;autoplay=1" data-fake="images/slides/big_buck_bunny.jpg" width="300" height="169" frameborder="0"></iframe>
                            </div>
                            <div class="price_table"><div>
                                <div class="price_column highlighted" style="top:0; left:190px; height:387px; background:#fff; -moz-box-shadow: 0 1px 4px #666;	-webkit-box-shadow: 0 1px 4px #666; box-shadow: 0 1px 4px #666;"><div>
                                </div></div><!-- .price_column --> 
                                <div class="price_column" style="top:0; left:0; height:383px; background:#ddd; -moz-box-shadow: 0 1px 4px #666;	-webkit-box-shadow: 0 1px 4px #666; box-shadow: 0 1px 4px #666;"><div> 
                                </div></div><!-- .price_column --> 
                                <div class="price_column" style="top:0; left:380px; height:383px; background:#ddd; -moz-box-shadow: 0 1px 4px #666;	-webkit-box-shadow: 0 1px 4px #666; box-shadow: 0 1px 4px #666;"><div>
                                </div></div><!-- .price_column -->
                                <div class="price_column highlighted fadeIn" style="top:0; left:190px;"><div>
                                    <div class="price_title">Standard</div><!-- .price_title --> 
                                    <div class="price_price">$9/mo.</div><!-- .price_price --> 
                                    <div class="price_explanation">And as the day advanced and the engine drivers</div><!-- .price_explanation --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_error">Error sign</div><!-- .pix_error --> 
                                    <div>
                                        <a class="button button3" href="#">Purchase</a>
                                    </div>
                                </div></div><!-- .price_column --> 
                                <div class="price_column fromTop" style="top:0; left:0"><div> 
                                    <div class="price_title">Basic</div><!-- .price_title --> 
                                    <div class="price_price">Free</div><!-- .price_price --> 
                                    <div class="price_explanation">And as the day advanced and the engine drivers</div><!-- .price_explanation --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_error">Error sign</div><!-- .pix_error --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_error">Error sign</div><!-- .pix_error --> 
                                    <div>
                                        <a class="button" href="#">Purchase</a>
                                    </div> 
                                </div></div><!-- .price_column --> 
                                <div class="price_column fromBottom" style="top:0; left:380px;"><div>
                                    <div class="price_title">Professional</div><!-- .price_title --> 
                                    <div class="price_price">$19/mo.</div><!-- .price_price --> 
                                    <div class="price_explanation">And as the day advanced and the engine drivers</div><!-- .price_explanation --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div class="pix_check">Check sign</div><!-- .pix_check --> 
                                    <div>
                                        <a class="button" href="#">Purchase</a>
                                    </div> 
                                </div></div><!-- .price_column --> 
                            </div></div><!-- price_table -->
                        </div>
                    </div>
                    
                    
                    <div data-thumb="images/thumbs/ratatouille2.jpg">
                        <img src="images/slides/ratatouille2.jpg">
                    </div>
                    
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 



</div>

</div>
<div id="jen">
<div id="jen2">
 <ul class="tabs"> 
        <li class="active" rel="tab1">Why Us</li>
        <li rel="tab2"> Platforms</li>
        <li rel="tab3"> Accounts</li>
        <li rel="tab4"> Live Market Analysis</li>
        <li rel="tab5"> Webinar</li>
    </ul>

<div class="tab_container"> 

     <div id="tab1" class="tab_content"> 
 
         <p><img src="images/why.jpg" height="150px" width="200px"> 
       
         <table border="0" id="tt" width="450px">
         <tr><td>&raquo;&nbsp;Regulated in new zealand</td>
         <td>&raquo;&nbsp;STP based</td></tr>
         <tr><td>&raquo;&nbsp;No requotes</td>
         <td>&raquo;&nbsp;Flawless execution</td></tr>
         <tr><td>&raquo;&nbsp;Excellent customer service</td>
         <td>&raquo;&nbsp;Segregated account</td></tr>
         <tr><td>&raquo;&nbsp;Expert support</td>
         <td>&raquo;&nbsp;Live MArket Analysis</td></tr>
         <tr><td>&raquo;&nbsp;Online Education/Webinar</td>
         <td>&raquo;&nbsp;Competitive spread</td></tr>
          <tr><td>&raquo;&nbsp;Promote deposit/withdrawal</td>
         </tr>
         </table>
         
         </p>

     </div><!-- #tab1 -->
     <div id="tab2" class="tab_content"> 

       <p><img src="images/plat.jpg" height="150px" width="200px"> 
       The FXDM MetaTrader 4 terminal is a perfectly equipped traders' workplace that allows to trade in the financial markets (Forex, CFD and Futures). It provides the necessary tools and resources to analyze price dynamics of financial instruments, make the trade transactions, create and use trading programs (Expert Advisors).&nbsp;<a href="plat.php">Read more</a>
      	
      	
      	
       </p>

     </div><!-- #tab2 -->
     <div id="tab3" class="tab_content"> 

       <p><img src="images/tra.jpg" height="150px" width="200px">
      	FXDM LITE is designed for traders who are new to the Forex market. FXDMLITE account gives traders ample opportunity to trade smaller lot sizes and an initial deposit as low as $50.&nbsp;<a href="acctn.php">Read more</a>
      	
      	
       </p>

     </div><!-- #tab3 -->
     <div id="tab4" class="tab_content"> 

       <p><img src="images/liv.jpg" height="150px" width="200px">
       This is another value innovative service rendered by FXDM to its esteemed clients. 0700-0900(GMT) daily, FXDM and its team of experts analyse the forex market, looking at the Majors and metals.&nbsp;<a href="lma.php">Read more</a> 
      	
 
      	
       </p>

     </div><!-- #tab4 --> 
      <div id="tab5" class="tab_content"> 

       <p><img src="images/web.jpg" height="150px" width="200px"> Our FX Webinars are designed to help traders get on well with the trading, providing daily market live analysis and teaching topics that are relevant to various traders' methods.&nbsp;<a href="we.php">Read more</a>
    
      
      	
       </p>

     </div><!-- #tab4 -->
     
 </div> <!-- .tab_container -->
 <div id="amq2">
<form action="" method="post">

<ul>

<li><div id="abdv4"><div id="abdv2"><p>About Us</p></div></div><P>FXDM is a regulated Online FX Broker that offers a wide range of trading technologies for both institutional and retail clients...<br /><br /><input type="submit" name="more" id="more" value="read more" /> </P></li>
<li><div id="abdv"><div id="abdv2"><p>Business Model</p></div></div><p>FXDM STP forex broker operates No Dealing Desk. Our business model implements Straight Through Processing (STP)...<br /><br /><input type="submit" name="more2" id="more" value="read more" /></p></li>
<li><div id="abdv3"><p>Friendly Bonus<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upto<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$5000</p></div><p>The Offers relate to a minimum approved deposit of $50....<br /><br /><input type="submit" name="more3" id="more" value="read more" /></p></li>
</ul>
</form>
</div>

</div>
<div id="jen3">
<div id="kjj">
<div id="jen4">
<div id="jen5">
<div id="jen6">
<p align="center">DEMO ACCOUNT REGISTRATION</p>
</div>
<form action="" method="post" name="fan" id="fan">
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<p><input type="text" name="tname" id="tname" Placeholder="&nbsp;&nbsp;&nbsp;Full Name:" required/></p>
<p><input type="text" name="cit" id="tname" Placeholder="&nbsp;&nbsp;&nbsp;Country:" required/></p>
<p><input type="text" name="ema" id="tname" Placeholder="&nbsp;&nbsp;&nbsp;Email:" required/></p>
<p><input type="text" name="pho" id="tname" Placeholder="&nbsp;&nbsp;&nbsp;Phone:" required/></p>
<p><input type="submit" name="reg" id="reg" Value="Trade Now"/></p>
</form>
<div id="kjen2">
<div id="jen44">
<div id="jen55">
<div id="jen6">
<p align="center">COMPANY NEWS</p>
</div>




</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="foot">
<p><font color="#FF0000" size="+1">RISK WARNING:</font> Trading in Forex and Metals, which are leveraged products, is highly speculative and involves substantial risk of loss and may not be suitable for all <br />investors It is possible to lose more than the initial capital invested. Trade only with the capital for which you are prepared to lose. So please ensure that you fully consult <br />financial advice if necessary.<br /><br />FXDM is regulated in New Zealand as a Financial Service provider (FSP) with registration number 4634719. We are also a member of the Financial Services Complaints <br />Ltd that provides dispute resolution services to participating financial service providers (FSPs) and their numerous clients.<br /><br /><br /><font color="#FF0000">FXDM does not provide services for United States and Canada residents and/or citizens.</font><br /><br />Copyright © 2013, fxdmtrader.com
<br /><br />
<img src="images/Skrill4.png"/>
</p>
</div>

</body>
</html>
