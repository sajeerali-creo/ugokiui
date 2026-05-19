const canvas = document.getElementById('dotGrid');
const ctx = canvas.getContext('2d');

let width, height;
let dots = [];
const spacing = 20; // Space between dots
const mouse = { x: -1000, y: -1000 }; // Start mouse off-screen
const glowRadius = 300; // How far the "light" reaches

function init() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;

    dots = [];
    for (let x = 0; x < width; x += spacing) {
        for (let y = 0; y < height; y += spacing) {
            dots.push({ x, y });
        }
    }
}

window.addEventListener('mousemove', (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
});

window.addEventListener('resize', init);

function draw() {
    ctx.clearRect(0, 0, width, height);

    dots.forEach(dot => {
        // Calculate distance from mouse to this dot
        const dx = mouse.x - dot.x;
        const dy = mouse.y - dot.y;
        const distance = Math.sqrt(dx * dx + dy * dy);

        // Calculate opacity: 1 at the cursor, 0.1 at the edge of glowRadius
        let opacity = 0.1;
        if (distance < glowRadius) {
            opacity = 1 - (distance / glowRadius);
            if (opacity < 0.1) opacity = 0.1; // Keep a faint baseline
        }

        ctx.beginPath();
        ctx.arc(dot.x, dot.y, 1, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(100, 100, 100, ${opacity})`; // Gray dots
        ctx.fill();
    });

    requestAnimationFrame(draw);
}

init();
draw();


// offcanvas
const offcanvas = document.getElementById('offcanvas');
const backdrop = document.getElementById('backdrop');

function openMenu() {
    offcanvas.classList.add('active');
    backdrop.classList.add('active');
}

function closeMenu() {
    offcanvas.classList.remove('active');
    backdrop.classList.remove('active');
}


// animation
const sections = document.querySelectorAll(".scroll-section");

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    },
    {
        threshold: 0.2,
    }
);

sections.forEach((section) => {
    observer.observe(section);
});