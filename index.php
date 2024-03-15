<?php
// Booleans 
// var_dump((bool) "");             // -> false
// var_dump((bool) "Some Text");    // -> true
// var_dump((boolean) "0");         // -> false
// var_dump((bool) "false");        // -> true
// var_dump((bool) 0);              // -> false
// var_dump((bool) 1);              // -> true
// var_dump((bool) -1);             // -> true
// var_dump((bool) null);           // -> false
// var_dump((bool) []);             // -> false
// var_dump((bool) ["hello"]);      // -> true

// // Integers
// var_dump((int) false);        // -> 0
// var_dump((integer) true);     // -> 1
// var_dump((int) "-1");         // -> -1
// var_dump((int) "Hello");      // -> 0
// var_dump((int) "12 months");  // -> 12
// var_dump((int) 12.7);         // -> 12
// var_dump((int) null);         // -> 0

// // Float
// var_dump((float) false);      // -> 0
// var_dump((float) true);       // -> 1
// var_dump((float) "-1");       // -> -1
// var_dump((float) "Hello");    // -> 0
// var_dump((float) "2.5 Hour"); // -> 2.5
// var_dump((float) null);       // -> 0

// // Strings
// var_dump((string) false);     // -> ""
// var_dump((string) true);      // -> "1"
// var_dump((string) 0);         // -> "0"
// var_dump((string) 1.353);     // -> "1.353"
// var_dump((string) []);        // -> "Array"
// var_dump((string) ["John"]);  // -> "Array"
// var_dump((string) null);      // -> ""
// var_dump(unserialize(serialize([33, "sirvan"])));

// Arrays
// var_dump((array) false);      // -> [false]
// var_dump((array) true);       // -> [true]
// var_dump((array) 0);          // -> [0]
// var_dump((array) 1.353);      // -> [1.353]
// var_dump((array) "John");     // -> ["John"]
// var_dump((array) null);       // -> []

// objects 
$x = ["name" => "sirvan", "age" => 25, "height" => 1.67];
$y = (object) $x;

var_dump($y->height);