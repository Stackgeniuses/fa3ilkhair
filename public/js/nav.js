// Function to toggle the mobile menu and overlay visibility
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('menu-overlay');

    // If the menu is not shown, open it and show the overlay
    if (menu.style.right === '-100%' || !menu.style.right) {
        menu.style.right = '0'; // Move the menu into view
        overlay.classList.add('show'); // Show the overlay
    } else {
        menu.style.right = '-100%'; // Move the menu off-screen
        overlay.classList.remove('show'); // Hide the overlay
    }
}

// Close the menu if the overlay is clicked
function closeMenu() {
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('menu-overlay');

    menu.style.right = '-100%'; // Move the menu off-screen
    overlay.classList.remove('show'); // Hide the overlay
}


// Change language and reload the page in the selected language
function changeLanguage(lang) {
    window.location.href = `/${lang}`;
}
