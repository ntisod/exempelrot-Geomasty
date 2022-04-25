<?php
//Set used lanuage in all time / date functions
setlocale(LC_ALL,'swedish'); 

//Output
echo "Idag är det ";
echo strftime("%A %e %B %Y");
echo "<br>";
echo "Klockan är ";
echo strftime("%H:%M");
?>