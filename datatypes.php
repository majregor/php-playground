<?php
/**
 * Two Types:
 * Scalar and Composite
 */

/*
 * Scalars: boolean, int, float and string
 */

// echo will convert the values into Decimal notation regardless of the notation like shown here.
println(10); # Decimal notation
println(0666); # Octal notation always begins with zero
println(0x123FF); # Hexadecimal notation (the letters a, b, c, d,e f are case insensitive)
println(0b0101); #Binary notation

/** Floats are stores as decimal fractions, but converting them to int just strips away the decimal part and does not round */

println( (int) ( (0.1+0.7)*10) ); # Will output 7 instead of * because the value is stored as 7.99999 and converting to int strips away the decimal part.
println((0.1+0.7)*100);

// User BCMath to circumvent this (http://php.net/manual/en/function.bcadd.php)
$number1 = '1.234';
$number2 = '5.0';
$precision = 6;
println(bcadd($number1, $number2, $precision));

// Compund types: Arrays and Objects are containers of other data types.

// NULL a variable that has not been assigned a value or a variable that has been assigned the value NULL

//resouce datatypes is a reference to other resources like files and data connections etc.




/**
 * Echos param to the screen with new line at the end
 * @param $value
 */
function println($value){
    echo $value . "<br />\n";
}