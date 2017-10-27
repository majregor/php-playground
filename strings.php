<?php
/**
 * Created by PhpStorm.
 * User: godfreymajwega
 * Date: 5/24/16
 * Time: 3:53 PM
 */
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

function println($var){
    echo "\n" . $var . "<br />\n";
}

/**
 * Escape sequenses for double quoted strings
 *  \n - New line, go to the next line
 *  \r - Carriage return, move the cursor to the begining of the line
 *  \t - horizontal tab
 *  \v - vertival tab
 *  \e - escape
 *  \f - form feed
 *  \\ - backslash
 *  \$ - dollar sign
 *  \" - for double quotes
 */

 //Demonstrate Hexadecimal(0x...) and Octet (0...) number representation
println ( 0x200 . " \t| Hexadecimal"); //Hexadecimal
println(016 . " Octal"); //Octal
println(0b10110110 . " Binary"); //Binary
println("". bindec(100010011));
println(decbin(256));
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
println ("My favorite pets are ${favoritePet}s");
println( 4.1E+3); //converting a float to a string
println(array(22,2,2,2,2)); //converting an array to string

/** ____________________________________________________________________________________________________________________
 * |
 * |    STRING FUNCTIONS
 * |____________________________________________________________________________________________________________________
 */

//Finds the length of the string.
println(strlen($favoritePet));

/*
 * SEARCHING STRINGS
 * 1 - strstr($string, $keyword, [Boolean])
 * 2 - strpos($string, $keyword, [$offset])
 * 3 - strrpos($string, $keyword, [$offset])
 * 4 - substr_count($string, $keyword [$offset])
 * 5 - strpbrk($string, $chars)
 *
 * Case Insensitives:
 * stristr
 * stripos
 * strripos
 *
 */


$keyword = "wor";
$chars = "abcxyz";
$string = "Hello world Welcome to PHP programming. The world is amazing";

// STRSTR Search if a word exists with in a string ## strstr($string, $keyword, [Boolean] to return portion after or before default is false for after);


println(strstr($string, $keyword)); //Returns the portion from the first existence of the search text to the end or FALSE if not found.
println(strstr($string, $keyword, true)); //Will return Hello

//STRPOS Returns the index of the first character of the existing text, if it is the first one it will return index 0 or FALSE if not found.
// the third argument $offset specifies where in the $string to begin the search.
println(strpos($string, $keyword));

println(strpos($string, "Hel")); // NOTE: this will return 0 because the keyword is first found at index 0 so make comparisons using ===
println( (strpos($string, "Hel") === false) ? "Not Found": "Found");

//We can use the offset to find all the positions of a given searched text
$pos=0;
while(($pos = strpos($string, "m", $pos)) !== false){
    println("m found at position ". $pos);
    $pos++;
}


//STRRPOS similar to STRPOS but returns the index of the last character instead of the first.
println(strrpos($string, "world"));


//SUBSTR_COUNT Returns the number of occurrences of $keyword in $string and the third optional argument specifies where to start the search.

println("m appears " . substr_count($string, "m") . " times in \"$string\"");


// STRPBRK Finds if $string contains any of the $chars, returns the portion of the string from the first occurrence of one of the $charactes
// to the end, or FALSE if not found.

println(strpbrk($string, $chars));


/*
 * REPLACING TEXT WITHIN STRINGS
 * 1 - str_replace($keyword, $replacement, $string, [$num])
 * 2 - substr_replace($string, $replacement, $start, $finish)
 *
 */


$string = "It was the best of times, it was the worst of times,";
$keyword="time";

//STR_REPLACE replaces all occurrences of $keyword in $string with $replacement, an optional variable $num will be filled with the number of replacements
// made. It returns the string with all the replacements
/*
 * You can pass arrays of strings for the first and second arguments to search for and replace multiple strings at once.
 * You can also pass an array of strings as the third argument, in which case str_replace() replaces the text in all the strings in the array and returns an array of altered strings.
 * This is a very powerful way to do a global search and replace.

 */
println(str_replace($keyword, "banana", $string));


//SUBSTR_REPLACE replaces a specified portion of the string with the $replacement. The portion to be replaced is specified by $start and $finish
// if $finish is not specified the rest of the string to the end is replaced. It returns a copy of the new string. A negative $finish counts from the end.
// substr_replace("abcdefg", "yyyy", 1, -2) will replace from bcde thus returning ayyyyfg
println(substr_replace("abcdefg", "yyyy", 1, -2));