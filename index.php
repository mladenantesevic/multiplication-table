<?php

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
