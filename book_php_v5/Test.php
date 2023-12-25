<?php

  echo add(2, 3);
  // PHP 5.6
  function add($a, $b) {
    return $a + $b;
  }

  // PHP 8.2
  // function add(int $a, int $b): int {
  //   return $a + $b;
  // }



  echo '<br>';
  $x = 3;
  echo $x;
  echo '<br>';
  echo myFunction($x);

  function myFunction(&$param) {
    $param = $param + 1;
    echo $param;
  }

  echo '<br>';

  echo 'Affer call MyFunction x: ' .$x;


  devide(3, 'kaka');

  function devide($a, $b) {
   return $a / $b; 
  }

?>