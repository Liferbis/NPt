<?php 

// $con = new mysqli("localhost", "root" , "", "gestorv");

// $events = array();

// $query = mysqli_query($con, "SELECT * FROM calendar");

// while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
// 	$e = array();
// 	$e['title'] = $fetch['ambito'];
// 	$e['start'] = $fetch['fecha'];
// 	array_push($events, $e);
// 	echo $e;
// }
// echo json_encode($events);

$json = array();

$requete =  "SELECT * FROM `festivos` ORDER BY `festivos`.`start` ASC";

try{
	$bdd = new PDO('mysql:host=localhost;dbname=gestorv', 'root', '');
}catch(exception $e){
	exit('NO connect to database.');
}

$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));


 ?>