<?php
$host = 'autorack.proxy.rlwy.net'; // Gantilah dengan host dari MYSQL_PUBLIC_URL
$username = 'root'; // Username (dalam kasus ini root)
$password = 'CwRgmLQgtggBrOOQrogpyeHBSjLVBglG'; // Password dari MYSQL_ROOT_PASSWORD
$database = 'railway'; // Nama database

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
