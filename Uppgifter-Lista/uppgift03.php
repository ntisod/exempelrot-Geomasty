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



class Elias 
{
    function name()
    {
        echo "My name is " , get_class($this) , "\n";
    }
}

// Creates an object
$bar = new Elias();

echo "This was made by: " , get_class($bar) , "\n"; 

echo "<br>";

$time = date("H");

switch ($time):
    case ($time < "10"):
        echo "Good morning " , get_class($bar);
        break;
    case ($time < "20"):
        echo "Good night " , get_class($bar);
        break;
    case ($time < "24"):
        echo "Arent you supposed to be asleep? ", get_class($bar);
        break;
    default:
        echo "Error";
endswitch;

?>



</body>
</html>