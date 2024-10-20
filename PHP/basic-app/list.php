<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];

if (isset($name) && !empty($name)){
    echo "<strong>Name: </strong>$name<br>";
}else {
    echo "Name is not set<br>";
}

if (isset($email) && !empty($email)){
    echo "<strong>Email: </strong>$email<br>";
}else {
    echo "Email is not set<br>";
}

if (isset($phone) && !empty($phone)){
    echo "<strong>Phone: </strong>$phone<br>";
}else {
    echo "Phone is not set<br>";
}