<?php
date_default_timezone_set('Asia/Tehran');

echo date('Y--m H') . "<br>";

$timestamp = time() + (24 * 60 * 60); //timestamp

echo date("Y/m/d H:i:s", $timestamp) . "<br>";

$ti = mktime(1, 2, 3, 4, 5, 2006);

echo date('Y/m/d', $ti);