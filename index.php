<?php
$presentTime = new DateTime();
$destinationTime = new DateTime('2021-11-11 13:15:00');

echo $destinationTime->format('M d Y A h i');
echo "<br> DESTINATION TIME<br>";

echo "<br>";

$presentTime->getTimestamp();
echo $presentTime->format('M d Y A h i');
echo "<br> PRESENT TIME<br>";

echo "<br>";


$interval = $destinationTime->diff($presentTime);

$exactInterval= $interval->format('%y ans %m mois %d jours %h heures %m min %s sec');
echo "l'interval de temps entre ses deux date est de <strong>". $exactInterval . "</strong> exactement!<br>" ;
echo "En gros ca fait ". $interval->days ." jours.<br>";

echo "<br>";
echo "Sachant que la conso moyenne pour circuler dans le temps est de 0.1W /jour de voyage, la Delorean a besoin de ". ($interval->days*0.1) . " Watt d'énergie pour arriver jusque là";
