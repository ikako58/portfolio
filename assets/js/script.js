// Mobile Navigation
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Close mobile menu when clicking a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Form validation
const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        let valid = true;
        
        // Validate name
        const nameInput = this.querySelector('input[name="name"]');
        if (nameInput.value.trim() === '') {
            valid = false;
            nameInput.classList.add('error');
        } else {
            nameInput.classList.remove('error');
        }
        
        // Validate email
        const emailInput = this.querySelector('input[name="email"]');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value.trim())) {
            valid = false;
            emailInput.classList.add('error');
        } else {
            emailInput.classList.remove('error');
        }
        
        // Validate message
        const messageInput = this.querySelector('textarea[name="message"]');
        if (messageInput.value.trim() === '') {
            valid = false;
            messageInput.classList.add('error');
        } else {
            messageInput.classList.remove('error');
        }
        
        if (!valid) {
            e.preventDefault();
        }
    });
}

// Animation on scroll
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    
    // Add shadow to header when scrolling
    if (scrollPosition > 50) {
        document.querySelector('header').classList.add('scrolled');
    } else {
        document.querySelector('header').classList.remove('scrolled');
    }
    
    // Animate sections when they come into view
    document.querySelectorAll('section').forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (scrollPosition > sectionTop - window.innerHeight + sectionHeight / 2) {
            section.classList.add('animate');
        }
    });
});