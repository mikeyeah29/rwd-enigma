const rellax = new Rellax('.parallax');

AOS.init();

/*

  Page Transition

*/

// Select all links
const links = document.querySelectorAll('a');

// Select the transition overlay
const overlay = document.querySelector('.transition-overlay');

// Add click event to all links
links.forEach(link => {
    link.addEventListener('click', event => {
        // Prevent default behavior for links
        event.preventDefault();

        // Fade out the current page
        overlay.style.pointerEvents = 'auto'; // Enable interaction with overlay
        overlay.style.opacity = 1; // Start the fade-out effect

        // Wait for the animation to finish, then navigate
        setTimeout(() => {
            window.location.href = link.href; // Redirect to the clicked link
        }, 400); // Match the transition duration (600ms)
    });
});

// Fade-in effect on new page load
window.addEventListener('load', () => {
    overlay.style.opacity = 0; // Fade the overlay out
    setTimeout(() => {
        overlay.style.pointerEvents = 'none'; // Disable interaction after fade-in
    }, 400); // Match the transition duration
});

// Reset overlay when returning via back/forward cache
window.addEventListener('pageshow', (event) => {
    overlay.style.opacity = 0; // Fade the overlay out
    setTimeout(() => {
        overlay.style.pointerEvents = 'none'; // Disable interaction after fade-in
    }, 400); // Match the transition duration
});

/*

    Cursor

*/

let tooltip = document.getElementById("cursor-btn");
let offsetY = -10;  // Adjust height to move tooltip above cursor
let startX = 0;
let startY = 0;

function showTooltip(e) {
    // Set initial position based on cursor
    startX = e.pageX;
    startY = e.pageY;

    tooltip.style.left = `${startX}px`;
    tooltip.style.top = `${startY}px`;
    tooltip.style.opacity = "1";
}

function tooltipFollow(e) {
    let moveX = e.pageX - startX;
    let moveY = e.pageY - startY;

    // Center tooltip above cursor with offset
    tooltip.style.transform = `translate(${moveX}px, ${moveY + offsetY}px) translate(-50%, -100%)`;
}

function hideTooltip() {
    tooltip.style.opacity = "0";
}
