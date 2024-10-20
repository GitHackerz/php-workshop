<?php

$var = "PHP";
if (isset($var)) {
    echo "Variable is set.";
}

if (empty($var)) {
    echo "Variable is empty.";
}

var_dump($var);  // Output: string(3) "PHP"

unset($var);  // Unset the variable

?>
