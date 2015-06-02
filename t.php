<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</script><script type="text/javascript" src="jsl/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery.slidingpophover.js"></script>

<script type="text/javascript">

$(document).ready(function(){
   $(".display-item div:first img").load(function(){
        $(".display-item").slidingPopHover({duration:200});
   });
});

</script>

</head>

<body>
<div class="display-item">
  <div>
    <img src="images/al.jpg" width="100" height="100" />
  </div>
  <div >
    <p>Place your hidden template here.</p>
  </div>
</div>
</body>
</html>
