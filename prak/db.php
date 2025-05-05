<?php
$conn = new mysqli("localhost", "root", "", "sklep");
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>