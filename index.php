<?php
declare(strict_types=1);

function sayMyName(int $text): ?string
{
    $user = true;
    if (! $user) {
        return null;
    }

    return "<strong>{$text}</strong>";
}


echo sayMyName(32532);

// function sum(int $x,int $y) {

//     return $x + $y;
// }

// // var_dump(sum(2.1, 3));

// class Math {
//     public int $total;

//     public function sum(int $x,int $y) {
        
//         $this->total = 9.2;
//         return $this->total;
//     }
// }

// echo (new Math)->sum(2, 3);
