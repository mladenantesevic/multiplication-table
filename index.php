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

<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$row . " x " . $col . " = "$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
?>
