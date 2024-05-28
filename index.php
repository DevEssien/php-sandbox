<?php
for ($num = 0; $num <= 100; $num++) {
  echo "<br />";
  if ($num % 3 === 0 && $num % 5 === 0) {
    echo "$num - fizzbuzz";
    continue;
  }
  if ($num % 3 === 0) {
    echo "$num - fizz";
    continue;
  }
  if ($num % 5 === 0) {
    echo "$num - buzz";
    continue;
  }
}
