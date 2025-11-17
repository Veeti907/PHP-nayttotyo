<?php
session_start(); // Aloitetaan sessio
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    
</body>
</html>
<nav>
    <div class="logo">
    <img src="cyclez-logo.png" alt="logo" class="logoimg">
    <h1>CycleZ</h1>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php if(isset($_SESSION['user_id'])): ?>
            <!-- Käyttäjä on kirjautunut -->
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <!-- Käyttäjä ei ole kirjautunut -->
            <li><a class="login" href="login.php">Login</a></li>
            <li><a class="register" href="register.php">Register</a></li>
        <?php endif; ?>
    </ul>
</nav>
<style>
    .logo{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logoimg{
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }
</style>
