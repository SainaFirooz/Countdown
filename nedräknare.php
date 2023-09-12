<!DOCTYPE html>
<html>
<meta charset="utf-8">
<style>
    body {
    margin: 35px;
    font-family: Arial;
    font-size: 35px;
    line-height: 1.2em;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40vh;
}
</style>
 
<head>
<title>Christmas countdown</title>
</head>

<body>

<?php


// Hämtar och skriver ut dagens datum
$datum = date('l, F j, Y');
echo "Today is ". $datum. "<br>";


// Använder startotime() för att förvandla 24 december till unixtid
$julAfton = strtotime("December 24");

// Hämtar dagens datum
$dagensDatum = time();

// Beräknar skillnaden mellan dages datum och julafton
$dagarKvar = (int) ($julAfton - $dagensDatum );

// Beräknar hur många dagar det är kvar till julafton
$dagar = (int) ($dagarKvar / (60 * 60 * 24));


echo "<br> It is " . $dagar . " days left until Christmas \n";


?>


</body>
</html>