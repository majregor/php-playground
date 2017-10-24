<?php
/**
 * Created by PhpStorm.
 * User: godfreymajwega
 * Date: 5/13/16
 * Time: 3:41 PM
 *
 * Examples of Bitwise Operations
 */
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

/*
 * Bitwise & (and)
 * $var = $var1 & $var2 returns value with only the set bits in both variables.
 */

$var1 = 200;    //  =   11001000
$var2 = 56;     //  =     111000
                //    &   -------
                //      00001000 = 8

$var = ($var1 & $var2);
echo intval($var);

