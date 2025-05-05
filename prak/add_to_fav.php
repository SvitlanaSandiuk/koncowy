<?php
session_start();


if (isset($_POST['id'])) {
    
    $favItem = [
        'id' => $_POST['id'],
        'opis' => $_POST['opis'],
        'cena' => $_POST['cena'],
        'kategoria' => $_POST['sklep']
    ];

    
    if (!isset($_SESSION['fav'])) {
        $_SESSION['fav'] = [];
    }

    
    $_SESSION['fav'][] = $favItem;

    
    header("Location: ulubione.php");

    exit;
}
?>