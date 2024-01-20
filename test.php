<?php

// for($counter = 100; $counter > 15; $counter--) {
//     echo "$counter <br>";
// }

// $numbers = ['one', 'two', 'three'];
// $total_index = count($numbers) - 1;


// foreach($numbers as $key => $value) {
//     echo "$key --- $value <br>";
// }

$isLoggedIn = false;

while($isLoggedIn === false) {
    $random = rand(100, 900);
    if ($random > 800) {
        $isLoggedIn = true;
    }
    echo "random number is: $random <br>";
}