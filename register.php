<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<h1 class="registerh1">Register Page</h1>
    <form action="register.php" method="post">
        <label for="tunnus" id="tunnus" name="tunnus">Käyttäjä tunnus</label>
        <input type="text" id="tunnus" name="tunnus" required><br><br>
        <label for="name">Nimi</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" required><br><br>
        <label for="number">Puhelinnumero</label><br>
        <input type="text" id="number" name="number" required><br><br>
        <label for="password">Password</label><br>
        <input type="text" id="password" name="password" required><br><br>
        <input class="registerbtn" type="submit" value="Register" name="register">
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $servername = "localhost";
    $username = "root";      // XAMPPissa usein root
    $password = "";          // tyhjä jos ei ole salasanaa
    $dbname = "nayttotyo";       // tietokannan nimi, jossa taulu 'users'

    // Yhdistetään MySQL:ään
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Yhteys epäonnistui: " . $conn->connect_error);
    }

    // Otetaan lomakkeen tiedot
    $kayttajatunnus = $_POST['tunnus'];
    $nimi = $_POST['name'];
    $email = $_POST['email'];
    $puhelin = $_POST['number'];
    $salasana = $_POST['password'];

    // Hashataan salasana turvallisesti
    $salasana_hash = password_hash($salasana, PASSWORD_BCRYPT);

    // Tarkistetaan, onko käyttäjätunnus tai sähköposti jo olemassa
    // Varmista, että sarakenimet vastaavat tietokannan rakennetta
    $check = $conn->prepare("SELECT * FROM users WHERE `email` = ? OR `kayttajatunnus` = ?");
    $check->bind_param("ss", $email, $kayttajatunnus);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "Sähköposti tai käyttäjätunnus on jo käytössä!";
    } else {

        // ✅ Lisätään uusi käyttäjä
        // Tarkista, että sarakenimet vastaavat tietokannan rakennetta
        $stmt = $conn->prepare("
            INSERT INTO users (`kayttajatunnus`, `nimi`, `email`, `puhelin`, `salasana`)
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->bind_param("sssss", $kayttajatunnus, $nimi, $email, $puhelin, $salasana_hash);
        if ($stmt->execute()) {
            echo "Rekisteröinti onnistui! <a href='login.html'>Kirjaudu sisään</a>";
        } else {
            echo "Virhe tallennuksessa: " . $stmt->error;
        }

        $stmt->close();
    }

    $check->close();
    $conn->close();
}
?>
