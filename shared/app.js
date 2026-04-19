// SIMPLE, ERROR-FREE JAVASCRIPT
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. THEME TOGGLE - Check if element exists FIRST
    const toggleBtn = document.querySelector('.toggle-btn');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function() {
            const bigWrapper = document.querySelector('.big-wrapper');
            if (!bigWrapper) return;
            
            if (bigWrapper.classList.contains('light')) {
                bigWrapper.classList.remove('light');
                bigWrapper.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                bigWrapper.classList.remove('dark');
                bigWrapper.classList.add('light');
                localStorage.setItem('theme', 'light');
            }
        });
    }
    
    // 2. MOBILE MENU - Check if elements exist FIRST
    const hamburgerBtn = document.querySelector('.hamburger-menu');
    const overlay = document.querySelector('.overlay');
    
    if (hamburgerBtn) {
        hamburgerBtn.addEventListener('click', function() {
            const bigWrapper = document.querySelector('.big-wrapper');
            if (bigWrapper) {
                bigWrapper.classList.toggle('active');
            }
        });
    }
    
    if (overlay) {
        overlay.addEventListener('click', function() {
            const bigWrapper = document.querySelector('.big-wrapper');
            if (bigWrapper) {
                bigWrapper.classList.remove('active');
            }
        });
    }
    
    // 3. CLOSE MENU ON LINK CLICK - Only if links exist
    const navLinks = document.querySelectorAll('.links a');
    if (navLinks.length > 0) {
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                const bigWrapper = document.querySelector('.big-wrapper');
                if (bigWrapper) {
                    bigWrapper.classList.remove('active');
                }
            });
        });
    }
    
    // 4. LOAD SAVED THEME
    const savedTheme = localStorage.getItem('theme');
    const bigWrapper = document.querySelector('.big-wrapper');
    if (bigWrapper && savedTheme === 'dark') {
        bigWrapper.classList.remove('light');
        bigWrapper.classList.add('dark');
    }
});

