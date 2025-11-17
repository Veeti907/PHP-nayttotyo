<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styleabout.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>


  <div class="header">
  <h1 class="otsikko">About CycleZ</h1>
  </div>
  <hr>
  <div class="intro">
  <h2>Yhdessä nopeammin. Yhdessä pidemmälle.</h2>
  <p>CycleZ on intohimoisten maantiepyöräilijöiden yhteisö, joka yhdistää harrastajat ja ammattilaiset saman intohimon äärelle – nopeuden, vapauden ja yhteisöllisyyden.
Olitpa sitten aloittelija, joka etsii ensimmäistä lenkkiporukkaa, tai kokenut kuski, joka haluaa haastaa itsensä, CycleZ tarjoaa sinulle paikan kuulua johonkin isompaan.</p>
</div>
<div class="why-choose-us">
  
<h2>Mikä tekee meistä erilaisia?</h2>
<p><strong>Avoin kaikille:</strong> Jokainen on tervetullut riippumatta kokemuksesta tai pyörämerkistä. <br>

<strong>Yhteisö ennen kilpailua:</strong> Meille tärkeintä ei ole aika, vaan matka ja sen jakaminen muiden kanssa. <br>

<strong>Tapahtumat ja lenkit:</strong> Järjestämme viikoittaisia yhteislenkkejä, hyväntekeväisyystapahtumia ja reittiseikkailuja ympäri Suomen. <br>

<strong>Online ja offline:</strong> CycleZ elää sekä tiellä että verkossa – ja yhdistää pyöräilijät paikasta riippumatta.</p>
</div>
<footer>
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
main, nav, h1, h2, p, img {
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
</body>
</html>