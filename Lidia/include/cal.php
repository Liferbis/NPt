<?php 

$con = new mysqli("localhost", "root" , "", "gestorv");

$events = array();

$query = mysqli_query($con, "SELECT * FROM calendar");
while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	$e = array();
	$e['title'] = $fetch['ambito'];
	$e['start'] = $fetch['fecha'];
	array_push($events, $e);
}
echo json_encode($events);
 ?>