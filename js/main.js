// ===============================
// DOT GRID BACKGROUND ANIMATION
// ===============================

const canvas = document.getElementById("dotGrid");
const ctx = canvas.getContext("2d");

let width;
let height;
let dots = [];

const spacing = 18;
const glowRadius = 300;

const mouse = {
  x: -1000,
  y: -1000,
};

// Create canvas and dots
function initCanvas() {
  width = canvas.width = window.innerWidth;
  height = canvas.height = window.innerHeight;

  dots = [];

  for (let x = 0; x < width; x += spacing) {
    for (let y = 0; y < height; y += spacing) {
      dots.push({ x, y });
    }
  }
}

// Mouse movement
window.addEventListener("mousemove", (e) => {
  mouse.x = e.clientX;
  mouse.y = e.clientY;
});

// Reset mouse when leaving screen
window.addEventListener("mouseleave", () => {
  mouse.x = -1000;
  mouse.y = -1000;
});

// Resize canvas
window.addEventListener("resize", initCanvas);

// Animate dots
function animateDots() {
  ctx.clearRect(0, 0, width, height);

  dots.forEach((dot) => {
    const dx = mouse.x - dot.x;
    const dy = mouse.y - dot.y;

    const distance = Math.sqrt(dx * dx + dy * dy);

    let opacity = 0.08;

    if (distance < glowRadius) {
      opacity = 1 - distance / glowRadius;
    }

    ctx.beginPath();
    ctx.arc(dot.x, dot.y, 1, 0, Math.PI * 2);

    ctx.fillStyle = `rgba(0, 0, 0, ${opacity})`;

    ctx.fill();
  });

  requestAnimationFrame(animateDots);
}

// Start animation
initCanvas();
animateDots();

// ===============================
// STEP ITEM SCROLL ANIMATION
// ===============================

const items = document.querySelectorAll(".step-item");

const stepObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  },
  {
    threshold: 0.2,
  },
);

// Observe all step items
items.forEach((item) => {
  stepObserver.observe(item);
});

// ===============================
// SECTION SCROLL ANIMATION
// ===============================

const sections = document.querySelectorAll(".scroll-section");

const sectionObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  },
  {
    threshold: 0.2,
  },
);

// Observe all sections
sections.forEach((section) => {
  sectionObserver.observe(section);
});

function openMenu() {
  document.getElementById("offcanvas").classList.add("active");
  document.getElementById("backdrop").classList.add("show");
}

function closeMenu() {
  document.getElementById("offcanvas").classList.remove("active");
  document.getElementById("backdrop").classList.remove("show");
}
