<?php
use PDO;
use PDOException;

$db_host = 'localhost';
$db_name = 'examen6db';
$db_user = 'root';
$db_pass = '';

try {
  $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}