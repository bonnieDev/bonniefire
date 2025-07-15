// script.js
const grid = document.getElementById('pixel-grid');
const gridSize = 16; // 16x16 grid
const pixelSize = 20; // Size of each pixel
const fireColors = ['#ffffff', '#ffff00', '#ffa500', '#ff4500', '#8b0000', '#000000']; // Fire color palette

// Create the grid
for (let row = 0; row < gridSize; row++) {
    for (let col = 0; col < gridSize; col++) {
        const pixel = document.createElement('div');
        pixel.classList.add('pixel');
        pixel.style.backgroundColor = fireColors[fireColors.length - 1]; // Initialize to black
        grid.appendChild(pixel);
    }
}

// Function to get a random fire color
function getFireColor() {
    return fireColors[Math.floor(Math.random() * 3)]; // Only use bright colors (white, yellow, orange)
}

// Function to animate the fire
function animateFire() {
    const pixels = document.querySelectorAll('.pixel');

    // Loop through each pixel and update its color
    for (let row = gridSize - 1; row >= 0; row--) {
        for (let col = 0; col < gridSize; col++) {
            const index = row * gridSize + col;

            // Bottom row is the source of the fire
            if (row === gridSize - 1) {
                pixels[index].style.backgroundColor = getFireColor(); // Bright colors at the bottom
            } else {
                // Get the color of the pixel below
                const belowPixelIndex = (row + 1) * gridSize + col;
                const belowPixel = pixels[belowPixelIndex];
                const belowColor = belowPixel.style.backgroundColor;

                // Find the index of the below color in the fireColors array
                const colorIndex = fireColors.indexOf(belowColor);

                // Cool down the fire as it moves upward
                if (colorIndex > 0) {
                    // Randomize the cooling effect for flickering
                    const newColorIndex = Math.max(colorIndex - Math.floor(Math.random() * 2), 0);
                    pixels[index].style.backgroundColor = fireColors[newColorIndex];
                } else {
                    pixels[index].style.backgroundColor = fireColors[fireColors.length - 1]; // Black at the top
                }
            }
        }
    }

    requestAnimationFrame(animateFire);
}

// Start the animation
animateFire();