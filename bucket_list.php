<?php
//Script created by Jean Carlos De la Court
//use $i as an array pointer, use $a to get terminal user input
//echo $maxpointer;

$i = 0;
$a = readLine('How much activity do you desire : ');
$activity = array();

if (is_numeric($a)) {
    echo var_export($a, true) . " is numeric", PHP_EOL;
    while ($i < $a) {
        $answer = readline('Enter your activity :');
        if (!filter_var($answer, FILTER_VALIDATE_INT) == true) { 
             $activity[$i] = $answer;
           
            echo "\n";  
        } else {
            echo "This is not a name of an activity, program finish" ;
            echo "\n";
            break;
        }
        $i++;
    }
} else {
    echo var_export($a, false) . " is NOT numeric, end of process", PHP_EOL;
}

echo "========= Print content of Array ======";
$i = 0;
echo "\n";
while ($i < count($activity)) {
    echo $activity[$i];
    echo "\n";
    $i++;
}
echo "\n";
echo "Lenght of the Array is: " . $i++;
?>