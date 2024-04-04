<?php

use Illuminate\Support\Collection;
use Carbon\Carbon;


$_SESSION['name'] = 'sirvan';

$db = new Core\Database();
$posts = $db->prepare("SELECT * FROM `posts`")->all();

$name = 'sirvan';


// $data = [1,2,3,4,5,6,7,8,9];
// $newArray = (new Collection($data))->filter(fn($number) => $number <= 6);
// dd($newArray->split(2)->first()->first());


// $date = Carbon::now();
// $newDate = $date->subMonths(4)->addHours(5);
// var_dump($newDate->diffForHumans());
// dd($newDate->format('Y/m/d H:i:s'));
// dd($date->subMonths(4)->addHours(5)->diffForHumans());

view('index.view.php', [
    'title' => 'Home',
    'posts' => $posts
]);