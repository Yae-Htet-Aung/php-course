<?php
$dataSourceName = 'mysql';
$dbName = 'php_cource';
$dbUserName = 'root';
$dbPassword = 'psswd';
$connection = new PDO(`mysql:host=localhost;dbname=${dbName}`, $dbUserName, $dbPassword);

if($connection){
  echo 'success';
}else{
  echo 'connection failed';
}
?>
