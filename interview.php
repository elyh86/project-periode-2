<!-- filepath: /c:/xampp/htdocs/project/project younes/interview.php -->
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
<main>
  <section class="interview-section">
    <h2>Interview</h2>
    <p>Hier is een interview waarin ik praat over mijn studie en toekomstplannen:</p>
    <video controls width="600">
    </video>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
<script src="js/java.js"></script>
</body>
</html>