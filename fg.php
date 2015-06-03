<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/ken.css" />
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/ken1.css" />
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

</head>

<body>
<div id="containerr">
<div id="head1">
<div id="head2">
<img src="images/logo.png" /><p>Your Success Our Passion</p>
</div>
<div id="head3">

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



</div>
<div id="we">
<p align="center">Welcome to <b>FXDM TRADER</b> Simplified</p><p align="center"><font size="4">Welcome to FXDM Trader, We built ourselves a reputation, so we decided to build a brand that can match it. FXDM Trader is a trading name of<br />FXDM Trader Ltd, a financial services provider that offers online forex trading in the global financial markets. Our clients benefit from <br />direct access to the financial markets in over 100 financial instruments including forex, equity indices, precious metals, and energies, with <br />transparent real-time pricing, lowest spreads, and flexible leverage. </font></p>
</div>
<div id="wee">
<div id="wee2">
<div id="ab">
<p align="center"><br />ABOUT US</p>
</div>
<img src="images/aboutus.jpg" width="140" height="105"/><p>FXDM is a regulated Online FX Broker that offers a wide range of trading technologies for both institutional and retail clients...<form action="" method="post" id="fa"><p><input type="submit" name="more" id="more" value="Read more" /></p></form></p>
</div>
<div id="wee22">
<div id="ab">
<BR />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BUSINESS MODEL
</div>
<img src="images/bmm.jpg" width="140" height="105"/><p>FXDM STP forex broker operates No Dealing Desk. Our business model implements Straight Through Processing (STP)...<form action="" method="post" id="fa"><p><input type="submit" name="more" id="more" value="Read more" /></p></form></p>
</div>
<div id="wee22">
<div id="ab">
<BR />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FRIENDLY BONUS
</div>
<img src="images/BusinessSupportnew.jpg" /><p>The Offers relate to a minimum approved deposit of $50....<br /><br /><br /><form action="" method="post" id="fa"><p><input type="submit" name="more" id="more" value="Read more" /></p></form></p>
</div>
<div id="wee22">
<div id="ab">
<BR />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MARKET ANALYSIS
</div>
<img src="images/maw.jpg" width="140" height="105"/><p>This is another value innovative service rendered by FXDM to its esteemed clients. 0700-0900(GMT) daily...<form action="" method="post" id="fa"><p><input type="submit" name="more" id="more" value="Read more" /></p></form></p>
</div>
</div>
<div id="kan">
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
<br /><br />
<img src="images/Skrill4.png" width="100" height="50"/>
</p>
</div>
</div> 
</div>
</body>
</html>
