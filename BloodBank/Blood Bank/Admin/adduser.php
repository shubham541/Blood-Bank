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
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
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
  </script>
</head>
<body>

<?php
if($_SESSION["loginstatus"]=="")
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
	$s="insert into users values('" . $_POST["t1"] . "','" .$_POST["t2"] . "','". $_POST["s1"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

?>

<form method="post">
	<table id="user_table" class="shaddoww">
		<tr><td colspan="3" align="center" class="toptd">Add User</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td id="inner" class="">User Name</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{3,15}" title="please enter only character between 3 to 15 for user name"/></td></tr>
		
		<tr><td>&nbsp;</td><td class="lefttd">Password</td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password" /></td></tr>
		
		<tr><td>&nbsp;</td><td class="lefttd">Confirm Password</td><td><input type="password" name="t3" required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password" /></td></tr>
		
		<tr><td>&nbsp;</td><td class="lefttd">Type Of User</td><td><select id="select" name="s1" required><option value="">Select</option>
		<option value="Admin">Admin</option>
		<option value="General">General</option>
		</select></td></tr>
		
		<tr><td>&nbsp;</td><td>&nbsp;</td><td><input id="submit" type="submit" value="SAVE" name="sbmt"></td></tr>
	</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>