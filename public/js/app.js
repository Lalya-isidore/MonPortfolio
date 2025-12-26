// ==========================================
// ISIDORE LALYA PORTFOLIO - JAVASCRIPT
// ==========================================

document.addEventListener('DOMContentLoaded', function () {

    // ==========================================
    // PRELOADER
    // ==========================================

    const preloader = document.getElementById('preloader');

    // Hide preloader after page load with smooth animation
    window.addEventListener('load', function () {
        if (preloader) {
            // Ensure minimum display time of 500ms for smooth UX
            setTimeout(function () {
                preloader.classList.add('fade-out');

                // Remove preloader from DOM after fade animation
                setTimeout(function () {
                    preloader.style.display = 'none';
                }, 500);
            }, 500);
        }
    });


    // ==========================================
    // MOBILE NAVIGATION
    // ==========================================

    const navToggle = document.getElementById('navToggle');
    const navbarMenu = document.getElementById('navbarMenu');

    if (navToggle && navbarMenu) {
        navToggle.addEventListener('click', function () {
            navbarMenu.classList.toggle('active');

            // Animate hamburger icon
            const spans = navToggle.querySelectorAll('span');
            if (navbarMenu.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translateY(8px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translateY(-8px)';
            } else {
                spans[0].style.transform = '';
                spans[1].style.opacity = '';
                spans[2].style.transform = '';
            }
        });

        // Close mobile menu when clicking a link
        const navLinks = document.querySelectorAll('.nav-links a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navbarMenu.classList.remove('active');
                const spans = navToggle.querySelectorAll('span');
                spans[0].style.transform = '';
                spans[1].style.opacity = '';
                spans[2].style.transform = '';
            });
        });
    }

    // ==========================================
    // NAVBAR SCROLL EFFECT
    // ==========================================

    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    if (navbar) {
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                navbar.style.background = 'rgba(10, 10, 15, 0.95)';
                navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.4)';
            } else {
                navbar.style.background = 'rgba(10, 10, 15, 0.8)';
                navbar.style.boxShadow = 'none';
            }

            lastScroll = currentScroll;
        });
    }

    // ==========================================
    // SKILL BAR ANIMATIONS WITH COUNTER
    // ==========================================

    const skillBars = document.querySelectorAll('.skill-bar-fill');

    if (skillBars.length > 0) {
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };

        // Function to animate counter from 1 to target value
        function animateCounter(element, target, duration, delay) {
            setTimeout(() => {
                const startValue = 1;
                const startTime = performance.now();

                function updateCounter(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    // Easing function for smooth animation
                    const easedProgress = progress < 0.5
                        ? 2 * progress * progress
                        : 1 - Math.pow(-2 * progress + 2, 2) / 2;

                    const currentValue = Math.round(startValue + (target - startValue) * easedProgress);
                    element.textContent = currentValue + '%';

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        element.textContent = target + '%';
                    }
                }

                requestAnimationFrame(updateCounter);
            }, delay);
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const targetWidth = entry.target.getAttribute('data-width');
                    const targetValue = parseInt(targetWidth);

                    // Get all skill bars in the same section
                    const section = entry.target.closest('.skills-detail-section');
                    if (section) {
                        const allBars = section.querySelectorAll('.skill-bar-fill');
                        const index = Array.from(allBars).indexOf(entry.target);
                        const delay = 100 + (index * 100); // 100ms base + 100ms per bar

                        // Animate progress bar
                        setTimeout(() => {
                            entry.target.style.width = targetWidth + '%';
                        }, delay);

                        // Animate percentage counter
                        const percentElement = entry.target
                            .closest('.skill-bar-item')
                            ?.querySelector('.skill-bar-percent');

                        if (percentElement) {
                            animateCounter(percentElement, targetValue, 1500, delay);
                        }
                    } else {
                        // Fallback if section not found
                        const delay = 300;
                        setTimeout(() => {
                            entry.target.style.width = targetWidth + '%';
                        }, delay);

                        const percentElement = entry.target
                            .closest('.skill-bar-item')
                            ?.querySelector('.skill-bar-percent');

                        if (percentElement) {
                            animateCounter(percentElement, targetValue, 1500, delay);
                        }
                    }

                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        skillBars.forEach(bar => observer.observe(bar));
    }

    // ==========================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ==========================================

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ==========================================
    // FADE IN ANIMATIONS ON SCROLL
    // ==========================================

    const fadeElements = document.querySelectorAll('[data-aos]');

    if (fadeElements.length > 0) {
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aos-animate');
                    fadeObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        fadeElements.forEach(el => {
            fadeObserver.observe(el);
        });
    }

    // ==========================================
    // FORM VALIDATION ENHANCEMENT
    // ==========================================

    const contactForm = document.querySelector('.contact-form');

    if (contactForm) {
        const formInputs = contactForm.querySelectorAll('.form-control');

        formInputs.forEach(input => {
            input.addEventListener('blur', function () {
                validateField(this);
            });

            input.addEventListener('input', function () {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });

        contactForm.addEventListener('submit', function (e) {
            let isValid = true;

            formInputs.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    function validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        let errorMsg = '';

        // Required check
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMsg = 'Ce champ est requis';
        }

        // Email validation
        if (field.type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMsg = 'Veuillez entrer une adresse email valide';
            }
        }

        // Min length check
        const minLength = field.getAttribute('minlength');
        if (minLength && value.length < parseInt(minLength)) {
            isValid = false;
            errorMsg = `Minimum ${minLength} caractères requis`;
        }

        // Update UI
        if (!isValid) {
            field.classList.add('is-invalid');
            let errorElement = field.parentElement.querySelector('.error-message');
            if (!errorElement) {
                errorElement = document.createElement('span');
                errorElement.className = 'error-message';
                field.parentElement.appendChild(errorElement);
            }
            errorElement.textContent = errorMsg;
        } else {
            field.classList.remove('is-invalid');
            const errorElement = field.parentElement.querySelector('.error-message');
            if (errorElement) {
                errorElement.remove();
            }
        }

        return isValid;
    }

    // ==========================================
    // SCROLL TO TOP BUTTON (Optional Enhancement)
    // ==========================================

    // Create scroll to top button
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '↑';
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.setAttribute('aria-label', 'Scroll to top');
    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        transform: translateY(100px);
        transition: all 0.3s ease;
        z-index: 99;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.4);
    `;

    document.body.appendChild(scrollBtn);

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 500) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.transform = 'translateY(0)';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.transform = 'translateY(100px)';
        }
    });

    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    scrollBtn.addEventListener('mouseenter', function () {
        this.style.transform = 'translateY(-5px) scale(1.1)';
    });

    scrollBtn.addEventListener('mouseleave', function () {
        this.style.transform = 'translateY(0) scale(1)';
    });

    // ==========================================
    // SKILLS TICKER (Continuous Scroll)
    // ==========================================

    const skillsTicker = document.getElementById('skillsTicker');

    if (skillsTicker) {
        // Clone all skill cards and append them to create infinite loop
        const skillCards = Array.from(skillsTicker.children);

        // Duplicate the skills twice for smooth infinite scroll
        skillCards.forEach(card => {
            const clone = card.cloneNode(true);
            skillsTicker.appendChild(clone);
        });

        // Optional: Adjust animation speed based on number of items
        const totalCards = skillCards.length;
        const animationDuration = Math.max(20, totalCards * 2); // Minimum 20s
        skillsTicker.style.animationDuration = `${animationDuration}s`;
    }

    // ==========================================
    // LOADING OVERLAY (for forms and async actions)
    // ==========================================

    // Create loading overlay element
    function createLoadingOverlay(message = 'Chargement en cours...') {
        const existingOverlay = document.getElementById('loading-overlay');
        if (existingOverlay) {
            existingOverlay.remove();
        }

        const overlay = document.createElement('div');
        overlay.id = 'loading-overlay';
        overlay.className = 'loading-overlay';
        overlay.innerHTML = `
            <div class="loading-overlay-content">
                <div class="loading-spinner"></div>
                <p class="loading-message">${message}</p>
            </div>
        `;

        document.body.appendChild(overlay);
        return overlay;
    }

    // Show loading overlay
    window.showLoadingOverlay = function (message = 'Chargement en cours...') {
        const overlay = createLoadingOverlay(message);
        // Use setTimeout to ensure smooth transition
        setTimeout(() => {
            overlay.classList.add('active');
        }, 10);
    };

    // Hide loading overlay
    window.hideLoadingOverlay = function () {
        const overlay = document.getElementById('loading-overlay');
        if (overlay) {
            overlay.classList.remove('active');
            setTimeout(() => {
                overlay.remove();
            }, 300);
        }
    };

    // Auto-apply loading overlay on form submission (optional)
    // Reuse the contactForm variable from validation section
    if (contactForm && !contactForm.hasAttribute('data-loading-attached')) {
        contactForm.setAttribute('data-loading-attached', 'true');
        contactForm.addEventListener('submit', function (e) {
            // Only show if form passes validation
            const isValid = contactForm.checkValidity();
            if (isValid) {
                showLoadingOverlay('Envoi du message en cours...');
                // Note: Loading overlay will be hidden when page redirects or via AJAX callback
            }
        });
    }

    // ==========================================
    // PAGE TRANSITION ANIMATION (optional)
    // ==========================================

    // Add fade-in animation to main content
    const mainContent = document.getElementById('main-content');
    if (mainContent) {
        mainContent.classList.add('page-transition');
    }

    // ==========================================
    // CONSOLE WELCOME MESSAGE
    // ==========================================

    console.log('%c👋 Bienvenue sur le portfolio de ISIDORE LALYA!',
        'color: #667eea; font-size: 20px; font-weight: bold;');
    console.log('%c🚀 Développeur Web Full Stack',
        'color: #764ba2; font-size: 16px;');
    console.log('%c💼 Intéressé par une collaboration? Contactez-moi!',
        'color: #10b981; font-size: 14px;');


});
