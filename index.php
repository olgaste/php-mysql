<?php 
$link = mysqli_connect("localhost", "root", "", "friends");

$result = mysqli_query($link, "SELECT city, province_id, longitude, latitude FROM cities WHERE id=820") or die("Ошибка #44"); 

$city = [];

for($i=0; $i < mysqli_num_rows($result); $i++) {
	$cities[$i] = mysqli_fetch_assoc($result);
}

$result = mysqli_query($link, "SELECT name, sourceurl, description, original_id FROM restaurants WHERE id=3495") or die("Ошибка #44");

$restaurant = [];

for($i=0; $i < mysqli_num_rows($result); $i++) {
	$restaurants[$i] = mysqli_fetch_assoc($result);
}

$result = mysqli_query($link, "SELECT name, sourceurl, description, accommodation_type_id FROM accommodations WHERE id=8396") or die("Ошибка #44"); 

$accommodation = [];

for($i=0; $i < mysqli_num_rows($result); $i++) {
	$accommodations[$i] = mysqli_fetch_assoc($result);
}

$result = mysqli_query($link, "SELECT name, sourceurl, description, outgoing_type_id FROM outgoings WHERE address_id=30342") or die("Ошибка #44");

$outgoing = [];

for($i=0; $i < mysqli_num_rows($result); $i++) {
	$outgoings[$i] = mysqli_fetch_assoc($result);
}

$result = mysqli_query($link, "SELECT name, sourceurl, description, features FROM activities WHERE address_id=31322") or die("Ошибка #44"); 

$activity = [];

for($i=0; $i < mysqli_num_rows($result); $i++) {
	$activities[$i] = mysqli_fetch_assoc($result);
}

mysqli_close($link);

require_once "template.php"

?>
