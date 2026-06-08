<?php

$server = "localhost";
$username = "root";
$password = "devMishra7";
$database = "php_todo_manager";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $todo = $_POST['todo'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO php_todo_manager (todo_name, todo_desc) VALUES (
            '$todo', '$desc' );";
    $res = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP-Todo-Manager</title>
</head>

<body>
    <div id="root">
        <main id="main">
            <div id="heading">
                <h4>PHP - Todo-Manager</h4>
                <h6>Your Trusted Task Manager</h6>
            </div>
        </main>
        <section id="addForm">
            <h3>Add Your Todo</h3>
            <form action="index.php" method="POST" id="todoForm">
                <div>
                    <label for="">Todo</label>
                    <input name="todo" type="text">
                </div>
                <div>
                    <label for="">Description</label>
                    <textarea name="desc" id="desc" cols="30"></textarea>
                </div>
                <button id="addTodo">Add</button>
            </form>
        </section>
        <button id="button">
            Add Todo
        </button>
    </div>
    <script src="script.js"></script>
</body>

</html>