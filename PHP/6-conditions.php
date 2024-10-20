<?php

$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

// Switch case
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Almost weekend!";
        break;
    default:
        echo "It's just another day.";
}

?>
