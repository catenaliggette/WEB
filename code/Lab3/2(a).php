<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма. Сессии и Куки.</title>
</head>
<body>
    <form method="GET">
        <textarea name="text" rows="10" cols="100"></textarea> <br>
        <input type="submit" value="Отправить?">
    </form>
</body>
</html>

<?php
if (!empty($_REQUEST['text'])) {
    $text = $_REQUEST['text'];
    echo nl2br("Ваш текст:\n" . $text . "\nколичество слов: " . str_word_count($text) . "\nколичество символов: " . strlen($text));
}
?>