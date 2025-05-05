<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"];
    $haslo = password_hash($_POST["haslo"], PASSWORD_DEFAULT);
    file_put_contents("users.txt", "$login|$haslo\n", FILE_APPEND);
    header("Location: probnik.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="stele.css">
    <style>
        .form-box {
            max-width: 400px;
            margin: 100px auto;
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        .form-box h2 {
            margin-bottom: 20px;
        }
        .form-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .form-box button {
            width: 100%;
            padding: 12px;
            background-color: #662f1c;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-box button:hover {
            background-color: #4d2215;
        }
        .form-box p {
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Rejestracja</h2>
    <form method="POST" action="register.php">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="haslo" placeholder="Hasło" required>
        <button type="submit">Zarejestruj się</button>
    </form>
    <p>Masz już konto? <a href="login.php">Zaloguj się</a></p>
</div>
</body>
</html>