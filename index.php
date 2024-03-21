<?php
$actors = ['harry', 'hermione', 'ron', 'albus dumbledor'];


$limit = 4;
// $filtered = array_filter($actors, function($item) use ($limit) {
//     return strlen($item) > $limit;
// });

// $filtered = array_filter($actors, fn($item) => strlen($item) > $limit);


$filtered = array_filter($actors, fn($item) => 436);

print_r($filtered);
