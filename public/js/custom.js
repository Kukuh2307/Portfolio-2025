// ===== PERFORMANCE OPTIMIZATION =====
const throttle = (func, delay) => {
    let lastCall = 0;
    return function (...args) {
        const now = new Date().getTime();
        if (now - lastCall < delay) return;
        lastCall = now;
        return func(...args);
    };
};

const debounce = (func, delay) => {
    let timeoutId;
    return function (...args) {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => func.apply(this, args), delay);
    };
};

// ===== STAR FIELD GENERATION =====
function createStarField() {
    const starField = document.createElement('div');
    starField.className = 'star-field';

    const starCount = window.innerWidth < 768 ? 150 : 300;
    const sizes = ['star-small', 'star-medium', 'star-large'];
    const weights = [0.7, 0.25, 0.05]; // 70% small, 25% medium, 5% large

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';

        // Weighted random size selection
        const rand = Math.random();
        let sizeClass;
        if (rand < weights[0]) sizeClass = sizes[0];
        else if (rand < weights[0] + weights[1]) sizeClass = sizes[1];
        else sizeClass = sizes[2];

        star.classList.add(sizeClass);
        star.style.left = `${Math.random() * 100}%`;
        star.style.top = `${Math.random() * 100}%`;
        star.style.animationDelay = `${Math.random() * 3}s`;
        star.style.animationDuration = `${2 + Math.random() * 2}s`;

        starField.appendChild(star);
    }

    document.body.insertBefore(starField, document.body.firstChild);
}

// ===== METEOR SHOWER =====
function spawnMeteor() {
    const meteor = document.createElement('div');
    meteor.className = 'meteor';

    // Random starting position (top-right area)
    meteor.style.left = `${50 + Math.random() * 50}%`;
    meteor.style.top = `${Math.random() * 30}%`;

    // Random animation duration
    meteor.style.animationDuration = `${1.5 + Math.random()}s`;

    document.body.appendChild(meteor);

    // Remove after animation
    setTimeout(() => meteor.remove(), 2500);
}

// Spawn meteors at random intervals
function initMeteorShower() {
    if (window.innerWidth < 768) return; // Disable on mobile

    setInterval(() => {
        if (Math.random() > 0.3) { // 70% chance to spawn
            spawnMeteor();
        }
    }, 3000);
}

// ===== PARALLAX SCROLLING =====
function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    const handleScroll = () => {
        const scrolled = window.pageYOffset;

        parallaxElements.forEach(element => {
            const speed = parseFloat(element.dataset.parallax) || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    };

    window.addEventListener('scroll', throttle(handleScroll, 10));
}

// ===== SCROLL REVEAL ANIMATIONS =====
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal-on-scroll, .reveal-fade, .reveal-scale');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(element => observer.observe(element));
}

// ===== 3D TILT EFFECT =====
function init3DTilt() {
    const tiltElements = document.querySelectorAll('.tilt-container');

    tiltElements.forEach(container => {
        const element = container.querySelector('.tilt-element');
        if (!element) return;

        container.addEventListener('mousemove', (e) => {
            const rect = container.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            element.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
        });

        container.addEventListener('mouseleave', () => {
            element.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
        });
    });
}

// ===== MAGNETIC CURSOR EFFECT =====
function initMagneticEffect() {
    const magneticItems = document.querySelectorAll('.magnetic-item');

    magneticItems.forEach(item => {
        item.addEventListener('mousemove', (e) => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            item.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
        });

        item.addEventListener('mouseleave', () => {
            item.style.transform = 'translate(0, 0)';
        });
    });
}

// ===== PARTICLE SYSTEM =====
function createParticles() {
    const particleContainer = document.createElement('div');
    particleContainer.style.position = 'fixed';
    particleContainer.style.inset = '0';
    particleContainer.style.pointerEvents = 'none';
    particleContainer.style.zIndex = '1';

    const particleCount = window.innerWidth < 768 ? 10 : 20;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.bottom = '0';
        particle.style.width = `${2 + Math.random() * 3}px`;
        particle.style.height = particle.style.width;
        particle.style.background = `rgba(${100 + Math.random() * 155}, ${150 + Math.random() * 105}, 255, ${0.3 + Math.random() * 0.4})`;
        particle.style.animationDelay = `${Math.random() * 10}s`;
        particle.style.animationDuration = `${8 + Math.random() * 4}s`;

        particleContainer.appendChild(particle);
    }

    document.body.appendChild(particleContainer);
}

// ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ===== ENHANCED DOT ANIMATION =====
function generateDots() {
    const svg = document.querySelector('svg.dot-animation');
    if (!svg) return;

    const dotCount = window.innerWidth < 768 ? 200 : 500;
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

// Responsive dot regeneration on resize
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        const svg = document.querySelector('svg.dot-animation');
        if (svg) {
            svg.innerHTML = '<defs><filter id="glow"><feGaussianBlur stdDeviation="3" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>';
            generateDots();
        }
    }, 250);
});

// ===== AURORA MOUSE INTERACTION =====
function initAuroraInteraction() {
    const aurora = document.querySelector('.aurora-bg');
    if (!aurora) return;

    document.addEventListener('mousemove', throttle((e) => {
        const x = (e.clientX / window.innerWidth) * 100;
        const y = (e.clientY / window.innerHeight) * 100;
        aurora.style.backgroundPosition = `${x}% ${y}%`;
    }, 50));
}

// ===== PARALLAX MOUSE MOVEMENT =====
function initMouseParallax() {
    const layers = document.querySelectorAll('.aurora-layer, .parallax-mouse');

    document.addEventListener('mousemove', throttle((e) => {
        const x = (e.clientX / window.innerWidth - 0.5) * 20;
        const y = (e.clientY / window.innerHeight - 0.5) * 20;

        layers.forEach((layer, index) => {
            const speed = (index + 1) * 0.5;
            layer.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
        });
    }, 50));
}

// ===== NAVBAR SCROLL EFFECT =====
function initNavbarScroll() {
    const navbar = document.querySelector('nav');
    if (!navbar) return;

    window.addEventListener('scroll', throttle(() => {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(15, 23, 42, 0.95)';
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.3)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.05)';
            navbar.style.boxShadow = 'none';
        }
    }, 100));
}

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', () => {
    console.log('🚀 Initializing space-themed portfolio...');

    // Create visual effects
    createStarField();
    createParticles();
    generateDots();

    // Initialize interactions
    initParallax();
    initScrollReveal();
    init3DTilt();
    initMagneticEffect();
    initSmoothScroll();
    initAuroraInteraction();
    initMouseParallax();
    initNavbarScroll();

    // Start meteor shower
    setTimeout(initMeteorShower, 2000);

    console.log('✨ Portfolio initialized successfully!');
});

// ===== PERFORMANCE MONITORING =====
if (window.performance && window.performance.memory) {
    setInterval(() => {
        const memory = window.performance.memory;
        if (memory.usedJSHeapSize / memory.jsHeapSizeLimit > 0.9) {
            console.warn('High memory usage detected');
        }
    }, 30000);
}
