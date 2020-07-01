<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>

<body>
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

	function bloodGroup ($bloodId)
	{
		$cn = makeconnection();
		$sql = 'select * from bloodgroup';
		$query = mysqli_query($cn,$sql);
		while($data=mysqli_fetch_array($query))
		{
			if($bloodId == $data[0]){
				$bloodId = $data[1];
				break;
			}
		}
		return $bloodId;
	}

	?>
</body>
</html>