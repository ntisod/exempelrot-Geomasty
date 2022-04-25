<?php
setlocale(LC_ALL,'swedish'); 
$time = date("d/m/Y");

echo strftime("Idag är " . date("l / d "));

$datetime = DateTime::createFromFormat('d/m/Y', $time );
    echo $datetime->format('B');
    
    echo date(" Y");

    echo "<br>";

    echo "Klockan är " . date(" h:i:sa");
?>