<?php
$database = "disci";
$host = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host, $dbuser, $dbpass, $database);

if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

$conn->set_charset("utf8");

echo "Bağlantı başarılı";
?>

