<?php

// <!-- 
//   For
//   while
//   do..while
//   foreach
//  -->

//  for($i=0; $i<10; $i++) {
//    echo $i;
//    echo '<br/>';
//  } 

$people2 = ['shamil' => 26, 'Imbila' => 25];

foreach ($people2 as $name => $value) {
  echo "$name is $value years old";
  echo '<br/>';
}