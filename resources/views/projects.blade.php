@extends('layouts.app')

@section('title')
    Mes Projets & Réalisations Web - ISIDORE LALYA
@endsection

@section('meta_description')
    Explorez mon portfolio de projets web : sites E-commerce, applications Laravel, sites vitrines et intégrations API. Des
    réalisations concrètes qui démontrent mon expertise.
@endsection

@section('meta_keywords')
    Portfolio, Projets Web, Réalisations, E-commerce, Laravel, Applications Web, Études de cas
@endsection

@section('content')
    <section class="page-hero">
        <div class="container">
            <h1 class="page-title">Mes Projets</h1>
            <p class="page-subtitle">Découvrez quelques-uns des projets sur lesquels j'ai travaillé</p>
        </div>
    </section>

    <section class="projects-section">
        <div class="container">
            <div class="projects-grid">
                @foreach($projects as $index => $project)
                    <div class="project-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="project-image">
                            @if(file_exists(public_path('images/' . $project['image'])))
                                <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div class="project-image-placeholder"
                                    style="background: linear-gradient(135deg, hsl({{ ($index * 60) % 360 }}, 70%, 50%), hsl({{ (($index * 60) + 60) % 360 }}, 70%, 60%));">
                                    <span class="project-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                </div>
                            @endif
                            <div class="project-overlay">
                                <button class="btn-view-project" onclick="openProjectModal({{ $index }})">
                                    Voir les détails
                                </button>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">{{ $project['title'] }}</h3>
                            <p class="project-description">{{ $project['description'] }}</p>
                            <div class="project-technologies">
                                @foreach($project['technologies'] as $tech)
                                    <span class="tech-badge">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Project Modal -->
    <div class="modal" id="projectModal">
        <div class="modal-backdrop" onclick="closeProjectModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closeProjectModal()">&times;</button>
            <div id="modalProjectContent">
                <!-- Content will be injected by JavaScript -->
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        const projects = @json($projects);

        function openProjectModal(index) {
            const project = projects[index];
            const modal = document.getElementById('projectModal');
            const content = document.getElementById('modalProjectContent');

            let techBadges = project.technologies.map(tech => `<span class="tech-badge">${tech}</span>`).join('');

            let imageHtml = '';
            if (project.image) {
                imageHtml = `<img src="/images/${project.image}" alt="${project.title}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 1rem;">`;
            } else {
                imageHtml = `<span class="project-number-large">${String(index + 1).padStart(2, '0')}</span>`;
            }

            content.innerHTML = `
                                        <div class="modal-project">
                                            <div class="modal-project-image" style="background: linear-gradient(135deg, hsl(${(index * 60) % 360}, 70%, 50%), hsl(${((index * 60) + 60) % 360}, 70%, 60%));">
                                                ${imageHtml}
                                            </div>
                                            <h2 class="modal-project-title">${project.title}</h2>
                                            <p class="modal-project-description">${project.description}</p>
                                            <div class="modal-project-tech">
                                                <h4>Technologies utilisées :</h4>
                                                <div class="project-technologies">${techBadges}</div>
                                            </div>
                                        </div>
                                    `;

            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
    </script>
@endsection