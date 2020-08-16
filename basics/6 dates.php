<?php

echo "<br/>".date('d'); // day
echo "<br/>".date('m'); // month
echo "<br/>".date('y'); // year

echo "<br/>".date('l'); // day of the week
echo "<br/>".date('D'); // day

echo "<br/>".date('M'); // month
echo "<br/>".date('Y'); // year 

echo "<br/>".date('d/m/y'); // full date

echo "<br/>".date('h'); // hour 
echo "<br/>".date('i'); // minute 
echo "<br/>".date('s'); // seconds
echo "<br/>".date('a'); // AM or PM

// SET TIME ZONE
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

echo "<br/>".date('h:i sa'); // hour 

$timestamp = mktime(10, 12, 12, 26, 04, 1994);
$timestamp = strtotime("April 26 1994");
$timestamp = strtotime("tomorrow");
$timestamp = strtotime("next sunday");
$timestamp = strtotime("+2 month");
$timestamp = strtotime("+2 Days");

echo "<br/>".$timestamp;

echo "<br/>".date('d/m/y',$timestamp);

