<?php
$mysqli= new mysqli("localhost","root","","bloodbank");
if($mysqli){
	echo "connection";
}
$find = $_GET['find'];
switch ($find)
{
	case 'state':
	$query = 'SELECT state_id, state_name FROM state';
	break;
	case 'district':
	$query = 'SELECT dis_id, dis_name FROM district WHERE
	state_id='.$_GET['id'];

	/*case 'towns':
	$query = 'SELECT id, townName FROM towns
	WHERE stateId='.$_GET['id'];
	case 'information':
	$query = 'SELECT id, description FROM towninfo
	WHERE townId='.$_GET['id'] .' LIMIT 1';
	break;*/
}
if ($mysqli->query($query))
{
	?>

	<option value="">select</option>

	<?php
	$result = $mysqli->query($query);
	
		while($row = $result->fetch_array())
		{
			?>
			<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
			<?php
		}
}
?>