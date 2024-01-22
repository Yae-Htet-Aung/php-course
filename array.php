<?php
  # index array
  echo "<u>index array</u> <br><br>";
  $arr1 = [1, 'Yae', '22', 23.2];
  $arr2 = array('2', 1, 'Twe');
  var_dump($arr1);
  echo '<br>';

  var_dump($arr2);
  echo '<br>';

  echo "<pre>";
  print_r($arr1);
  echo "</pre>";
  echo '<br>';

  print_r($arr1[1]);
  echo '<br><hr>';

  # associative array
  echo "<u>associative array</u> <br>";
  $assoArr = ['name'=>'Yae', 'age'=>26, 'gender'=> 'male'];
  echo "<pre>";
  print_r($assoArr);
  echo "</pre>";
  echo '<br>';

  print_r($assoArr['name']);
  echo '<br><hr>';
  

  # multi-dimensional array
  echo "<u>multi-dimensional array</u> <br>";
  $multiArr = [
    ['yae', 'tact', 'aung'],
    ['twe', 'tar', 'oo']
  ];

  echo "<pre>";
  print_r($multiArr);
  echo "</pre>";
  echo '<br>';

  print_r($multiArr[1][0]);
  echo '<br><hr>';

  # multi-dimensional array ex 2
  echo "<u>multi-dimensional array ex 2</u> <br>";
  $multiArr2 = [
    ['name'=>'Yae Htet Aung', 'age'=>26, 'gender'=> 'male'],
    ['name'=>'Twe Tar Oo', 'age'=>25, 'gender'=> 'female']
  ];

  echo "<pre>";
  print_r($multiArr2);
  echo "</pre>";
  echo '<br>';

  print_r($multiArr2[0]['name']);
  echo '<br>';

  echo '<br><hr>';