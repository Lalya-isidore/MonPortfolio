<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Primary Meta Tags -->
  <title>@yield('title', 'ISIDORE LALYA - Développeur Web Full Stack')</title>
  <meta name="title" content="@yield('title', 'ISIDORE LALYA - Développeur Web Full Stack')">
  <meta name="description"
    content="@yield('meta_description', 'Portfolio professionnel de Isidore Lalya, Développeur Web Full Stack & Consultant SEO au Bénin. Expert Laravel, PHP, et créateur de solutions digitales sur mesure.')">
  <meta name="author" content="ISIDORE LALYA">
  <meta name="keywords"
    content="@yield('meta_keywords', 'Développeur Web Bénin, Full Stack, Laravel, PHP, Création Site Web, SEO, Freelance, Abomey-Calavi')">

  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'ISIDORE LALYA - Développeur Web Full Stack')">
  <meta property="og:description"
    content="@yield('meta_description', 'Portfolio professionnel de Isidore Lalya, Développeur Web Full Stack & Consultant SEO au Bénin. Expert Laravel, PHP, et créateur de solutions digitales sur mesure.')">
  <meta property="og:image" content="@yield('meta_image', asset('images/og-image.jpg'))">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="@yield('title', 'ISIDORE LALYA - Développeur Web Full Stack')">
  <meta property="twitter:description"
    content="@yield('meta_description', 'Portfolio professionnel de Isidore Lalya, Développeur Web Full Stack & Consultant SEO au Bénin. Expert Laravel, PHP, et créateur de solutions digitales sur mesure.')">
  <meta property="twitter:image" content="@yield('meta_image', asset('images/og-image.jpg'))">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">

  @yield('extra-css')

  <!-- Structured Data -->
  <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "WebSite",
          "@@id": "{{ url('/') }}/#website",
          "url": "{{ url('/') }}",
          "name": "ISIDORE LALYA",
          "description": "Portfolio de Développeur Web Full Stack",
          "inLanguage": "fr-FR"
        },
        {
          "@@type": "Person",
          "@@id": "{{ url('/') }}/#person",
          "name": "Isidore Lalya",
          "url": "{{ url('/') }}",
          "jobTitle": "Développeur Web Full Stack",
          "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Abomey-Calavi",
            "addressCountry": "BJ"
          },
          "sameAs": [
            "https://www.linkedin.com/in/isidore-lalya-b83a692a0",
            "https://github.com/Lalya-isidore",
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
        <img src="{{ asset('images/logo.png') }}" alt="IL" class="preloader-logo-image">
      </div>
      <div class="preloader-spinner"></div>
      <p class="preloader-text">Chargement...</p>
    </div>
  </div>

  @include('components.navbar')

  <main id="main-content">
    @yield('content')
  </main>

  @include('components.footer')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('extra-js')
</body>

</html>