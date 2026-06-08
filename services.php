<?php
/* MySQL Server Details */
$server = "localhost";
$username = "root";
$password = "devMishra7";
$database = "php_todo_manager";

/* MySQL Connection */
$conn = mysqli_connect($server, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $todoId = intval($_POST['todo_id']);
        $stmt = $conn->prepare("DELETE FROM php_todo_manager WHERE todo_id = ?");
        $stmt->bind_param("i", $todoId);
        $stmt->execute();
        header("Location: index.php");
        exit;
    }
}

?>