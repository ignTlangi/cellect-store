<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    try {
        require_once "dbh.inc.php"; // Include database connection

        // Hashes the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"; // The question marks are so you cant sql inject
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $hashedPassword]); // Execute with prepared statement

        header("Location: login.php"); // Redirect to login after successful registration
        exit();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: register.php"); // Redirect back to registration if not a POST request
}
?>
