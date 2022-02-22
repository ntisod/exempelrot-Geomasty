<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestUppgift-02</title>
</head>
<body>

<?php 
$d = dir(".");
echo "C:\wsp1\exempelrot-Geomasty\Uppgifter-Lista: " . $d->path . "\n";
echo "<ul>";

while (false !== ($entry = $d->read())) {
   echo "<li><a href='{$entry}'>{$entry}</a></li>";
}
echo "</ul>";
$d->close();



?>


</body>
</html>