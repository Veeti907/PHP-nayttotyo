<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cycleZ</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>

<h1 class="otsikko2">Tervetuloa CycleZ etusivulle!</h1>
<div class="container">
<p class="info-txt">Täältä löydät kaikki tapahtumat ja yhteystiedot!</p>
</div>

<h2 class="join-us">Liity meihin!</h2>
<p class="join-text">CycleZ ei ole vain yhteisö – se on liike.
Yhdessä rakennamme modernin, avoimen ja rehellisen pyöräilykulttuurin, jossa jokainen lenkki ja jokainen jäsen merkitsee. <br>

#RideWithCycleZ</p>
</div>
<img class="background" src="thumbs-up-for-bike-events.jpeg" alt="">
<footer class="footer">
  <div class="footer-images">
  <a href="https://www.instagram.com/" target="_blank">
    <img class="ig" src="Instagram_logo_2022.svg.png" alt="">
  </a>
  <a href="https://www.facebook.com/?locale=fi_FI" target="_blank">
     <img class="face" src="2021_Facebook_icon.svg.png" alt="">
  </a>
  <a href="https://www.youtube.com/" target="_blank">
    <img class="you" src="YouTube_full-color_icon_(2017).svg.png" alt="">
  </a>
  </div>
</footer>
<style>
  .join-us{
    text-align: center;
    margin-top: 20px;
    font-size: 36px;
    -webkit-text-stroke: #ffffff 0.5px;
  text-shadow: #ffffff 0px 0px 10px;
  }
  .join-text{
    text-align: center;
    font-size: 20px;
    margin: 20px 200px 50px 200px;
    border: 2px solid white;
    backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 10px;
  }
  .background{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    object-fit: cover;
    filter: brightness(0.2);
  }
</style>
</body>
</html>