<?php require_once("inc/session.php");?>
<?php con_login(); ?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['suk'])){
header("Location:wec.php?IBRefrenceNumber={$_GET['IBRefrenceNumber']}");
exit;	
	
}

?>
<?php
if(isset($_POST['st'])){
$username=$_POST['unr'];
$password=$_POST['papa'];
$hashed_password=sha1($password);
$email=$_POST['epapa'];
$fullname=$_POST['fpapa'];
$gender=$_POST['rapapa'];
$telephone=$_POST['tpapa'];
$ibref=$_POST['ibpapa'];
$actype=$_POST['atc'];
$dob=$_POST['dpapa'];
$dater=date("Y-m-d");
$nationality=$_POST['npapa'];
$address=$_POST['ttpapa'];
$go=true;
$query1="SELECT username FROM user";
	$user_set=mysql_query($query1,$connection);
	while($usern=mysql_fetch_array($user_set)){
	if($usern['username']==$username)
	{
		$mess="username already exists";
		$go=false;
		
	}
	
	}
	if($go!=false){
$query="INSERT INTO user(username,hashed_password,email,fullname,gender,telephone,ibref,actype,dob,nationality,address,dater) VALUES('{$username}','{$hashed_password}','{$email}','{$fullname}','{$gender}','{$telephone}','{$ibref}','{$actype}','{$dob}','{$nationality}','{$address}','{$dater}')";
$result=mysql_query($query,$connection);
if(mysql_affected_rows()==1){
	
	$query2="SELECT * FROM user WHERE username='{$username}'";
	$result2=mysql_query($query2, $connection);
	if(mysql_num_rows($result2)==1){
		$result2s=mysql_fetch_array($result2);
		$uid=$result2s['id'];
		$uname=$result2s['username'];
		$kan=$uname.$uid;
	$query3="UPDATE user SET 
	usek='$kan'
	WHERE username='{$username}'";	
	$result3=mysql_query($query3,$connection);
	if(mysql_affected_rows()==1){
		$to="sales@fxdmtrader.com";
	$subject="LIVE ACCOUNT REGISTRATION";
	$header="FROM: REGISTERATION\n";
	$message="REGISTRATION DETAILS"."\n"."\n";
	$message.="FULL NAME: ".$fullname."\n"."\n";
	$message.="USERNAME: ".$username."\n"."\n";
	$message.="EMAIL ADDRESS: ".$email."\n"."\n";
	$message.="MOBILE NUMBER: ".$telephone."\n"."\n";
	$message.="DATE OF BIRTH: ".$dob."\n"."\n";
	$message.="ADDRESS: ".$address."\n"."\n";
	$message.="NATIONALITY: ".$nationality."\n"."\n";
	$message.="GENDER: ".$gender."\n"."\n";
	$message.="IB REFRENCE NUMBER: ".$ibref."\n"."\n";
	$message.="ACCOUNT TYPE: ".$actype."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$to= $email;
	$subject="FXDMTrader Login Details";
	$header="FROM:My Fxdm Login Details\n";
	$message="My Fxdm Login Details"."\n"."\n";
	$message.="USERNAME: ".$username."\n"."\n";
	$message.="PASSWORD: ".$password."\n"."\n";
	$message.="Congratulations your Meta Trader 4 login details will be sent to you shortly "."\n"."\n";
	$message.="Regards "."\n"."\n";
	$message.="FXDMTrader "."\n"."\n";
	if(mail($to,$subject,$header,$message)){
		$queryr="SELECT * FROM user WHERE usek='$ibref'";
		$resl=mysql_query($queryr,$connection);
		if(mysql_num_rows($resl)==1){
			$resls=mysql_fetch_array($resl);
			$remail=$resls['email'];
			$runame=$resls['fullname'];
			$rusek=$resls['usek'];
				$to= $remail;
	$subject="FXDMTrader Client Signup";
	$header="FROM:FXDMTrader Client Signup\n";
	$message="My Fxdm Refree Details"."\n"."\n";
	$message.="Dear ".$runame."\n"."\n";
	$message.="This is to notify you that ".$fullname." has opened an accout and registered under your IB number ".$rusek." to confirm this please log into our website at www.fxdmtrader.com or call 01-3428082"."\n"."\n";
	$message.="Regards "."\n"."\n";
	$message.="FXDMTrader "."\n"."\n";
			if(mail($to,$subject,$header,$message)){
$mess="Your Account Have been created Successfully";
			}
			else{
				
			$mess="message not sent to refree";
			$mess.=mysql_error();	
			}
		}
		else{
			
		$mess="refree selection failed";
		$mess.mysql_error();	
		}
}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
	}
	else{
	$mess="Message not sent";
	$mess.=mysql_error();	
	}
		
		
		
		
	
	}
	else{
		$mess="Update failed";
		$message.=mysql_error();
	}
	}
	else{
		$mess="Selection failed";
		$message.=mysql_error();
	}
}
else{
	$mess="Insert failed";
		$mess.=mysql_error();
}
}
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
      if($(window).scrollTop()>1000){
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
<img src="images/logom.png" width="90" height="90"/><p>Your Success Our Passion</p>
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

<div id="logf">
<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="logf1">
<p>Live Account Registration</p>
</div>
<div id="logf2">
</div>
<div id="logf3">
<form action="" method="post">
<p>Username</p>
<p><input type="text" name="unr" id="unr" placeholder="&nbsp;&nbsp; Type Your Username" required/></p>
<p>&nbsp;</p>
<p>Password</p>
<p><input type="password" name="papa" id="papa"  placeholder="&nbsp;&nbsp; Type Your Password" required/></p>
<p>&nbsp;</p>
<p>Email</p>
<p><input type="text" name="epapa" id="epapa" placeholder="&nbsp;&nbsp; Type Your Email" required/></p>
<p>&nbsp;</p>
<p>Full Name</p>
<p><input type="text" name="fpapa" id="fpapa" placeholder="&nbsp;&nbsp; Type Your FullName" required/></p>
<p>&nbsp;</p>
<p>Gender</p>
<p>&nbsp;&nbsp;<input type="radio" name="rapapa" id="rapapa" checked="checked" value="Male"/>&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="rapapa" id="rapapa"  value="Female"/>&nbsp;&nbsp;Female</p>
<p>&nbsp;</p>
<p>Telephone</p>
<p><input type="text" name="tpapa" id="tpapa" placeholder="&nbsp;&nbsp; Type Your Telephone" required/></p>
<p>&nbsp;</p>
<p>IB Refrence Number</p>
<p><input type="text" name="ibpapa" id="ibpapa" readonly="readonly" value="<?php   
if($_GET['IBRefrenceNumber']!=null){
	$kena=$_GET['IBRefrenceNumber'];
	echo $kena;

}


?>"/></p>
<p>&nbsp;</p>
<p>Account Type</p>
<p><select id="atc" name="atc">
<option value="lite">FXDM LITE</option>
<option value="gold">FXDM GOLD</option>
<option value="plantinum">FXDM PLANTINUM</option>
</select></p>
<p>&nbsp;</p>
<p>Date of Birth</p>
<p><input type="date" name="dpapa" id="dpapa" required/></p>
<p>&nbsp;</p>
<p>Nationanlity</p>
<p><input type="text" name="npapa" id="npapa" placeholder="&nbsp;&nbsp; Type Your Nationality" required/></p>
<p>&nbsp;</p>
<p>Address</p>
<p><textarea cols="57" rows="07" id="ttpapa" name="ttpapa" required></textarea></p>
<p>&nbsp;</p>
<p><input type="submit" name="st" id="st" value="Create Live Account" /></p>
</form>
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
