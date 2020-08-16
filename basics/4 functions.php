<?php 

# FUNCTION - block of code that can be called repeatedly

function sayHello($name = "world")
{
  echo "Hello $name";
}

sayHello();


# PASS BY REFERENCE

$myNum = 10;

function addFive($num) {
  $num += 5;
}
function addTen(&$num) {
  $num += 10;
}

addFive($myNum);
echo "value then : $myNum <br/>";
addTen($myNum);
echo "value noe : $myNum <br/>";


