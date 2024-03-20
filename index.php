<?php
function sum(string $text, int|float ...$numbers) {

    return $text . ' ' . array_sum($numbers);

}

echo sum('Total Sum of these numbers are:', 3, 5, 8, 10, 20);

