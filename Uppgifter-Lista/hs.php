<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hs-php</title>
</head>
<body>
<ul>

<?php 
$age = array("Elias"=>"35", "Magd"=>"37", "Andreas"=>"43", "David"=>"39", "Edward"=>"50");
arsort($age);

foreach($age as $x => $x_value) {
  echo "", "<li>" . $x . " har $x_value Pöeng"  ;
  echo "<br>";
}
?>
</ul>


</body>
</html>