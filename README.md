📋 PHP Todo Manager
A sleek and responsive To‑Do List application built with PHP (backend) and Vanilla JavaScript (frontend).
It allows users to add, view, and manage tasks with a modern dark‑themed UI, smooth transitions, and secure database storage.

✨ Features
🔐 Secure Database Integration – MySQL powered, with clean CRUD operations.

📝 Add Todos Easily – Title + description form with smooth slide‑in animation.

📊 Task Table View – Todos displayed in a compact, styled table with hover effects.

🎨 Modern Dark UI – Neon accents, responsive layout, and premium typography.

⚡ Interactive Frontend – Vanilla JS handles form toggling, transitions, and DOM updates.

📅 Auto Timestamp – Each todo entry includes a created_at field for tracking.

🛠️ Scalable Structure – Ready to extend with edit/delete functionality.

🛠️ Tech Stack
Frontend: HTML5, CSS3, Vanilla JavaScript

Backend: PHP 8+

Database: MySQL (with php_todo_manager table)

📂 Project Structure
Code
php-todo-manager/
│── index.php        # Main app logic (insert + display todos)
│── style.css        # Dark theme + neon accents
│── script.js        # Form toggle + transitions
│── README.md        # Project documentation
🚀 Getting Started
1. Clone the repo
bash
git clone https://github.com/your-username/php-todo-manager.git
cd php-todo-manager
2. Setup Database
sql
CREATE DATABASE php_todo_manager;
USE php_todo_manager;

CREATE TABLE php_todo_manager (
  todo_id INT AUTO_INCREMENT PRIMARY KEY,
  todo_name VARCHAR(255) NOT NULL,
  todo_desc TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
3. Configure PHP connection
Update index.php with your DB credentials:

php
$server = "localhost";
$username = "root";
$password = "your_password";
$database = "php_todo_manager";
4. Run the project
Place files in your local server (htdocs for XAMPP, www for WAMP).

Start Apache + MySQL.

Visit: http://localhost/php-todo-manager/index.php

📸 Screenshots
Homepage: Dark themed dashboard with heading + task table.

Add Form: Slide‑in modal to add new todos.

Task Table: Compact list with hover highlights.

🔮 Future Improvements
✏️ Edit & Delete functionality for todos.

✅ Mark tasks as completed.

📊 Add category filters and search.

📱 Mobile‑first responsive tweaks.

👨‍💻 Author
Built with ❤️ by Kartikeya Mishra

A project to learn and showcase PHP + Vanilla JS integration with modern UI design.