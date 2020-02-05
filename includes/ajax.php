<?php

require_once(__DIR__.'/class/calculator.class.php');
require_once(__DIR__.'/includes/config.php');

cell = $_GET['cell'];
$a = (int) ($cell / 10) + 1;
$b = $cell % 10;

$product = new calculator();
$p = $product->multiplication($a, $b);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Multiplications (multiplicatorA, multiplicatorB, product, date)
VALUES ($a, $b, $p, date("Y-m-d H:i:s"))";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo $a . " x " . $b . " = " $p

?>
