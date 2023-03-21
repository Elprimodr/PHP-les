<?php
//Script created by Jean Carlos De la Court
//use $i as an array pointer, use $a to get terminal user input
//echo $maxpointer;



$a = readLine("Hoeveel vrienden zal ik vragen om hun droom?\n");
if (!is_numeric($a)) {
    exit("'$a' is geen geldig getal, probeer het opnieuw" . PHP_EOL);
}




$friends = [""];



for ($i = 0; $i < $a; $i++) {
    $answer = readline("Wat is jouw naam?" . PHP_EOL);



    $friends[$answer] = readline("Wat is jouw droom?" . PHP_EOL);
}



foreach ($friends as $answer => $droom) {
    echo "$answer heeft dit als droom: $droom" . PHP_EOL;
}
?>