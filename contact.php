<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cycleZ</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="stylecontact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
$messageSent = false;

// Kun lomake lähetetään
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $messageSent = true; 
}
?>
<?php include 'navbar.php'; ?>
<?php if($messageSent): ?>
    <h2 class="thankyou">Thank you for contacting us, <?php echo htmlspecialchars($name); ?>! We will get back to you shortly.</h2>
    <input type="button" class="backbtn" value="Back to Contact Form" onclick="window.location.href='contact.php'">
<?php else: ?>
<div class="container">
    <h1 class="contactus">Contact Us</h1>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input placeholder="..." type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input placeholder="example@gmail.com" type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea placeholder="..." id="message" name="message" rows="4" required></textarea><br><br>
        <input class="submitbtn" type="submit" value="Submit">
    </form>
<?php endif; ?>
<style>
  input{
    color:black;
  }
  textarea{
    color:black;
  }
  textarea::placeholder{
    color: grey;
    font-size: 20px;
  }
  input::placeholder{
    color: grey;
    font-size: 20px;
  }
  .thankyou{
    text-align: center;
    margin-top: 50px;
  }
  .backbtn{
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    width: fit-content;
  }
  body {
  margin: 0;
  padding: 0;
  min-height: 100vh;
  font-family: "Open Sans", sans-serif;
  overflow: hidden;
  position: relative;
}

/* Alkuperäinen vaalea tausta */
body {
  background: linear-gradient(to bottom, #cfcfcf, #a0a0a0);
}

/* Tumma overlay, joka fadeaa päälle */
body::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, #7a7a7a, #1a1a1a);
  opacity: 0;
  animation: fadeToDark 3s ease-in forwards;
  z-index: 0;
}

/* Sivun sisältö */
main, nav, h1, h2, p, form, img {
  position: relative;
  z-index: 1;
  color: white;
}

/* Fade-in animaatio */
@keyframes fadeToDark {
  from { opacity: 0; }
  to { opacity: 1; }
}
</style>
</div>
</body>
</html>