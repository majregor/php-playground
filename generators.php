<?php
/**
 * Created by PhpStorm.
 * User: Godfrey Majwega
 * Date: 5/6/16
 * Time: 4:29 PM
 */

/**
 * Generator function to yield prime numbers between $start and $end
 * @param int $start
 * @param int $end
 *
 * @return Object
 */
function prime_numbers($start=1, $end=100){
    for($i=$start; $i<=$end; $i++){
        $is_prime = true;
        for($j=2;$j<$i;$j++){
            if($i%$j == 0){
                $is_prime = false;
                break; # One line comment 
            }
        }
        if($is_prime && $i>1){
            yield $i;
        }
    }
}

foreach(prime_numbers(1, 120) as $prime_number){
    echo("<p> $prime_number </p>");
}

$var = <<<MARKER
sdf a;sdl aj;sld a
asd fa lkaf a
a sdl;fahs l;af asd lkjhasd f

MARKER;
