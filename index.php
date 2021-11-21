<?php

$presentTime = new DateTime();
$destinationTime = new DateTime();

$presentTime->format('m-d-Y H:i');
$destinationTime->setTimestamp(1082579514);
echo("Present Time :" . $presentTime->format('m-d-Y H:i') . "</br>");
echo("Destination Time :" . $destinationTime->format('m-d-Y H:i'). "</br>");

$interval = $destinationTime->diff($presentTime);
echo (" La durée qui sépare les deux temps est de : ". $interval->format('%Y années %m mois %d jours  %H heures et %I minutes'). "</br>");
echo (" Cet intervalle est de ". $interval->format("%I minutes"). "</br>");



?>
