<?php
/**
 * Created by PhpStorm.
 * User: godfreymajwega
 * Date: 5/24/16
 * Time: 3:53 PM
 */

function println($var){
    echo "\n" . $var . "<br />\n";
}

//Demonstrate Hexadecimal(0x...) and Octet (0...) number representation
println ( 0x200 . " \t| " . 011 );

/**
 * Multi line strings in PHP
 * It is possible to specify multi line strings by just inserting new lines with in the string with double quotes
 */
$myString = "
  I stay too long; but here my Father comes:
  A double blessing is a double grace;
  Occasion smiles vpon a second leaue
";
println( $myString);

/**
 * Complex variable parsing where the variable and string cannot be
 * separated by a space can be achieved using curl brackets as demonstrated here
 */
$favoritePet = "cat";
println ("My favorite pets are $favoritePets");    // This will try to look for variable $favoritePets which does not exist.
println ("My favorite pets are {$favoritePet}s"); //Will yield the correct result.

/**
 * String Functions
 */

//Finds the length of the string.
println(strlen($favoritePet));