<?php

require_once "pdo.php";

if (isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['password'])) {
    $sql = "INSERT INTO users (name, email, password) 
              VALUES (:name, :email, :password)";
    echo("<pre>\n" . $sql . "\n</pre>\n");
    if (!empty($pdo)) {
        $stmt = $pdo->prepare($sql);
    }
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']));
}
?>
// end of the model

// this is the beggining of the view section
<html>
<head></head>
<body>
<p>Add A New User</p>
<form method="post">
    <p>Name:
        <input type="text" name="name" size="40"></p>
    <p>Email:
        <input type="text" name="email"></p>
    <p>Password:
        <input type="password" name="password"></p>
    <p><input type="submit" value="Add New"/></p>
</form>
</body>
