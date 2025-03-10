<!-- filepath: /c:/xampp/htdocs/project/project younes/contact.php -->
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
  </section>
</header>
<?php include 'includes/nav.php'; ?>
<main>
  <section id="main">
    <h2>Contact Me</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send</button>
    </form>
  </section>
</main>
<div style="text-align: center;">
  <section class="socials">
    <h2>Follow Me</h2>
    <a href="https://github.com/elyh86" target="_blank">
      <img src="images/2048PX_O.png" alt="GitHub" height="40">
    </a>
  </section>
</div>
<hr>
<?php include 'includes/footer.php'; ?>
<script src="js/java.js"></script>
</body>
</html>