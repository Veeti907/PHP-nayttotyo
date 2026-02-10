🚴‍♂️ Pyöräilytapahtuma – Tapahtumasovellus
📌 Yleiskuvaus

Tämä projekti on täysiverinen tapahtumasovellus, joka on suunniteltu pyöräilytapahtumien hallintaan. Sovelluksessa käyttäjät voivat luoda oman käyttäjätilin, kirjautua sisään ja tarkastella tapahtumia, kun taas admin-käyttäjä voi luoda ja hallinnoida tapahtumia.

Projekti on toteutettu täyden pinon (full stack) periaatteella ja keskittyy erityisesti tietoturvaan, selkeään käyttöliittymään ja realistisiin toiminnallisuuksiin.

⚙️ Toiminnallisuudet
👤 Käyttäjä

Käyttäjän rekisteröinti omilla tunnuksilla

Kirjautuminen sisään luoduilla tunnuksilla

Salasanat tallennetaan salattuina (hashed) MySQL-tietokantaan

Vain kirjautuneet käyttäjät pääsevät käsiksi sovelluksen sisältöön

🛡️ Admin-käyttäjä

Admin-käyttäjä on määritelty tietokannassa

Admin voi:

luoda uusia pyöräilytapahtumia

hallita tapahtumien tietoja (esim. nimi, ajankohta, sijainti)

Tavalliset käyttäjät eivät voi luoda tai muokata tapahtumia

📅 Tapahtumat

Pyöräilyyn liittyvät tapahtumat

Jokaisella tapahtumalla voi olla:

nimi

kuvaus

ajankohta

sijainti

Tapahtumat haetaan tietokannasta ja näytetään käyttäjille selkeästi

🔐 Tietoturva

Käyttäjien salasanat:

ei koskaan tallenneta selkokielisinä

hashataan ennen tallennusta tietokantaan

Kirjautuminen perustuu tietokantaan tallennettuihin käyttäjätunnuksiin

Käyttäjäoikeudet eroteltu (user / admin)

🛠️ Käytetyt teknologiat
Frontend

HTML5

CSS3


Backend

PHP

MySQL

REST API

Salasanojen hashays (esim. bcrypt)


🎯 Projektin tarkoitus

Projektin tavoitteena on:

harjoitella käyttäjähallintaa ja kirjautumista

oppia tietokantayhteyksiä MySQL:ään

toteuttaa admin–user -roolijako


🚀 Jatkokehitysideoita

Tapahtumiin ilmoittautuminen

Käyttäjäprofiilisivu

Admin-paneeli omalla näkymällä

Responsiivisempi UI mobiilikäyttöön

Tapahtumien muokkaus ja poisto

👨‍💻 Tekijä

Veeti Balk
Opiskelija – tieto- ja viestintätekniikka
