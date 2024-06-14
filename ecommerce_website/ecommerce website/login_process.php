<?php
session_start(); // Start a session

require_once "dbh.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize inputs (add your validation logic here)

    $sql = "SELECT id, name, password FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header("Location: index.php"); // Redirect to a page after successful login
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid username or password. Please try again.";
        header("Location: login.php"); 
        exit();
    }
}
?>
