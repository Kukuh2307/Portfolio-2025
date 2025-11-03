// Generate animated dots
function generateDots() {
    const svg = document.querySelector('svg.dot-animation');
    const dotCount = 500;
    const width = window.innerWidth;
    const height = window.innerHeight;

    for (let i = 0; i < dotCount; i++) {
        const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
        const x = Math.random() * width;
        const y = Math.random() * height;
        const r = Math.random() * 2 + 1;
        const delay = Math.random() * 4;
        
        circle.setAttribute('cx', x);
        circle.setAttribute('cy', y);
        circle.setAttribute('r', r);
        circle.setAttribute('fill', i % 2 === 0 ? '#4FACFE' : '#8B5CF6');
        circle.setAttribute('class', 'dot-particle');
        circle.setAttribute('style', `animation-delay: ${delay}s; opacity: ${0.3 + Math.random() * 0.5}`);
        circle.setAttribute('filter', 'url(#glow)');
        
        svg.appendChild(circle);
    }
}

generateDots();

// Responsive dot regeneration on resize
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        const svg = document.querySelector('svg.dot-animation');
        svg.innerHTML = '<defs><filter id="glow"><feGaussianBlur stdDeviation="3" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>';
        generateDots();
    }, 250);
});

// Smooth mouse interaction with aurora
document.addEventListener('mousemove', (e) => {
    const aurora = document.querySelector('.aurora-bg');
    const x = (e.clientX / window.innerWidth) * 100;
    const y = (e.clientY / window.innerHeight) * 100;
    
    aurora.style.backgroundPosition = `${x}% ${y}%`;
});

// Parallax based on mouse movement
document.addEventListener("mousemove", (e) => {
  const x = (e.clientX / window.innerWidth - 0.5) * 20;
  const y = (e.clientY / window.innerHeight - 0.5) * 20;
  const aurora = document.querySelector(".aurora-layer");
  if (aurora) {
    aurora.style.transform = `translate(${x}px, ${y}px) scale(1.05) rotate(${x / 15}deg)`;
  }
});

