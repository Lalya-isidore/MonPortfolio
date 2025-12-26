<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="<?php echo e(route('home')); ?>" class="logo">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="ISIDORE LALYA - Développeur Web" class="logo-image">
            </a>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="navbar-menu" id="navbarMenu">
            <ul class="nav-links">
                <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Accueil</a>
                </li>
                <li><a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">À
                        propos</a></li>
                <li><a href="<?php echo e(route('projects')); ?>"
                        class="<?php echo e(request()->routeIs('projects') ? 'active' : ''); ?>">Projets</a></li>
                <li><a href="<?php echo e(route('services')); ?>"
                        class="<?php echo e(request()->routeIs('services') ? 'active' : ''); ?>">Services</a></li>
                <li><a href="<?php echo e(route('contact')); ?>"
                        class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\Portfolio\resources\views/components/navbar.blade.php ENDPATH**/ ?>