<?php if(!isset($_SESSION)) {
  session_start();
  //echo $_SESSION['email'];
} 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <link href="css/lightbox.css" rel="stylesheet" />
  <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!--slider-->
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/lightbox.min.js"></script>
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
 <script type="text/javascript">
var windowObjectReference = null; // global variable

function openRequestedPopup(strUrl, strWindowName) {
  if(windowObjectReference == null || windowObjectReference.closed) {
    windowObjectReference = window.open(strUrl, strWindowName,
           "resizable,scrollbars,status");
  } else {
    windowObjectReference.focus();
  };
}
</script>
</head>

<body>

  <?php

  if($_SESSION['donorstatus']=="")
  {
   header("location:../login.php");
 }
 ?>
 <?php include('function.php'); ?>

 <div class="h_bg">
  <div class="wrap">
    <div class="header">
      <div class="logo">
       <h1><a href="index.php"><img src="Images/logo2.png" width="300px" height="120px" alt=""></a></h1>
     </div>
   </div>
 </div>
</div>
<div class="nav_bg">
  <div class="wrap">
   <ul class="nav">
     <li class="active"><a href="chngpwd.php">Change Password</a></li>	
     <li><a href="updateprofile.php">Update Profile</a></li>            
     <li><a href="blooddonated.php">Blood Donated</a></li>
     <li><a href="viewdonations.php">View Donations</a></li>
     <li><a href="viewrequest.php">View Requestes</a></li>
     <li><a href="logout.php">log Out</a></li>

   </ul>
 </div>
 <div style="height:300px; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
   <form method="post" enctype="multipart/form-data">
     <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

       <tr><td colspan="7" align="center"><img src="Images/brequest.png" height="90px" /></td></tr>

       <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
       <tr style="background-color:bisque" align="center" class="bold">            
         <td class="bold" style="color:red"  >Blood Group</td>
         <td align="center">Name</td>
         <td align="center">Mobile No</td>
         <td align="center">Email</td>
         <td align="center">Till Required Date</td>
       </tr>




       <?php


       $cn=mysqli_connect("localhost","root","","bloodbank");
	   //echo $_SESSION['email'];
       $sql = "SELECT ddate from donation where email ='" . $_SESSION["email"] . "' Order by ddate desc";
       $query = mysqli_query($cn,$sql);
       $res = mysqli_fetch_array($query);
       $blood = bloodGroup($_SESSION['b_id']);
	   //echo $blood;
       $s="select * from requestes where bgroup = '$blood' ORDER BY UNIX_TIMESTAMP(reqdate) ASC";
       $result=mysqli_query($cn,$s);
       $r=mysqli_num_rows($result);
       $today = date("d-m-Y");
	   //echo $r;
       while($data=mysqli_fetch_array($result))
       {
        $Weddingdate = new DateTime($data['7']);
        $date = date_format($Weddingdate, 'd-m-Y');
        $date1 = new DateTime("");
        $date2 = new DateTime($res[0]);
        $interval = $date1->diff($date2);
        $finalDate = $interval->m;

        if(($finalDate > 3  && (new DateTime($date) > new DateTime(""))) || ($finalDate == 0 && (new DateTime($date) > new DateTime("")))){
          echo"<tr><td  style=' padding-left:50px'><a href='details.php?q=". $data[0] ."' target='PromoteFirefoxWindow'
 onclick='openRequestedPopup(this.href, this.target); return false;'>$data[6]</a></td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:60px'>$date</td></tr>";
        }
      }
      mysqli_close($cn);
      ?>


    </table>
  </form>
</div>

<div class="clear"></div>
<div class="ftr-bg">
  <div class="wrap">
    <div class="footer">
	   <div>
		<center>
		 <p> <b>Copyright @ Institute of Engineering & Management. All Rights Reserved </b>|| Contact Us: +91 90000 00000 </p>
		</center>
	   </div>
    </div>
</div>
</div>





</body>
</html>