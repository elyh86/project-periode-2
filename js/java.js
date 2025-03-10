// Selecteer de elementen
const cookieBanner = document.getElementById('cookie-banner');
const closeButton = document.getElementById('close-cookie-banner');
const darkModeToggle = document.getElementById('dark-mode-toggle');

// Voeg een eventlistener toe aan de sluitknop
closeButton.addEventListener('click', () => {
    // Verberg de cookie-banner
    cookieBanner.style.display = 'none';

    // Sla op dat cookies zijn geaccepteerd
    localStorage.setItem('cookiesAccepted', true);

    // Controleer en herstel dark-mode status
    if (localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark-mode');
    }
});

// Voeg een eventlistener toe aan de dark-mode knop
darkModeToggle.addEventListener('click', () => {
    // Toggle de dark-mode class op de body
    const isDarkMode = document.body.classList.toggle('dark-mode');

    // Sla de status op in localStorage
    if (isDarkMode) {
        localStorage.setItem('darkMode', 'enabled');
        console.log('Dark-mode ingeschakeld');
    } else {
        localStorage.setItem('darkMode', 'disabled');
        console.log('Dark-mode uitgeschakeld');
    }
});

// Controleer cookies en herstel dark-mode status bij laden van de pagina
document.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('cookiesAccepted') && localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark-mode');
    }
});
// kijken of cookie al geacceepteerd is
if (localStorage.getItem('cookiesAccepted')) {
    document.getElementById('cookie-banner').style.display = 'none';
}

// voor het accepteren van de cookies
document.getElementById('accept-cookies').addEventListener('click', function() {
    // slaat de keuze op van de gebruiker
    localStorage.setItem('cookiesAccepted', 'true');
    // Verbergt de banner door display style none te gebruiken
    document.getElementById('cookie-banner').style.display = 'none';
});

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerToggle = document.getElementById("hamburger-toggle");
    const mobileNav = document.getElementById("mobile-nav");

    hamburgerToggle.addEventListener("click", () => {
        // Toggle de "active" klasse om het menu te tonen/verbergen
        mobileNav.classList.toggle("active");
    });
});
