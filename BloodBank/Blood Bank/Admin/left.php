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
						 $('body').removeid('loading');
					 }
				 });
			 });
		  </script>
</head>
<body>

 
   <div style="">
      
       <div  style="">
	   
			<table id="rid">
				<tr><td id="t_head" style="">Admin Panel</td></tr><br />
				
				<?php if($_SESSION["usertype"]=="Admin")
				{?>
				<tr><td id="lefttd"><a href="adduser.php">Add User</a></td></tr>
				<tr><td id="lefttd"><a href="upuser.php">Update User</a></td></tr>
				<tr><td id="lefttd"><a href="deluser.php">Delete User</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="addcity.php">Add City</a></td></tr>
				<?php if($_SESSION["usertype"]=="Admin")
				{?>
				<tr><td id="lefttd"><a href="updatecity.php">Update City</a></td></tr>
				<tr><td id="lefttd"><a href="deletecity.php">Delete City</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="addstate.php">Add State</a></td></tr>
				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				<tr><td id="lefttd"><a href="updatestate.php">Update State</a></td></tr>
				<tr><td id="lefttd"><a href="deletestate.php">Delete State</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="adddistrict.php">Add District</a></td></tr>
				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				<tr><td id="lefttd"><a href="updatedistrict.php">Update District</a></td></tr>
				<tr><td id="lefttd"><a href="deletedistrict.php">Delete District</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="addcamp.php">Add Camp</a></td></tr>
				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				<tr><td id="lefttd"><a href="updatecamp.php">Update Camp</a></td></tr>
				<tr><td id="lefttd"><a href="deletecamp.php">Delete Camp</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="addbloodgroup.php">Add Blood Group</a></td></tr>

				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				<tr><td id="lefttd"><a href="upbloodgroup.php">Update Blood Group</a></td></tr>
				<tr><td id="lefttd"><a href="deletebloodgroup.php">Delete Blood Group</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="addgallery.php">Add Gallery</a></td></tr>

				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				<tr><td id="lefttd"><a href="deletegallery.php">Delete Gallery</a></td></tr>

				<?php }?>

				<tr><td id="lefttd"><a href="addnews.php">Add News</a></td></tr>
				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				<tr><td id="lefttd"><a href="deletenews.php">Delete News</a></td></tr>

				<?php }?>

				<!-- <tr><td id="lefttd"><a href="addadvertise.php">Add Advertisement</a></td></tr> -->

				<?php if($_SESSION["usertype"]=="Admin")
				{?>

				

				<?php }?>

				<tr><td id="lefttd"><a href="viewcity.php">View City</a></td></tr>
				<tr><td id="lefttd"><a href="viewstate.php">View State</a></td></tr>
				<!-- <tr><td id="lefttd"><a href="viewadver.php">View Advertusement</a></td></tr> -->
				<tr><td id="lefttd"><a href="viewnews.php">View News</a></td></tr>

				<tr><td id="lefttd"><a href="viewbloodgroup.php">View Blood Group</a></td></tr>
				<tr><td id="lefttd"><a href="viewcamp.php">View camps</a></td></tr>

			</table>

	</div>

</div>

</body>
</html>