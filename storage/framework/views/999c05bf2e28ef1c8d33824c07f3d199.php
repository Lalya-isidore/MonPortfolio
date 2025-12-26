<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Primary Meta Tags -->
  <title><?php echo $__env->yieldContent('title', 'ISIDORE LALYA - Développeur Web Full Stack'); ?></title>
  <meta name="title" content="<?php echo $__env->yieldContent('title', 'ISIDORE LALYA - Développeur Web Full Stack'); ?>">
  <meta name="description"
    content="<?php echo $__env->yieldContent('meta_description', 'Portfolio professionnel de Isidore Lalya, Développeur Web Full Stack & Consultant SEO au Bénin. Expert Laravel, PHP, et créateur de solutions digitales sur mesure.'); ?>">
  <meta name="author" content="ISIDORE LALYA">
  <meta name="keywords"
    content="<?php echo $__env->yieldContent('meta_keywords', 'Développeur Web Bénin, Full Stack, Laravel, PHP, Création Site Web, SEO, Freelance, Abomey-Calavi'); ?>">

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo e(url()->current()); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo e(url()->current()); ?>">
  <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'ISIDORE LALYA - Développeur Web Full Stack'); ?>">
  <meta property="og:description"
    content="<?php echo $__env->yieldContent('meta_description', 'Portfolio professionnel de Isidore Lalya, Développeur Web Full Stack & Consultant SEO au Bénin. Expert Laravel, PHP, et créateur de solutions digitales sur mesure.'); ?>">
  <meta property="og:image" content="<?php echo $__env->yieldContent('meta_image', asset('images/og-image.jpg')); ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo e(url()->current()); ?>">
  <meta property="twitter:title" content="<?php echo $__env->yieldContent('title', 'ISIDORE LALYA - Développeur Web Full Stack'); ?>">
  <meta property="twitter:description"
    content="<?php echo $__env->yieldContent('meta_description', 'Portfolio professionnel de Isidore Lalya, Développeur Web Full Stack & Consultant SEO au Bénin. Expert Laravel, PHP, et créateur de solutions digitales sur mesure.'); ?>">
  <meta property="twitter:image" content="<?php echo $__env->yieldContent('meta_image', asset('images/og-image.jpg')); ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('images/logo.png')); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/logo.png')); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('images/logo.png')); ?>">

  <?php echo $__env->yieldContent('extra-css'); ?>

  <!-- Structured Data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "<?php echo e(url('/')); ?>/#website",
          "url": "<?php echo e(url('/')); ?>",
          "name": "ISIDORE LALYA",
          "description": "Portfolio de Développeur Web Full Stack",
          "inLanguage": "fr-FR"
        },
        {
          "@type": "Person",
          "@id": "<?php echo e(url('/')); ?>/#person",
          "name": "Isidore Lalya",
          "url": "<?php echo e(url('/')); ?>",
          "jobTitle": "Développeur Web Full Stack",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Abomey-Calavi",
            "addressCountry": "BJ"
          },
          "sameAs": [
            "https://linkedin.com/in/isidorelalya",
            "https://github.com/isidorelalya",
            "https://facebook.com/isidorelalya"
          ]
        }
      ]
    }
    </script>
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-content">
      <div class="preloader-logo">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="IL" class="preloader-logo-image">
      </div>
      <div class="preloader-spinner"></div>
      <p class="preloader-text">Chargement...</p>
    </div>
  </div>

  <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <main id="main-content">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Scripts -->
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <?php echo $__env->yieldContent('extra-js'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\Portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>