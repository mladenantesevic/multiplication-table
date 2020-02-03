<?php

include 'config.php';
try
{
    $host=$config['DB_HOST'];
    $dbname=$config['DB_DATABASE'];
$conn= new PDO("mysql:host=$host;dbname=$dbname",$config['DB_USERNAME'],$config['DB_PASSWORD']);
//new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
}
catch(PDOException $e)
{
    echo "Error:".$e->getMessage();
}

for ($i = 1; $i < 10; $i++) {
  for ($j = 1; $j < 10; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
  }
  echo "\n";
}
?>
