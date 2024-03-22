<?php

const BASE_PATH = __DIR__ . '/';

// if(! file_exists(BASE_PATH. 'list.txt')) {
    // fopen(BASE_PATH . 'list.txt', 'w');
    // echo filesize(BASE_PATH . 'list.txt');
    // unlink(BASE_PATH . 'list.txt');

// }

// file_put_contents(BASE_PATH. 'list.txt', 'Welcome To My file');
// echo file_get_contents(BASE_PATH. 'list.txt');

// mkdir(BASE_PATH . 'sirvan');
// rename(BASE_PATH . 'list.txt', BASE_PATH . 'sirvan/list2.txt');

$files = glob(BASE_PATH . 'sirvan/fsaf.csv');

print_r($files);