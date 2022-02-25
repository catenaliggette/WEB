<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма. Сессии и Куки.</title>
</head>
<body>
<form action="" method="POST">
    Name <input type="text" name="name"> <br>
    Surname <input type="text" name="surname"> <br>
    Age <input type="number" min="0" name="age"> <br>
    <input type="submit" value="Confirm?"> <br>
    <a href="2(b)_hi.php">Go</a>
</form>
</body>
</html>

<?php

if (!empty($_POST["name"]) and !empty($_POST["surname"]) and !empty($_POST["age"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
}