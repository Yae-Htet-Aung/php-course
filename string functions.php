<?php
  $array = 'hello world';
  // ? string length
  // echo strlen($array);

  // ? string position
  // echo strpos($array,'wo');

  // ? cut
  echo substr($array,5).'<br>'; // world
  echo substr($array,0,5).'<br>'; // hello

  // ? str replace
  echo str_replace('world','php', $array).'<br>' ;

  // ? encrypting
  echo md5($array);
  echo sha1($array);