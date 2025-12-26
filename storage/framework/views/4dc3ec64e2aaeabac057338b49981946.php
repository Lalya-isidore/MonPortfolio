

<?php $__env->startSection('title'); ?>
    Services de Développement Web & SEO - ISIDORE LALYA
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
    Je propose des services complets : création de sites web sur mesure, refonte, optimisation SEO, et maintenance. Faites
    décoller votre activité en ligne.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keywords'); ?>
    Services Web, Création Site Internet, Refonte Site, Audit SEO, Maintenance Web, Développement Sur Mesure
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Mes Services</h1>
            <p class="page-subtitle">Des solutions web complètes pour concrétiser vos projets</p>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="services-grid">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo e($index * 100); ?>">
                        <div class="service-icon"><?php echo e($service['icon']); ?></div>
                        <h3 class="service-title"><?php echo e($service['title']); ?></h3>
                        <p class="service-description"><?php echo e($service['description']); ?></p>
                        <ul class="service-features">
                            <?php $__currentLoopData = $service['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                        </path>
                                    </svg>
                                    <span><?php echo e($feature); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="container">
            <h2 class="section-title">Mon Processus de Travail</h2>
            <div class="process-grid">
                <div class="process-step">
                    <div class="process-number">01</div>
                    <h3>Découverte</h3>
                    <p>Analyse de vos besoins et de vos objectifs pour définir la meilleure approche.</p>
                </div>
                <div class="process-step">
                    <div class="process-number">02</div>
                    <h3>Planification</h3>
                    <p>Création d'une stratégie détaillée et d'un plan de projet sur mesure.</p>
                </div>
                <div class="process-step">
                    <div class="process-number">03</div>
                    <h3>Développement</h3>
                    <p>Développement de votre solution avec les meilleures technologies.</p>
                </div>
                <div class="process-step">
                    <div class="process-number">04</div>
                    <h3>Tests & Lancement</h3>
                    <p>Tests rigoureux et déploiement de votre projet en production.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Besoin d'un de ces services ?</h2>
                <p>Discutons de votre projet et trouvons la solution idéale ensemble.</p>
                <a href="<?php echo e(route('contact')); ?>" class="btn btn-primary btn-large">Demander un devis</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Portfolio\resources\views/services.blade.php ENDPATH**/ ?>