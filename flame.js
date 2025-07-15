const canvas = document.getElementById('flameCanvas');
const ctx = canvas.getContext('2d');

// Set canvas dimensions
const width = canvas.width;
const height = canvas.height;

// Additional setup variables
const flameHeight = height * 0.4; // Height of the flame area
const flameBaseY = height - flameHeight; // Y-coordinate where the flame starts

// Particle class to represent each flame particle
class Particle {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.size = Math.random() * 20 + 1; // Random size
    this.speedY = Math.random() * -1 - 0.5; // Upward speed
    this.color = `rgba(255, ${Math.floor(Math.random() * 155 + 100)}, 0, ${Math.random() * 0.5 + 0.5})`; // Orange hues
  }
  update() {
    this.y += this.speedY;
    if (this.size > 0.2) this.size -= 0.05; // Gradually shrink
  }
  draw() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fillStyle = this.color;
    ctx.fill();
  }
}

const particlesArray = [];

function createParticle() {
  const x = width / 2 + (Math.random() - 0.5) * 50; // Emit near the center
  const y = flameBaseY;
  particlesArray.push(new Particle(x, y));
}

function handleParticles() {
  for (let i = 0; i < particlesArray.length; i++) {
    particlesArray[i].update();
    particlesArray[i].draw();
    // Remove particles that are too small
    if (particlesArray[i].size <= 0.2) {
      particlesArray.splice(i, 1);
      i--;
    }
  }
}

function animate() {
  ctx.clearRect(0, 0, width, height);
  createParticle();
  handleParticles();
  requestAnimationFrame(animate);
}

animate();
