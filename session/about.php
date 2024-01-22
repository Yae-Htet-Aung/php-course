<?php
session_start();
$check = $_SESSION['login'];
echo $check;

if(!isset($check)){
  header( 'location:index.php' );
}
?>