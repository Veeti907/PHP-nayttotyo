<?php
include 'navbar.php';
// === Yhteys tietokantaan ===
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nayttotyo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Yhteys epäonnistui: " . $conn->connect_error);
}

// === Tarkista kirjautuminen ===
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

// === Tarkista admin-status ===
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT is_admin FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$is_admin = $user['is_admin'];

// === Lisää tapahtuma (vain admin) ===
if($is_admin && isset($_POST['add_event'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO events (title, description, date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $date);
    $stmt->execute();
    $stmt->close();
}

// === Poista tapahtuma (vain admin) ===
if($is_admin && isset($_GET['delete'])){
    $delete_id = (int)$_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
}

// === Hae kaikki tapahtumat ===
$events = $conn->query("SELECT * FROM events ORDER BY date ASC");
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tapahtumat</title>
    <link rel="stylesheet" href="styleevents.css">
     
</head>
<body>

<h1>Tapahtumat</h1>

<?php if($is_admin): ?>
    <h2>Lisää uusi tapahtuma</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Tapahtuman nimi" required>
        <textarea name="description" placeholder="Kuvaus"></textarea>
        <input type="date" name="date" required>
        <button type="submit" name="add_event">Lisää tapahtuma</button>
    </form>
<?php endif; ?>

<ul class="events-list">
<?php while($event = $events->fetch_assoc()): ?>
    <li class="event-item">
        <strong class="event-title"><?php echo htmlspecialchars($event['title']); ?></strong>
        <span class="event-date">(<?php echo $event['date']; ?>)</span>
        <?php if($is_admin): ?>
            <a class="delete-link" href="events.php?delete=<?php echo $event['id']; ?>" onclick="return confirm('Haluatko varmasti poistaa tämän tapahtuman?')">Poista</a>
        <?php endif; ?>
        <p class="event-description"><?php echo htmlspecialchars($event['description']); ?></p>
    </li>
<?php endwhile; ?>
</ul>
<style>
  /* Lista pois oletusmarginaaleista */
ul.events-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;            /* Flexbox */
    justify-content: center;  /* Keskitetään yksi tai useampi kortti */
    flex-wrap: wrap;          /* Kortit siirtyvät seuraavalle riville tarvittaessa */
    gap: 20px;                /* Väli korttien välillä */
}

li.event-item {
    background-color: #fff;
    border-radius: 10px;
    padding: 15px;
    width: 300px;
    position: relative;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s, box-shadow 0.2s;
    color:black;
}

li.event-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
</style>
</body>
</html>
