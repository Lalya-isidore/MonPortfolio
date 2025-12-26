@extends('layouts.app')

@section('title', 'À propos - ISIDORE LALYA')

@section('content')
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
                            <img src="{{ asset('images/profile.jpg') }}" alt="Isidore Lalya" class="profile-image">
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
                                @foreach($experience as $exp)
                                    <div class="experience-item">
                                        <span class="exp-year">{{ $exp['year'] }}</span>
                                        <h3 class="exp-title">{{ $exp['title'] }}</h3>
                                        <p class="exp-desc">{{ $exp['description'] }}</p>
                                    </div>
                                @endforeach
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
                                @foreach($technicalSkills as $skill)
                                    <div class="skill-bar-item">
                                        <div class="skill-bar-header">
                                            <span class="skill-bar-name">{{ $skill['name'] }}</span>
                                            <span class="skill-bar-percent">{{ $skill['level'] }}%</span>
                                        </div>
                                        <div class="skill-bar-track">
                                            <div class="skill-bar-fill" data-width="{{ $skill['level'] }}"></div>
                                        </div>
                                    </div>
                                @endforeach
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
                                @foreach($marketingSkills as $skill)
                                    <div class="skill-bar-item">
                                        <div class="skill-bar-header">
                                            <span class="skill-bar-name">{{ $skill['name'] }}</span>
                                            <span class="skill-bar-percent">{{ $skill['level'] }}%</span>
                                        </div>
                                        <div class="skill-bar-track">
                                            <div class="skill-bar-fill" data-width="{{ $skill['level'] }}"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection