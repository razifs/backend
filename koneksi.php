<?php
$conn = new mysqli("localhost", "root", "", "temanflo");
if($conn->connect_error) die("Connection failed: " . $conn->connect_error);

?>