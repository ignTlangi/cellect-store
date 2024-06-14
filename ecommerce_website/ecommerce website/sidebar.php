<?php
session_start(); // Start or resume the session
?>

<div class="side-bar">
    <div id="close-side-bar" class="fas fa-times"></div>

    <?php if (isset($_SESSION['user_id'])): ?>
        <div class="user">
            <img src="images/users-img.png" alt=" ">
            <h3><?php echo htmlspecialchars($_SESSION['user_name']); ?></h3>
            <a href="index.php">Log Out</a>
        </div>
    <?php else: ?>
        <div class="user">
            <img src="images/guest-img.png" alt=""> <h3>Guest</h3>
            <a href="login.php">Login</a>
        </div>
    <?php endif; ?>

    <nav class="navbar">
        </nav>

</div>
