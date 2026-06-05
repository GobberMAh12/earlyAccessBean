<?php
$conn = new mysqli("localhost", "Deeznut", "A_b*512HEJ@", "turd");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["username"];
    $pass = $_POST["password"];
    $sql = "SELECT name, password FROM valfritt_namn WHERE name='$name' AND password ='$pass'";
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        echo "Wrong username or password";
    }
    else{
        echo "Found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Log in">
    </form>

</body>
</html>