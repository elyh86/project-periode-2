<!-- filepath: /c:/xampp/htdocs/project/project younes/includes/nav.php -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutyou.php">About Me</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="interview.php">Interview</a></li>
        <li><a href="projects.php">Projecten</a></li>
    </ul>
    <button id="hamburger-toggle">☰</button>
    <script>
        // Hamburger menu toggle
        document.addEventListener("DOMContentLoaded", () => {
            const hamburgerToggle = document.getElementById("hamburger-toggle");
            const mobileNav = document.getElementById("mobile-nav");

            hamburgerToggle.addEventListener("click", () => {
                mobileNav.classList.toggle("active");
            });

            // Verberg mobiele navigatie op desktop
            window.addEventListener("resize", () => {
                if (window.innerWidth > 768) {
                    mobileNav.classList.remove("active");
                }
            });
        });
    </script>
    <script src="../js/java.js"></script>
</nav>
<nav id="mobile-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="aboutyou.php">Over</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="interview.php">Interview</a></li>
    <li><a href="projects.php">Projecten</a></li>
</nav>