<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1 class="loginh1">Login Page</h1>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input class="loginbtn" type="submit" value="Login" name="login">
    </form>
</body>
</html>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nayttotyo"; // sama tietokanta kuin rekisterissä

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Yhteys epäonnistui: " . $conn->connect_error);
}

// Otetaan lomakkeelta tiedot
$kayttajatunnus = $_POST['username'];
$salasana = $_POST['password'];

// Haetaan käyttäjä tietokannasta
$stmt = $conn->prepare("SELECT id, kayttajatunnus, salasana FROM users WHERE kayttajatunnus = ?");
$stmt->bind_param("s", $kayttajatunnus);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Tarkistetaan salasana hashin avulla
    if (password_verify($salasana, $user['salasana'])) {
        // Kirjautuminen onnistui
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['kayttajatunnus'] = $user['kayttajatunnus'];
        echo "Kirjautuminen onnistui! Tervetuloa, " . $user['kayttajatunnus'];
        // Voit myös ohjata toiselle sivulle:
        // header("Location: dashboard.php");
        // exit();
    } else {
        echo "Virheellinen salasana!";
    }
} else {
    echo "Käyttäjää ei löytynyt!";
}

$stmt->close();
$conn->close();
?>
