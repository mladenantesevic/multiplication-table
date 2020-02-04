<?php

// posebno imamo fajl sa css-om za izgled tabele
// posebno je calculator.js fajl koji selektuje red i kolonu i daje notifikaciju o rezultatu

require_once(__DIR__.'/class/calculator.class.php');

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

<script>
highlight_row();
function highlight_row() {
    var table = document.getElementById('display-table');
    var cells = table.getElementsByTagName('td');

    for (var i = 0; i < cells.length; i++) {
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.parentNode.rowIndex;

            var rowsNotSelected = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";
                rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";

            msg = 'The ID of the company is: ' + rowSelected.cells[0].innerHTML;
            msg += '\nThe cell value is: ' + this.innerHTML;
            alert(msg);
        }
    }

}
</script>
</body>
</html>

//echo "<table border =\"1\" style='border-collapse: collapse'>";
//	for ($row=1; $row <= 10; $row++) { 
//		echo "<tr> \n";
//		for ($col=1; $col <= 10; $col++) { 
//		   $p = $col * $row;
//		   echo "<td>$row . " x " . $col . " = "$p</td> \n";
//		   	}
//	  	    echo "</tr>";
//		}
//		echo "</table>";
//?>
//?>

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}

<script type="text/javascript" src="calculator.js"></script>

    <?php
      
        if(isset($_POST['button1'])) { 
            echo "This is Button1 that is selected"; 
        } 
        if(isset($_POST['button2'])) { 
            echo "This is Button2 that is selected"; 
        } 
    ?> 
      
    <form method="post"> 
        <input type="submit" name="button1"
                value="Button1"/> 
          
        <input type="submit" name="button2"
                value="Button2"/> 
    </form> 
</head> 
  
</html> 
