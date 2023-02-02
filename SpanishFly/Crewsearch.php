<?php
$flightno = $_GET['flightno'];
include_once 'dbconnect.php';

$var = array();
$sql = "SELECT * FROM crews WHERE crews.flight = '$flightno'";
if(! ($result = mysqli_query($conn, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else
{
	while($row = mysqli_fetch_object($result))
	{
		$var[] = $row;	
	}
	echo '{"flights":'.json_encode($var).' , ';
}

mysqli_close($conn);


?>