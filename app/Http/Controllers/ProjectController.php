<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Boutique E-commerce Shopify',
                'description' => 'Création d\'une boutique en ligne complète avec Shopify, incluant personnalisation du thème et intégration de paiement.',
                'technologies' => ['Shopify', 'Liquid', 'JavaScript', 'CSS'],
                'image' => 'project1.jpg'
            ],
            [
                'title' => 'Site Corporate WordPress',
                'description' => 'Développement d\'un site web corporate moderne avec WordPress, incluant un système de gestion de contenu personnalisé.',
                'technologies' => ['WordPress', 'PHP', 'MySQL', 'JavaScript'],
                'image' => 'project2.jpg'
            ],
            [
                'title' => 'Application Laravel CRM',
                'description' => 'Application de gestion de la relation client (CRM) développée avec Laravel, incluant gestion des leads et reporting.',
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Vue.js'],
                'image' => 'project3.jpg'
            ],
            [
                'title' => 'Campagne Marketing Digital',
                'description' => 'Stratégie et implémentation de campagnes marketing digital pour augmenter la visibilité en ligne de clients.',
                'technologies' => ['SEO', 'Google Ads', 'Analytics', 'Social Media'],
                'image' => 'project4.jpg'
            ],
            [
                'title' => 'Site Vitrine Landing Page',
                'description' => 'Design et développement de landing pages optimisées pour la conversion avec animations modernes.',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'PHP'],
                'image' => 'project5.jpg'
            ],
            [
                'title' => 'Intégration API REST',
                'description' => 'Développement d\'APIs RESTful et intégration avec des systèmes tiers pour automatisation.',
                'technologies' => ['Laravel', 'REST API', 'JSON', 'OAuth'],
                'image' => 'api-rest.png'
            ]
        ];

        return view('projects', compact('projects'));
    }
}
