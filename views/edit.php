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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Todo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/globals.css">
    <style>
        /* Extra styling for edit form */
        #editForm {
            width: 50%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #333;
            border-radius: 8px;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            box-shadow: 0 0 12px rgba(0, 255, 200, 0.3);
        }

        h2 {
            text-align: center;
            font-weight: 600;
            color: #00ffcc;
            text-shadow: 0 0 6px #00ffcc;
            font-size: 16px;
        }

         #heading {
            margin: 0.5rem 0;
        }

        #editForm div {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        #editForm label {
            font-size: 11px;
            color: #f9f9f9;
        }

        #editForm input,
        #editForm textarea {
            font-size: 10px;
            border: 1px solid #444;
            border-radius: 4px;
            padding: 6px;
            background: rgba(255, 255, 255, 0.08);
            color: #f9f9f9;
        }

        #editForm textarea {
            resize: none;
            min-height: 80px;
        }

        #editForm #editBtn {
            width: 100%;
            background-color: rgb(70, 255, 70);
            font-weight: 600;
            color: white;
            border-radius: 0.3rem;
            cursor: pointer;
            font-size: 10px;
            padding: 3px;
            border: 2px solid white;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #editForm #editBtn:hover {
            transform: translateY(-3px);
            background-color: #00cc66;
        }
    </style>
</head>

<body>
    <div id="root">
            <div id="heading">
                <h2>Edit Todo</h2>
            </div>
            <form id="editForm" action="../services/services.php" method="POST">
                <input type="hidden" name="todo_id" value="<?php echo $todo['todo_id']; ?>">

                <div>
                    <label for="todo_name">Todo Name</label>
                    <input type="text" id="todo_name" name="todo_name"
                        value="<?php echo htmlspecialchars($todo['todo_name']); ?>">
                </div>

                <div>
                    <label for="todo_desc">Description</label>
                    <textarea id="todo_desc" name="todo_desc"><?php echo htmlspecialchars($todo['todo_desc']); ?></textarea>
                </div>

                <button type="submit" name="update" id="editBtn">Update Todo</button>
            </form>
    </div>
</body>

</html>