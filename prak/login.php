<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    $uzytkownicy = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($uzytkownicy as $u) {
        list($zapisany_login, $zapisane_haslo) = explode("|", $u);
        if ($login === $zapisany_login && password_verify($haslo, $zapisane_haslo)) {
            $_SESSION["user"] = $login;
            header("Location: probnik.php");
            exit();
        }
    }

    $blad = "Nieprawidłowy login lub hasło.";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
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
    <h2>Logowanie</h2>
    <?php if (!empty($blad)) echo "<p style='color:red;'>$blad</p>"; ?>
    <form method="POST" action="login.php">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="haslo" placeholder="Hasło" required>
        <button type="submit">Zaloguj się</button>
    </form>
    <p>Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
</div>
</body>
</html>