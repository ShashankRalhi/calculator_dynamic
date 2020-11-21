<?php

$numOne = number_format($_POST['num1']);
$numTwo = number_format($_POST['num2']);
$opt = $_POST['opt'];

if ($opt == "+") {
    $result = $numOne + $numTwo;
} else if ($opt == "-") {
    $result = $numOne - $numTwo;
} else if ($opt == "*") {
    $result = $numOne * $numTwo;
} else if ($opt == "/") {
    $result = $numOne / $numTwo;
}

echo @$result;


?>