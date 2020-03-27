<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = 'root';
$dbpassword = 'mahasiswa';
$dbname = 'mahasiswadb';

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>
