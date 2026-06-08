<?php
$server = "localhost";
$username = "root";
$password = "devMishra7";
$database = "php_todo_manager";

$conn = mysqli_connect($server, $username, $password, $database);

if (isset($_GET['todo_id'])) {
    $todoId = intval($_GET['todo_id']);
    $result = mysqli_query($conn, "SELECT * FROM php_todo_manager WHERE todo_id = $todoId");
    $todo = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Todo</title>
</head>

<body>
    <h2>Edit Todo</h2>
    <form action="services.php" method="POST">
        <input type="hidden" name="todo_id" value="<?php echo $todo['todo_id']; ?>">
        <label>Todo:</label>
        <input type="text" name="todo_name" value="<?php echo htmlspecialchars($todo['todo_name']); ?>"><br>
        <label>Description:</label>
        <textarea name="todo_desc"><?php echo htmlspecialchars($todo['todo_desc']); ?></textarea><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>