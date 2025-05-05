<?php
session_start();

session_unset();
session_destroy();

setcookie("username", "", time() - 3600, "/");

echo "<script>
    alert('Zostałeś wylogowany.');
    window.location.href = 'strina.php';
</script>";
?>