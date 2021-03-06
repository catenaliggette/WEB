<?php
session_start()
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Файлы</title>
</head>
<body>
<form method="post">
    <label>
        e-mail<br>
        <input type="email" name="email"><br>
        Category<br>
        <select name="category" required>
            <option>Electronics</option>
            <option>Pets</option>
            <option>House and garden</option>
            <option>Fashion</option>
        </select><br>
        Headline<br>
        <input type="text" name="headline"><br>
        Text<br>
        <textarea cols="50" rows="5" name="text"></textarea>
        <br><br>
        <input type="submit" name="submit" value="add"><br><br>
    </label>
</form>
</body>
</html>

<?php

if (!empty($_POST["email"]) and !empty($_POST["category"]) and !empty($_POST["headline"]) and !empty($_POST["text"])) {
    AddFile($_POST["email"] , $_POST["category"] , $_POST["headline"] , $_POST["text"]);
}

$path = "./category";
$d = dir($path);
$category = array();
if ($d) {
    while (false !== ($name = $d->read())) {
        if ($name === '.' || $name === '..') continue;
        $FullName = $path . "/" . $name;
        $category[] = $name;
    }
    $d->close();
}

echo nl2br("\n");
echo '<table border="1" width="100%">';
echo '<tr bgcolor="#faebd7">';
echo '<td width="20%">' . "Category" . '</td>';
echo '<td width="20%">' . "e-mail" . '</td>';
echo '<td width="20%">' . "Headline" . '</td>';
echo '<td width="40%">' . "Text" . '</td>';
echo '</tr>';

foreach ($category as $catPath){
    foreach (FilesFind('./category/' . $catPath) as $file){
        echo '<tr>';
        $fileInfo = file('./category/' . $catPath . "/" . $file);
        echo '<td>' . $catPath . '</td>';
        echo '<td>' . $fileInfo[0] . '</td>';
        echo '<td>' . $fileInfo[1] . '</td>';
        echo '<td>';
        for ($i = 2; $i < sizeof($fileInfo); $i++){
            echo nl2br($fileInfo[$i]);
        }
        echo '</td>';
        echo '</tr>';
    }
}
echo '</table>';

function FilesFind(string $path) : array{
    $d = dir($path);
    $files = array();
    if ($d) {
        while (false !== ($name = $d->read())) {
            if ($name === '.' || $name === '..') continue;
            $FullName = $path . "/" . $name;
            if (is_file($FullName)) $files[] = $name;
        }
        $d->close();
    }
    return $files;
}

function AddFile (string $email , $category , $headline , $text){
    $file = fopen("./category/" . $category . "/" . $headline . ".txt" , "w");
    fwrite($file , $email . "\n" . $headline . "\n" . $text);
}