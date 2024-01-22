<?php
// ? while loop
$cnt = 1;
while ($cnt <= 5) {
  echo "Hello " . $cnt . "<br>";
  $cnt++;
}
echo '<hr>';

// ? do while loop
$cnt2 = 1;
do {
  // ! work do block first without checking condition
  echo "Hello " . $cnt2 . "<br>";
  $cnt2++;
} while ($cnt2 <= 5);
echo '<hr>';

// ? for loop
for ($i = 0; $i < 6; $i++) {
  echo 'Yae ' . $i . '<br>';
}
echo '<hr>';

// ? break
// stops under a condition
echo '<u>break</u> <br>';
for ($j = 0; $j < 10; $j++) {
  if($j == 5) {
    break;
  }
  echo 'Yae ' . $j . '<br>';
}
echo '<hr>';

// ? continue
// skip a loop under a condition
for ($i = 0; $i < 10; $i++) {
  if($i == 5) {
    continue;
  }
  echo 'Yae ' . $i . '<br>';
}
echo '<hr>';

// ? for each
$p = ['name'=> 'Yae', 'age'=> '23', 'gender'=> 'male'];
foreach ($p as $k => $v) {
  echo $k .'==>>'. $v .'<br>';
}
echo '<hr>';

