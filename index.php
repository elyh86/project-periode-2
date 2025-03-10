<!-- filepath: /c:/xampp/htdocs/project/project younes/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Home</title>
    <link rel="logo" href="index.php">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <section class="container2">
        <section class="logo">
            <h1>< /Younes ></h1>
        </section>
        <div id="clock"></div>
        <script>
            function updateClock() {
                const now = new Date();
                const hours = now.getHours().toString().padStart(2, '0');
                const minutes = now.getMinutes().toString().padStart(2, '0');
                const seconds = now.getSeconds().toString().padStart(2, '0');
                document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
            }
            setInterval(updateClock, 1000);
            updateClock();
        </script>
        <?php include 'includes/nav.php'; ?>
    </section>
</header>
<section class="home">
    <br>
    <strong>
      <h1>🌐 Younes El Hajri</h1>
        <div id="greeting"></div>
        <script>
            function setGreeting() {
                const now = new Date();
                const hours = now.getHours();
                let greeting;

                if (hours >= 6 && hours < 12) {
                    greeting = "👋 Goedemorgen";
                } else if (hours >= 12 && hours < 18) {
                    greeting = "👋 Goedemiddag";
                } else if (hours >= 18 && hours < 24) {
                    greeting = "👋 Goedenavond";
                } else {
                    greeting = "👋 Goedenacht";
                }

                document.getElementById("greeting").textContent = greeting;
            }
            setGreeting();
        </script>
        <p>🚀Student bij Techniek College Rotterdam</p>
      <p>⚡Momenteel leer ik Javascript , HTML en CSS</p>
    </strong>
</section>
<div class="codeertalen">
    <img src="images/HTML5_logo_and_wordmark.svg.png" alt="HTML5 Logo" style="float: none;margin-left:1.5rem" height="80">
    <img src="images/css3-logo-png-transparent.png" alt="CSS3 Logo" style="float: none;position: relative;height: 97px;top: 6.5px;" width="99">
    <img src="images/javascriptlogo.webp" alt="JavaScript Logo" style="float: none;position: relative;height: 90px;top: 2.5px;" width="90">
</div>
  <section class="about">
    <h1>⚡About Me🚀</h1>
    <h3>Leer meer over mij en mijn achtergrond.</h3>
<section class="container">
    <p> Hallo! Ik ben Younes El Hajri, een 17-jarige student softwareontwikkeling aan het Techniek</p>
    <p> College Rotterdam. Mijn passie voor technologie en coderen begon op jonge leeftijd, en</p>
    <p> sindsdien heb ik mijn vaardigheden in HTML en CSS ontwikkeld. Hoewel ik momenteel alleen</p>
    <p> deze talen beheers, ben ik toegewijd aan het blijven leren en wil ik mijn kennis uitbreiden naar nieuwe technologieën.</p>
</section>
  </section>
<?php include 'includes/footer.php'; ?>
<script src="js/java.js"></script>
</body>
</html>