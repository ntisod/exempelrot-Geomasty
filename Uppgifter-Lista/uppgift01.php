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
header("Content-type: text/html; charset=utf-8"); 
if(empty($_GET['namn'])){
    echo '<h1>Valkommen!</h1>'; 
} 
else{ 
$namn=filter_input(INPUT_GET, 'namn'); 
echo "<h1>Valkommen ${namn}!</hl>"; 
echo "<p>Namnet $namn innehaller ", strlen($namn), " tecken.<p>"; 
} 

//W3S - exemplar:
echo "<br> This is the first example results: ";
echo strpos("Hello world!", "world");

echo "<br> This is the second example results: ";
echo strrev("Hello world!");

echo "<br> This is the third example results: ";
echo str_word_count("Hello world!");

echo "<br> This is the fourth example results: ";
echo strlen("Hello world!");

echo "<br> This is the fifth example results: ";
echo str_replace("world", "Dolly", "Hello world!");

?>



</body>
</html>