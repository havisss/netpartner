// ===== DOM Elements =====
const navbar = document.getElementById('navbar');
const navMenu = document.getElementById('navMenu');
const mobileToggle = document.getElementById('mobileToggle');
const navLinks = document.querySelectorAll('.nav-link');
const backToTop = document.getElementById('backToTop');
const contactForm = document.getElementById('contactForm');
const particles = document.getElementById('particles');

// ===== Navbar Scroll Effect =====
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
    
    // Back to Top Button
    if (window.scrollY > 300) {
        backToTop.classList.add('show');
    } else {
        backToTop.classList.remove('show');
    }
});

// ===== Mobile Menu Toggle =====
mobileToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    mobileToggle.classList.toggle('active');
});

// ===== Close Mobile Menu on Link Click =====
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        mobileToggle.classList.remove('active');
    });
});

// ===== Active Nav Link on Scroll =====
window.addEventListener('scroll', () => {
    let current = '';
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (window.pageYOffset >= (sectionTop - 100)) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === current) {
            link.classList.add('active');
        }
    });
});

// ===== Smooth Scroll =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        
        if (target) {
            const offsetTop = target.offsetTop - 70;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// ===== Back to Top Button =====
backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// ===== Counter Animation =====
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target + '+';
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start) + '+';
        }
    }, 16);
}

// ===== Intersection Observer for Animations =====
const observerOptions = {
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            
            // Trigger counter animation for stats
            if (entry.target.classList.contains('stat-number')) {
                const target = parseInt(entry.target.getAttribute('data-count'));
                animateCounter(entry.target, target);
            }
        }
    });
}, observerOptions);

// ===== Observe Elements with data-aos attribute =====
const animatedElements = document.querySelectorAll('[data-aos]');
animatedElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// ===== Observe stat numbers =====
const statNumbers = document.querySelectorAll('.stat-number');
statNumbers.forEach(stat => observer.observe(stat));

// ===== Particles Background Animation =====
function createParticles() {
    const particlesContainer = particles;
    const particleCount = 50;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random position
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        
        // Random size
        const size = Math.random() * 4 + 2;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        
        // Random animation duration
        const duration = Math.random() * 20 + 10;
        particle.style.animationDuration = duration + 's';
        
        // Random delay
        const delay = Math.random() * 5;
        particle.style.animationDelay = delay + 's';
        
        particlesContainer.appendChild(particle);
    }
}

// Add particle styles dynamically
const style = document.createElement('style');
style.textContent = `
    .particle {
        position: absolute;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.8) 0%, rgba(99, 102, 241, 0) 70%);
        border-radius: 50%;
        pointer-events: none;
        animation: particleFloat linear infinite;
    }
    
    @keyframes particleFloat {
        0% {
            transform: translateY(0) translateX(0);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh) translateX(50px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Initialize particles
createParticles();

// ===== Contact Form Handling =====
contactForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const formData = new FormData(contactForm);
  const name = formData.get('name');
  const email = formData.get('email');
  const phone = formData.get('phone');
  const paket = formData.get('package');
  const message = formData.get('message');

  const phoneNumber = '6283196610687'; // Ganti dengan nomor WhatsApp kamu
  const text = 
    `Halo NetPartner!%0A` +
    `Saya ${name}%0A` +
    `Email: ${email}%0A` +
    `No. Telepon: ${phone}%0A` +
    `Paket: ${paket}%0A` +
    `Pesan: ${message}`;

  const url = `https://wa.me/${phoneNumber}?text=${text}`;
  window.open(url, '_blank');
});



// ===== Notification System =====
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
            <span>${message}</span>
        </div>
    `;
    
    // Add notification styles
    const notificationStyle = document.createElement('style');
    notificationStyle.textContent = `
        .notification {
            position: fixed;
            top: 100px;
            right: 30px;
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            border: 1px solid;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            animation: slideInRight 0.3s ease, slideOutRight 0.3s ease 2.7s;
        }
        
        .notification-success {
            border-color: #10b981;
        }
        
        .notification-error {
            border-color: #ef4444;
        }
        
        .notification-content {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #f8fafc;
        }
        
        .notification-success i {
            color: #10b981;
            font-size: 1.2rem;
        }
        
        .notification-error i {
            color: #ef4444;
            font-size: 1.2rem;
        }
        
        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
    `;
    
    if (!document.querySelector('style[data-notification]')) {
        notificationStyle.setAttribute('data-notification', 'true');
        document.head.appendChild(notificationStyle);
    }
    
    document.body.appendChild(notification);
    
    // Remove notification after animation
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// ===== Typing Effect for Hero Title =====
function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.innerHTML = '';
    
    function type() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }
    
    type();
}

// ===== Portfolio Filter (if needed) =====
const portfolioItems = document.querySelectorAll('.portfolio-item');

portfolioItems.forEach(item => {
    item.addEventListener('click', () => {
        // Add click animation
        item.style.transform = 'scale(0.95)';
        setTimeout(() => {
            item.style.transform = '';
        }, 200);
    });
});

// ===== Pricing Card Hover Effect =====
const pricingCards = document.querySelectorAll('.pricing-card');

pricingCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        // Add glow effect
        card.style.boxShadow = '0 0 40px rgba(99, 102, 241, 0.4)';
    });
    
    card.addEventListener('mouseleave', () => {
        if (!card.classList.contains('popular')) {
            card.style.boxShadow = '';
        }
    });
});

// ===== Service Card Animation =====
const serviceCards = document.querySelectorAll('.service-card');

serviceCards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.1}s`;
});

// ===== Dynamic Year in Footer =====
const currentYear = new Date().getFullYear();
const copyrightText = document.querySelector('.footer-copyright');
if (copyrightText) {
    copyrightText.textContent = `© ${currentYear} NET PARTNER. All rights reserved.`;
}

// ===== Lazy Loading Images =====
const images = document.querySelectorAll('img[data-src]');

const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
            observer.unobserve(img);
        }
    });
});

images.forEach(img => imageObserver.observe(img));

// ===== Cursor Trail Effect (Optional) =====
let cursorTrail = [];
const trailLength = 10;

document.addEventListener('mousemove', (e) => {
    cursorTrail.push({ x: e.clientX, y: e.clientY });
    
    if (cursorTrail.length > trailLength) {
        cursorTrail.shift();
    }
});

// ===== Parallax Effect on Hero =====
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroImage = document.querySelector('.hero-image');
    
    if (heroImage) {
        heroImage.style.transform = `translateY(${scrolled * 0.3}px)`;
    }
});

// ===== Form Validation =====
const formInputs = document.querySelectorAll('.form-control');

formInputs.forEach(input => {
    input.addEventListener('blur', () => {
        if (input.value.trim() === '' && input.hasAttribute('required')) {
            input.style.borderColor = '#ef4444';
        } else {
            input.style.borderColor = '';
        }
    });
    
    input.addEventListener('focus', () => {
        input.style.borderColor = '#6366f1';
    });
});

// ===== Performance Optimization =====
// Debounce function for scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply debounce to scroll events
window.addEventListener('scroll', debounce(() => {
    // Your scroll handler code here
}, 10));

// ===== Initialize AOS-like animations =====
const fadeElements = document.querySelectorAll('[data-aos="fade-up"]');
const fadeLeftElements = document.querySelectorAll('[data-aos="fade-left"]');
const fadeRightElements = document.querySelectorAll('[data-aos="fade-right"]');
const zoomElements = document.querySelectorAll('[data-aos="zoom-in"]');

// Set initial states
fadeElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(50px)';
    el.style.transition = 'all 0.6s ease';
});

fadeLeftElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateX(-50px)';
    el.style.transition = 'all 0.8s ease';
});

fadeRightElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateX(50px)';
    el.style.transition = 'all 0.8s ease';
});

zoomElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'scale(0.8)';
    el.style.transition = 'all 0.6s ease';
});

// Observe all animated elements
[...fadeElements, ...fadeLeftElements, ...fadeRightElements, ...zoomElements].forEach(el => {
    observer.observe(el);
});

// ===== WhatsApp Float Button (Optional) =====
function createWhatsAppButton() {
    const whatsappBtn = document.createElement('a');
    whatsappBtn.href = 'https://wa.me/6285895493831'; // Ganti dengan nomor WhatsApp Anda
    whatsappBtn.target = '_blank';
    whatsappBtn.className = 'whatsapp-float';
    whatsappBtn.innerHTML = '<i class="fab fa-whatsapp"></i>';
    
    const style = document.createElement('style');
    style.textContent = `
        .whatsapp-float {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4);
            z-index: 998;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }
        
        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 24px rgba(37, 211, 102, 0.6);
        }
        
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4);
            }
            50% {
                box-shadow: 0 4px 24px rgba(37, 211, 102, 0.8);
            }
        }
        
        @media (max-width: 768px) {
            .whatsapp-float {
                bottom: 90px;
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
        }
    `;
    
    document.head.appendChild(style);
    document.body.appendChild(whatsappBtn);
}

// Initialize WhatsApp button
createWhatsAppButton();

// ===== Console Message =====
console.log('%c NET PARTNER ', 'background: linear-gradient(135deg, #6366f1 0%, #ec4899 100%); color: white; font-size: 20px; padding: 10px; border-radius: 5px;');
console.log('%c Website Development by NET PARTNER ', 'color: #6366f1; font-size: 14px;');

// ===== Page Load Complete =====
window.addEventListener('load', () => {
    console.log('Website loaded successfully!');
    
    // Remove loading screen if exists
    const loader = document.querySelector('.loader');
    if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => loader.remove(), 500);
    }
});

// ===== Handle Window Resize =====
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        // Recalculate positions or sizes if needed
        console.log('Window resized');
    }, 250);
});