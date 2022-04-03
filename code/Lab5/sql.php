<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (!empty($_POST["email"]) and !empty($_POST["category"]) and !empty($_POST["title"]) and !empty($_POST["description"])) {
    $mysqli -> query("INSERT INTO ad (email, category, title, description) VALUES ('{$_POST['email']}', '{$_POST['category']}', '{$_POST['title']}', '{$_POST['description']}')");
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SQL</title>
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
        Title<br>
        <input type="text" name="title"><br>
        Description<br>
        <textarea cols="50" rows="5" name="description"></textarea>
        <br><br>
        <input type="submit" name="submit" value="add"><br><br>
    </label>
</form>

<table border="1" width="100%">
    <tr bgcolor="#e6e6fa">
        <td width="20%">e-mail</td>
        <td width="20%">category</td>
        <td width="20%">title</td>
        <td width="40%">description</td>
    </tr>
    <?php
    $result = mysqli_query($mysqli , "SELECT*FROM ad");
    while ($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '</tr>';
    }
    $result->close();
    $mysqli->close();
    ?>
</table>

</body>
</html>

