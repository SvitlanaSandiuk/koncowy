<?php
session_start();
$item = [
    'id' => $_POST['id'],
    'kategoria' => $_POST['kategoria'],
    'opis' => $_POST['opis'],
    'cena' => $_POST['cena']
];

$_SESSION['cart'][] = $item;
header("Location: cart.php");
exit();
?>