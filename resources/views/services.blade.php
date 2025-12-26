@extends('layouts.app')

@section('title')
    Services de Développement Web & SEO - ISIDORE LALYA
@endsection

@section('meta_description')
    Je propose des services complets : création de sites web sur mesure, refonte, optimisation SEO, et maintenance. Faites
    décoller votre activité en ligne.
@endsection

@section('meta_keywords')
    Services Web, Création Site Internet, Refonte Site, Audit SEO, Maintenance Web, Développement Sur Mesure
@endsection

@section('content')
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Mes Services</h1>
            <p class="page-subtitle">Des solutions web complètes pour concrétiser vos projets</p>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="services-grid">
                @foreach($services as $index => $service)
                    <div class="service-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="service-icon">{{ $service['icon'] }}</div>
                        <h3 class="service-title">{{ $service['title'] }}</h3>
                        <p class="service-description">{{ $service['description'] }}</p>
                        <ul class="service-features">
                            @foreach($service['features'] as $feature)
                                <li>
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                        </path>
                                    </svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
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
                <a href="{{ route('contact') }}" class="btn btn-primary btn-large">Demander un devis</a>
            </div>
        </div>
    </section>
@endsection