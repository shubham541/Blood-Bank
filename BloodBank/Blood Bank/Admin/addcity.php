<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<!-- <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script> -->
</head>
<body>
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:admimlogin.php");
}
?>
<?php include('topbar.php'); ?>

    <center>
   <div id="admin_div">
       <div style="width:250px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
<br /><br />

<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into city(city_name,pin_code,district,state) values('" . $_POST["t3"] . "','" .$_POST["t2"] . "','" .$_POST["d2"] . "','". $_POST["s2"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

?>

       <form action="" method="post" >
<table id="user_table" class="shaddoww">
<tr><td colspan="3" align="center" class="toptd">Add City </td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<!-- sTate -->
<tr><td>&nbsp;</td><td class="lefttd">State </td><td><select  name="s2" required id="stateList">
    <option value="">Select</option>
</select>
</td></tr>

<!-- district -->

<tr><td>&nbsp;</td><td class="lefttd">District </td><td><select  name="d2" id="districtList" required><option value="">Select</option>
</select></td></tr>

<tr><td>&nbsp;</td><td class="lefttd">City Name</td><td><input type="text" name="t3" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character between 5 to 15 for city name"/></td></tr>
<tr><td>&nbsp;</td><td class="lefttd">Pin Code</td><td><input type="number" name="t2" required="required" pattern="[0-9]{6,10}" title="please enter only numbers between 6 to 10 for pin code"/></td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td><td><input id="submit" type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>

<!-- </body>
</html> -->