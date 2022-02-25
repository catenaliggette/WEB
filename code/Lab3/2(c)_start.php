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
        <label>
            Name: <br>
            <input type="text" name="name">
        </label> <br>

        <label>
            Surname: <br>
            <input type="text" name="surname">
        </label> <br>

        <label>
            Age <br>
            <input type="number" min="0" name="age">
        </label> <br>

        <label>
            Salary <br>
            <input type="number" name="salary">
        </label> <br>

        Do you have any pets? <br>
        <label>
            <input type="radio" name="own a pet" value="yes">
            YES!!1!<br>
        </label>
        <label>
            <input type="radio" name="own a pet" value="no">
            no(<br>
        </label>

        <label>
            Which browser are you using? <br>
            <select name ="browser">
                <option value="chrome"> Chrome</option>
                <option value="safari"> Safari</option>
                <option value="firefox"> Firefox</option>
                <option value="explorer"> Explorer(?)</option>
                <option value="other"> Other</option>
            </select>
        </label>
        <br>

        <input type="submit" value="Confirm?"> <br>
        <a href="2(c)_info.php">Go</a>
    </form>
    </body>
    </html>

<?php

if (!empty($_POST)) {
    $_SESSION = $_POST;
}