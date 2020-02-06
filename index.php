<?php

// posebno imamo fajl sa css-om za izgled tabele
// posebno je calculator.js fajl koji selektuje red i kolonu i daje notifikaciju o rezultatu

require_once(__DIR__.'/class/calculator.class.php');
require_once(__DIR__.'/includes/config.php');

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<link rel="stylesheet" type="text/css" href="layout.css">";
echo "</head>";
echo "<body>";
echo "<table id="display-table" class="table-layout">";
echo "    <thead>";
echo "        <th>Multiplication table</th>";
echo "    </thead>";
echo "    <tbody>";

for ($row=1; $row <= 10; $row++) { 
echo "    <tr> \n";
for ($col=1; $col <= 10; $col++) { 
    $p = $col * $row;
echo "    <td>$row x $col = $p</td> \n";
    }
echo "    </tr>";
	}
echo "    </tbody>";
echo "</table>";
echo "<script src="calculator.js"></script>";
echo "</body>";
echo "</html>";

?>
