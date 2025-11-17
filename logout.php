<?php
session_start();
session_unset();   // Poistaa kaikki sessiomuutujat
session_destroy(); // Lopettaa session
header("Location: index.php"); // ohjataan etusivulle
exit();
?>
