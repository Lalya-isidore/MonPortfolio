

<?php $__env->startSection('title', 'À propos - ISIDORE LALYA'); ?>

<?php $__env->startSection('content'); ?>
    <div class="about-page">
        <!-- Hero Section -->
        <section class="page-hero">
            <div class="container">
                <h1 class="page-title">À propos de moi</h1>
                <p class="page-subtitle">Développeur Passionné & Expert en Solutions Digitales</p>
            </div>
        </section>

        <section class="about-main section">
            <div class="container">
                <div class="about-grid">
                    <!-- Left Column: Profile Photo -->
                    <div class="about-image-container" data-aos="fade-right">
                        <div class="profile-image-wrapper">
                            <div class="profile-decoration"></div>
                            <img src="<?php echo e(asset('images/profile.jpg')); ?>" alt="Isidore Lalya" class="profile-image">
                        </div>
                    </div>

                    <!-- Right Column: Biography & Experience -->
                    <div class="about-content" data-aos="fade-left">
                        <div class="about-info">
                            <h2>Mon Parcours</h2>
                            <p>Je suis Isidore Lalya, développeur web full-stack basé au Bénin. Depuis 3 ans, j'accompagne
                                les entreprises et les particuliers dans leur transformation digitale en créant des
                                solutions web sur mesure, performantes et optimisées pour le référencement.</p>

                            <div class="experience-list">
                                <?php $__currentLoopData = $experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="experience-item">
                                        <span class="exp-year"><?php echo e($exp['year']); ?></span>
                                        <h3 class="exp-title"><?php echo e($exp['title']); ?></h3>
                                        <p class="exp-desc"><?php echo e($exp['description']); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Full Width Skills Section -->
                <div class="about-skills-detail" data-aos="fade-up" style="margin-top: 5rem;">
                    <div class="section-header">
                        <h2 class="section-title">Mes Compétences</h2>
                        <div class="section-divider"></div>
                    </div>

                    <div class="skills-columns">
                        <div class="skills-column">
                            <div class="skills-column-header">
                                <div class="skills-icon technical">
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                <h3>Expertise Technique</h3>
                            </div>
                            <div class="skills-bars">
                                <?php $__currentLoopData = $technicalSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="skill-bar-item">
                                        <div class="skill-bar-header">
                                            <span class="skill-bar-name"><?php echo e($skill['name']); ?></span>
                                            <span class="skill-bar-percent"><?php echo e($skill['level']); ?>%</span>
                                        </div>
                                        <div class="skill-bar-track">
                                            <div class="skill-bar-fill" data-width="<?php echo e($skill['level']); ?>"></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="skills-column">
                            <div class="skills-column-header">
                                <div class="skills-icon marketing">
                                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <h3>Marketing & Stratégie</h3>
                            </div>
                            <div class="skills-bars">
                                <?php $__currentLoopData = $marketingSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="skill-bar-item">
                                        <div class="skill-bar-header">
                                            <span class="skill-bar-name"><?php echo e($skill['name']); ?></span>
                                            <span class="skill-bar-percent"><?php echo e($skill['level']); ?>%</span>
                                        </div>
                                        <div class="skill-bar-track">
                                            <div class="skill-bar-fill" data-width="<?php echo e($skill['level']); ?>"></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Portfolio\resources\views/about.blade.php ENDPATH**/ ?>