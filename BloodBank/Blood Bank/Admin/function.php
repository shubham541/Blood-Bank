
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","bloodbank");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $cn;
}

?>
