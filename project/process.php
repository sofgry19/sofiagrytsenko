
<?php

function testInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;

}

if(isset($_POST['fullname'])){
	$fullName = testInput($_POST['fullname']);
}
else{
		$fullName = "";
}

if(isset($_POST['dateOfVisit'])){
	$dateOfVisit = testInput($_POST['dateOfVisit']);
}
else{
		$dateOfVisit = "";
}

if(isset($_POST['native'])){
	$native = testInput($_POST['native']);
}
else{
	$native = "";
}

if(isset($_POST['rating'])){
	$rating = testInput($_POST['rating']);
}
else{
	$rating = "";
}

if(isset($_POST['staylength'])){
	$staylength = testInput($_POST['staylength']);
}
else{
	$staylength = "";
}

$destinationEmail = "sdg3149@rit.edu";
$subject = "Grytsenko, Sofia D. - Cliffside Park VISITED";
$emailBody = "";

if(!($fullName == "")){
	$emailBody .= "Visitor's Name: $fullName\n";
}
if(!($dateOfVisit == "")){
	$emailBody .= "Date of Visit: $dateOfVisit\n";
}
if(!($staylength == "")){
	$emailBody .= "Length of Stay: $staylength\n";
}
if(!($native == "")){
	$emailBody .= "Native of New Jersey?: $native\n";
}

$mitsuwa = "";
$iPic = "";
$pomadoro = "";
$fwPark = "";


if (isset($_POST['timesSquare'])) {
    $emailBody .= "Favorite Place:" . testInput($_POST['timesSquare']) . "\n";
}

if (isset($_POST['theVessel'])) {
    $emailBody .=  "Favorite Place:" . testInput($_POST['theVessel']) . "\n";
}

if (isset($_POST['centralPark'])) {
    $emailBody .= "Favorite Place:" . testInput($_POST['centralPark']) . "\n";
}

if (isset($_POST['sol'])) {
    $emailBody .= "Favorite Place:" . testInput($_POST['sol']) . "\n";
}

if(!($rating == "")){
	$emailBody .= "Rating: $rating\n";
}

mail($destinationEmail, $subject, $emailBody);
echo "Data Sent";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
		<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>Thank You For Your Feedback!</h1>
  <img id="feedback" class="center" src="feedback.jpg" alt="Thank You for Your Feedback" title="Thank You for Your Feedback">
</body>
</html>
