<!-- filepath: /c:/xampp/htdocs/project/project younes/includes/footer.php -->
<footer>
   <hr width="95%">
    <center>
        <div id="cookie-banner" class="cookie-banner">
            <p>Deze website gebruikt cookies om uw ervaring te verbeteren.</p>
            <button id="close-cookie-banner">Oké</button>
        </div>
        <h2> 📞Contact</h2>
        <p>© <?php echo date("Y"); ?> Mijn Portfolio</p>
        <a href="contact.php" class="link-block"><button>Get in touch with me.</button></a>
        <button id="dark-mode-toggle" class="dark-mode-toggle">🌙</button>
        <h1>Countdown For New Year</h1>
        <div class="countdown" id="countdown">
            Loading...
        </div>
        <script>
            // Stel de einddatum in
            const endDate = new Date("2024-12-31T23:59:59").getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const timeLeft = endDate - now;

                if (timeLeft > 0) {
                    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    document.getElementById("countdown").innerHTML = `
            ${days} Days
            ${hours} Hours
            ${minutes} Minutes
            ${seconds} Seconds
        `;
                } else {
                    document.getElementById("countdown").innerHTML = "The countdown is over!";
                    clearInterval(timerInterval); // Stop de timer
                }
            }

            // Update elke seconde
            const timerInterval = setInterval(updateCountdown, 1000);
        </script>
        <script src="../js/java.js"></script>
    </center>
</footer>