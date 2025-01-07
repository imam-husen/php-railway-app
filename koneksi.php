<?php
$host = getenv('mysql.railway.internal');
$username = getenv('root');
$password = getenv('TDUmhZPQPExyjWypxADRxkofmpwCMayd');
$database = getenv('railway');

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
