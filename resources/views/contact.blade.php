@extends('layouts.app')

@section('title')
    Contactez-moi pour votre projet - ISIDORE LALYA
@endsection

@section('meta_description')
    Vous avez un projet web ? Contactez-moi pour en discuter. Devis gratuit et réponse rapide sous 24h. Basé à
    Abomey-Calavi, disponible à l'international.
@endsection

@section('meta_keywords')
    Contact Développeur, Devis Site Web, Travailler avec moi, Freelance Disponible, Abomey-Calavi
@endsection

@section('extra-css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 400px;
            width: 100%;
            border-radius: 1rem;
            margin-top: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection

@section('content')
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Contactez-moi</h1>
            <p class="page-subtitle">Vous avez un projet ? Travaillons ensemble !</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Discutons de votre projet</h2>
                    <p>Que vous ayez un projet en tête ou que vous souhaitiez simplement discuter, n'hésitez pas à me
                        contacter. Je serais ravi d'échanger avec vous.</p>

                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <a href="mailto:lalyaisidore@gmail.com">lalyaisidore@gmail.com</a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4>Téléphone</h4>
                                <a href="tel:+22998201610">(+229) 98 20 16 10</a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-method-icon">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4>Localisation</h4>
                                <p>Abomey-Calavi, Tokan Aidégnon, Bénin</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-links-section">
                        <h4>Suivez-moi</h4>
                        <div class="social-links">
                            <a href="https://facebook.com/isidorelalya" target="_blank" rel="noopener" class="social-link"
                                aria-label="Facebook">
                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/isidore-lalya-b83a692a0" target="_blank" rel="noopener"
                                class="social-link" aria-label="LinkedIn">
                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="https://wa.me/22998201610" target="_blank" rel="noopener" class="social-link"
                                aria-label="WhatsApp">
                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                            </a>
                            <a href="https://github.com/Lalya-isidore" target="_blank" rel="noopener" class="social-link"
                                aria-label="GitHub">
                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    @if(session('success'))
                        <div class="alert alert-success">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif


                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Projet</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                class="form-control @error('subject') is-invalid @enderror" required>
                            @error('subject')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6"
                                class="form-control @error('message') is-invalid @enderror"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-large btn-block">
                            Envoyer le message
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="container" style="margin-top: 3rem;">
                <h2 style="text-align: center; margin-bottom: 1.5rem;">📍 Ma Localisation</h2>
                <div id="map"></div>
            </div>
        </div>
    </section>
@endsection

@section('extra-js')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Initialize the map centered on Abomey-Calavi, Bénin
        const map = L.map('map').setView([6.4489, 2.3556], 13);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map);

        // Custom marker with popup
        const marker = L.marker([6.4489, 2.3556]).addTo(map);
        marker.bindPopup('<b>ISIDORE LALYA</b><br>Développeur Web Full Stack<br>Abomey-Calavi, Tokan Aidégnon, Bénin<br>(+229) 98 20 16 10').openPopup();

        // Add a circle to highlight the area
        L.circle([6.4489, 2.3556], {
            color: '#667eea',
            fillColor: '#764ba2',
            fillOpacity: 0.2,
            radius: 2000
        }).addTo(map);
    </script>
@endsection