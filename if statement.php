<?php
// ? if statement
$name = 'BoBo';
$ans = 'BoB';
if ($name == $ans) {
  echo "Yes, he is";
} else {
  echo "No, he isn't";
}
echo '<br>';

if ($name == $ans) :
  echo "Yes, he is BoBo";
else :
  echo "No, he isn't BoBo";
endif;
echo '<br>';

// ? elseif statement 
$age = 3;
if ($age < 18) {
  echo "U are child";
} elseif ($age < 50) {
  echo "U are Adult";
} else {
  echo "U are Old";
}
echo '<br>';

if ($age < 18) :
  echo "U are child";
elseif ($age < 50) :
  echo "U r Adult";
else :
  echo "U r Old";
endif;
echo '<br>';

// ? Switch Statement
switch ($age) {
  case (20):
    echo 'i m 20';
    break;

  case (30):
    echo 'i m 30';
    break;

  default:
    echo 'unknown age';
}
echo '<br>';

// ? Match Statement
$Name = "Mon Mon";
$result = match ($Name) {
  "Nora" => "US",
  "Mon Mon" => "Myanmar",
  "Lisa" => "Korea",
  default => "Unknown"
};
echo $result;
echo '<br>';

echo match ($Name) {
  "Nora" => "US",
  "Mon Mon" => "Myanmar",
  "Lisa" => "Korea",
  default => "Unknown"
};
