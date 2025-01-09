<?php
$x = 100;  
$y = "100";
var_dump(	$x == $y); // Returns true if $x is equal to $y
echo"<br>";
var_dump(	$x === $y); // Returns true if $x is equal to $y, and they are of the same type
echo"<br>";
var_dump(	$x != $y); // Returns true if $x is not equal to $y
echo"<br>";
var_dump(		$x <> $y); // Returns true if $x is not equal to $y
echo"<br>";
var_dump(	$x !== $y); // Returns true if $x is not equal to $y, or they are not of the same type
echo"<br>";
var_dump(	$x > $y); // Returns true if $x is greater than $y
echo"<br>";
var_dump(	$x < $y); // Returns true if $x is less  than $y
echo"<br>";
var_dump(	$x >= $y); // Returns true if $x is greater than or equal to $y
echo"<br>";
var_dump(	$x <= $y); // Returns true if $x is less than or equal to $y
echo"<br>";
var_dump(	$x <=> $y); // Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7






?>