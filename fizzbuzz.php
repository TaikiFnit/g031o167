<?php

foreach (range(1, 100) as $i) {
  echo 
    $fi = $i % 3 ? "" : "Fizz",
    $bu = $i % 5 ? "" : "Buzz",
    $fi || $bu ? "" : $i,
    "<br>";
}
