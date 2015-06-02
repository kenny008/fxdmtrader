<?php require_once("inc/session.php");?>
<?php
if(isset($_POST['upload'])){
	$ken=$_SESSION['eaakenn'];
//This is the directory where images will be saved
$target = "imgg/";
$target = $target . basename( $_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename=basename( $_FILES['Filename']['name']);
$Description=$_POST['Description'];


//Writes the Filename to the server
if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
    //Tells you if its all ok
    $mess= "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
    // Connects to your Database
    mysql_connect("localhost", "fxdmtrader", "Qwerty1234") or die(mysql_error()) ;
    mysql_select_db("fxdm") or die(mysql_error()) ;

    //Writes the information to the database
    mysql_query("INSERT INTO img(name) VALUES('{$Filename}')") ;
} else {
    //Gives and error if its not
    $mess= "Sorry, there was a problem uploading your file.";
}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" media="screen and (min-width: 1301px) and (max-width: 5000px)" href="stylesheets/clcss.css" />
<link rel="stylesheet" media="screen and (min-width: 100px) and (max-width: 1300px)" href="stylesheets/cla.css" />
</head>

<body>
<div id="container">

<div id="head2">
<div id="head55">

<?php 
if(!empty($mess)){
echo"<div id=\"mis\">$mess</div>";	
}
?>
<div id="just" >
<form action="uploads.php" enctype="multipart/form-data" method="post" id="justf" name="justf">
   <p>Upload ID:</p>
    <input type="file" name="Filename" id="upid"> 
  <br /><br />
    <br/><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input TYPE="submit" name="upload" value="Upload" id="sbutt2"/>
</form>
</div>




</div>
</div>
</div>
</body>
</html>
