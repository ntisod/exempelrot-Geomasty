<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift-01</title>
</head>
<body>


<?php 

/* just test
$Cars = array("BMW", "MClearn", "car3", "car4", "car5");
$Comment  = array("is cool", "is trash", "is broken", "is amazing", "is fast");
$rand_keys = array_rand($Cars, 2);
$rand_keys = array_rand($Comment, 2);
echo $Cars[$rand_keys[0]] . "\n";
echo $Comment[$rand_keys[1]] . "\n";
*/


define("Cars2", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);

  define("Comment2", [
    "is cool",
    "is good",
    "is bad"
  ]);

  echo Cars2[rand(0,2)], " Is cool";


?>


</body>
</html>