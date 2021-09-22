<?php
$MyFirstVariable = Ryan; //1

echo "My first variable was named $MyFirstVariable"; //2

echo "The value of my variable was ", $MyFirstVariable; //3

$empty = array(); //4

$test = array(
    'firstName' => 'Ryan',
    'lastName' => 'Nowak',
    'semester' => '5th semester'
); //5

$numbers = array_fill(1, 50); //6

$str1 = "My first variable was named $MyFirstVariable";
$str2 = "The value of my variable was Ryan";
$both = $str1 . $str2;
    
echo strlen($both); //7

?>