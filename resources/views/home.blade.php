@extends('layouts.app')

@section('title')
    Développeur Web Full Stack & Consultant SEO - ISIDORE LALYA
@endsection

@section('meta_description')
    Expert en développement web (Laravel, PHP) et stratégie digitale à Abomey-Calavi, Bénin. Je transforme vos idées en
    solutions web performantes et optimisées.
@endsection

@section('meta_keywords')
    Développeur Web Bénin, Laravel Expert, Création Site Web, Consultant SEO, Freelance Abomey-Calavi, Full Stack Developer
@endsection

@section('content')
    <section class="hero">
        <div class="hero-background"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge">👋 Bienvenue sur mon portfolio</div>
                <h1 class="hero-title">
                    Je suis <span class="gradient-text">ISIDORE LALYA</span>
                </h1>
                <h2 class="hero-subtitle">Développeur Web Full Stack</h2>
                <p class="hero-description">
                    Avec <strong>3 ans d'expérience</strong>, je transforme vos idées en solutions web modernes et
                    performantes.
                    Spécialisé en WordPress, Laravel, et Marketing Digital.
                </p>

                <div class="hero-buttons">
                    <a href="{{ route('projects') }}" class="btn btn-primary">
                        <span>Voir mes projets</span>
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">
                        Me contacter
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="floating-card">
                    <div class="card-icon">💻</div>
                    <div class="card-text">
                        <strong>3+ ans</strong>
                        <span>d'expérience</span>
                    </div>
                </div>
                <div class="floating-card" style="animation-delay: 0.5s;">
                    <div class="card-icon">🚀</div>
                    <div class="card-text">
                        <strong>50+</strong>
                        <span>projets réalisés</span>
                    </div>
                </div>
                <div class="floating-card" style="animation-delay: 1s;">
                    <div class="card-icon">⭐</div>
                    <div class="card-text">
                        <strong>100%</strong>
                        <span>satisfaction client</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mes Compétences</h2>
                <p class="section-description">Technologies et outils que je maîtrise pour créer des solutions web
                    exceptionnelles</p>
            </div>

            <!-- Skills Ticker (Continuous Scroll) -->
            <div class="skills-ticker-wrapper">
                <div class="skills-ticker" id="skillsTicker">
                    @foreach($skills as $skill)
                        <div class="skill-card">
                            <div class="skill-icon">
                                @if($skill === 'HTML')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                                    </svg>
                                @elseif($skill === 'CSS')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                                    </svg>
                                @elseif($skill === 'JavaScript')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                                    </svg>
                                @elseif($skill === 'SEO')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <!-- Magnifying glass circle -->
                                        <circle cx="10" cy="10" r="7" stroke-linecap="round" stroke-linejoin="round" />
                                        <!-- Magnifying glass handle -->
                                        <path d="M15 15l6 6" stroke-linecap="round" stroke-linejoin="round" />
                                        <!-- Bar chart inside magnifying glass -->
                                        <path d="M7 10v3M10 8v5M13 9v4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                @elseif($skill === 'WordPress')
                                    <svg width="60" height="60" viewBox="0 0 122.52 122.523" fill="currentColor">
                                        <path
                                            d="M8.708 61.26c0 20.802 12.089 38.779 29.619 47.298L13.258 39.872a52.354 52.354 0 0 0-4.55 21.388z" />
                                        <path
                                            d="M96.74 58.608c0-6.495-2.333-10.993-4.334-14.494-2.664-4.329-5.161-7.995-5.161-12.324 0-4.831 3.664-9.328 8.825-9.328.233 0 .454.029.681.042-9.35-8.566-21.807-13.796-35.489-13.796-18.36 0-34.513 9.42-43.91 23.688 1.233.037 2.395.063 3.382.063 5.497 0 14.006-.667 14.006-.667 2.833-.167 3.167 3.994.337 4.329 0 0-2.847.335-6.015.501l19.138 56.925 11.501-34.493-8.188-22.434c-2.83-.166-5.511-.501-5.511-.501-2.832-.166-2.5-4.496.332-4.329 0 0 8.679.667 13.843.667 5.496 0 14.006-.667 14.006-.667 2.835-.167 3.168 3.994.337 4.329 0 0-2.853.335-6.015.501l18.992 56.494 5.242-17.517c2.272-7.269 4.001-12.49 4.001-16.989z" />
                                        <path
                                            d="M62.184 65.857l-15.768 45.819a52.614 52.614 0 0 0 14.846 2.094c6.12 0 11.989-1.058 17.452-2.979a4.543 4.543 0 0 1-.374-.724L62.184 65.857z" />
                                        <path
                                            d="M107.376 36.046c.226 1.674.354 3.471.354 5.404 0 5.333-.996 11.328-3.996 18.824l-16.053 46.413c15.624-9.111 26.133-26.038 26.133-45.426.001-9.137-2.333-17.729-6.438-25.215z" />
                                        <path
                                            d="M61.262 0C27.483 0 0 27.481 0 61.26c0 33.783 27.483 61.263 61.262 61.263 33.778 0 61.265-27.48 61.265-61.263C122.526 27.481 95.04 0 61.262 0zm0 119.715c-32.23 0-58.453-26.223-58.453-58.455 0-32.23 26.222-58.451 58.453-58.451 32.229 0 58.45 26.221 58.45 58.451 0 32.232-26.221 58.455-58.45 58.455z" />
                                    </svg>
                                @elseif($skill === 'PHP')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.686-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.945h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703-.261.25-.575.438-.917.551-.336.108-.765.164-1.286.164h-1.18l-.327 1.681h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.752zm-.78-2.064h-.943l-.515 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.048-.29z" />
                                    </svg>
                                @elseif($skill === 'Laravel')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.006-.024.006a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033.012.009.025.018.037.027.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.011.01-.021.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.146 1.225-6.127 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.003-.002h-.002c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                                    </svg>
                                @elseif($skill === 'Marketing Digital')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z" />
                                    </svg>
                                @elseif($skill === 'GitHub')
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                    </svg>
                                @else
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                @endif
                            </div>
                            <h3 class="skill-name">{{ $skill }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Prêt à démarrer votre projet ?</h2>
                <p>Discutons de vos besoins et créons ensemble quelque chose d'exceptionnel.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-large">
                    Contactez-moi maintenant
                </a>
            </div>
        </div>
    </section>
@endsection