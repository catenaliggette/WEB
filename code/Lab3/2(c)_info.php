<?php
session_start();

if (!empty($_SESSION)) {
    echo "<ul>";
    foreach ($_SESSION as $info => $answer)
        echo "<li>" . $info . " = " . $answer . "</li>";
    echo "</ul>";
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<br>
<a href="2(c)_start.php">Back</a>
</body>
</html>