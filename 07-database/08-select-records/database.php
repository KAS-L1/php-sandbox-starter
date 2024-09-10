<?php

// We need to tell the computer where our database is located
$host = 'localhost'; // This is like the address of our database
$port = 3306; // This is like a special door number to get into the database
$dbName = 'blog'; // This is the name of our database, like a label on a folder
$username = 'root'; // This is like a special username to get into the database
$password = ''; // This is like a secret password to get into the database (but it's empty here!)

// We need to create a special string to connect to the database
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  // We try to create a connection to the database using the special string
  $pdo = new PDO($dsn, $username, $password);

  // We tell the computer to be careful and throw an error if something goes wrong
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // We tell the computer to fetch data from the database in a special way (like a dictionary)
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  // If something goes wrong, we catch the error and show a message
  echo "Connection failed: " . $e->getMessage();
}