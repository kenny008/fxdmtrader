<?php require_once("inc/session.php");?>
<?php con_login(); ?>
<?php require_once("inc/connection.php");?>
<?php
if(isset($_POST['suk'])){
header("Location:we.php");
exit;	
	
}

?>
<?php
if(isset($_POST['st'])){
	$dubo=$_POST['yels'];
	if($dubo=='No')
	{
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
$mess="Your Account Have been created Successfully";
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
		$mess.=mysql_error();
	}
	}
	else{
		$mess="Selection failed";
		$mess.=mysql_error();
	}
}
else{
	$mess="Insert failed";
		$mess.=mysql_error();
}
}
}
else{
	$dubo2=$_POST['ye'];
	$dubo3=$_POST['secm'];
	$dubo4=$_POST['secm2'];
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
$query="INSERT INTO user(username,hashed_password,email,fullname,gender,md,fb,mw,telephone,ibref,actype,dob,nationality,address,dater) VALUES('{$username}','{$hashed_password}','{$email}','{$fullname}','{$gender}','{$dubo2}','{$dubo3}','{$dubo4}','{$telephone}','{$ibref}','{$actype}','{$dob}','{$nationality}','{$address}','{$dater}')";
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
$mess="Your Account Have been created Successfully";
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
		$mess.=mysql_error();
	}
	}
	else{
		$mess="Selection failed";
		$mess.=mysql_error();
	}
}
else{
	$mess="Insert failed";
		$mess.=mysql_error();
}
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
    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>


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
	$("#sack").hide();
  $(document).ready(function() {
    $("input:radio[name=yels]").click(function() {
		var value = $(this).val();
		if( value=='Yes'){
            $('#sack').slideDown("slow");
		}
		else if(value=='No'){
			$('#sack').slideUp("slow");
			$('#sack2').slideUp("slow");
			$('#sack3').slideUp("slow");
			var checked=  $("input:radio[name=ye]").attr('checked', true);
			if(checked){ 
    $("input:radio[name=ye]").attr('checked', false);
  }
		}
    });
});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#sack2").hide();
	$("#sack3").hide();
  $(document).ready(function() {
    $("input:radio[name=ye]").click(function() {
		var value = $(this).val();
		if( value=='100'){
            $('#sack2').slideDown("slow");
			 $('#sack3').slideDown("slow");
			$('input[name="secm"]').val("25");
			$('input[name="secm2"]').val("4.0");
		}
		else if( value=='200'){
            $('#sack2').slideDown("slow");
			$('#sack3').slideDown("slow");
			$('input[name="secm"]').val("50");
			$('input[name="secm2"]').val("7.0");
		}
		else if( value=='500'){
            $('#sack2').slideDown("slow");
			$('#sack3').slideDown("slow");
			$('input[name="secm"]').val("125");
			$('input[name="secm2"]').val("15");
		}
		else if( value=='1000'){
            $('#sack2').slideDown("slow");
			$('#sack3').slideDown("slow");
			$('input[name="secm"]').val("250");
			$('input[name="secm2"]').val("35");
		}
		else if( value=='2000'){
            $('#sack2').slideDown("slow");
			$('#sack3').slideDown("slow");
			$('input[name="secm"]').val("500");
			$('input[name="secm2"]').val("70");
		}
		
    });
});
});
</script>
<script type="text/javascript">

  $(document).ready(function() {
    $('#yels').click(function() {
            $('#unr').slideDown("slow");
    });
});

</script>
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
<script type="text/javascript">
$(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
	
});

</script>
<style type="text/css">

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes #dialog {
	background:url(images/congratulation.jpg) center;
  width:424px; 
  height:248px;
  padding:10px;
 
}
</style>

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
echo"<li><a href=\"index.php\">HOME</a></li>";
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
echo"<li><a href=\"index.php\">HOME</a></li>";
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
<p>Do You Want a Bonus</p>
<p><input type="radio" name="yels" id="yels" value="Yes" />&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="yels" id="yels"  value="No" checked="checked"/>&nbsp;&nbsp;No</p>
<p>&nbsp;&nbsp;</p>
<div id="sack" name="sack1">
<p>Minimum Deposit</p>
<p><input type="radio" name="ye" id="yels" value="100" />&nbsp;&nbsp;$100&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ye" id="yels"  value="200"/>&nbsp;&nbsp;$200&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ye" id="yels"  value="500"/>&nbsp;&nbsp;$500&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ye" id="yels"  value="1000"/>&nbsp;&nbsp;$1000&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ye" id="yels"  value="2000"/>&nbsp;&nbsp;$2000</p>
<p>&nbsp;&nbsp;</p>
</div>
<div id="sack2" name="sack2">
<p>First Deposit Bonus</p>
<p>$<input type="text" name="secm" id="tpapa" readonly="readonly"></p>
<p>&nbsp;&nbsp;</p>
</div>
<div id="sack3" name="sack3">
<p>Minimum Trade Volume to Withdraw</p>
<p><input type="text" name="secm2" id="tpapa" readonly="readonly"></p>
<p>&nbsp;&nbsp;</p>
</div>
<p>Telephone</p>
<p><input type="text" name="tpapa" id="tpapa" placeholder="&nbsp;&nbsp; Type Your Telephone" required/></p>
<p>&nbsp;</p>
<p>IB Refrence Number</p>
<p><input type="text" name="ibpapa" id="ibpapa" placeholder="&nbsp;&nbsp; Type Your IB Reference Number (OPTIONAL)"/></p>
<p>&nbsp;</p>
<p>Account Type</p>
<p><select id="atc" name="atc">
<option value="lite" <?php    if($_GET['account']=="lite"){
	echo" selected";
}?>>FXDM LITE</option>
<option value="gold" <?php    if($_GET['account']=="gold"){
	echo" selected";
}?>>FXDM GOLD</option>
<option value="plantinum" <?php    if($_GET['account']=="platinum"){
	echo" selected";
}?>>FXDM PLANTINUM</option>
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
<div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">

</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
</div>

</div>
</body>
</html>
