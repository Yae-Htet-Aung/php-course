<?php
// Getting DB
$connect = new PDO("mysql:host=localhost;dbname=hit-article-db", "root", "");
if (!$connect) {
  echo "connection failed";
}