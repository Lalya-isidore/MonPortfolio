<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => '🛒',
                'title' => 'E-commerce Development',
                'description' => 'Création de boutiques en ligne performantes avec Shopify ou WooCommerce, optimisées pour maximiser vos ventes.',
                'features' => [
                    'Configuration complète de la boutique',
                    'Intégration de paiement sécurisé',
                    'Design responsive et moderne',
                    'Optimisation SEO'
                ]
            ],
            [
                'icon' => '💼',
                'title' => 'Développement WordPress',
                'description' => 'Création de sites web professionnels sur mesure avec WordPress, adaptés à vos besoins spécifiques.',
                'features' => [
                    'Thèmes personnalisés',
                    'Plugins sur mesure',
                    'Formation à l\'administration',
                    'Maintenance et support'
                ]
            ],
            [
                'icon' => '⚡',
                'title' => 'Applications Laravel',
                'description' => 'Développement d\'applications web robustes et scalables avec le framework Laravel.',
                'features' => [
                    'Architecture MVC moderne',
                    'APIs RESTful',
                    'Tableaux de bord personnalisés',
                    'Sécurité avancée'
                ]
            ],
            [
                'icon' => '📈',
                'title' => 'Marketing Digital',
                'description' => 'Stratégies marketing complètes pour augmenter votre visibilité en ligne et générer plus de leads.',
                'features' => [
                    'Optimisation SEO',
                    'Campagnes Google Ads',
                    'Gestion des réseaux sociaux',
                    'Analytics et reporting'
                ]
            ],
            [
                'icon' => '🎨',
                'title' => 'Design Web Moderne',
                'description' => 'Création de designs web attrayants et user-friendly qui convertissent vos visiteurs en clients.',
                'features' => [
                    'UI/UX Design',
                    'Prototypage',
                    'Design responsive',
                    'Animations modernes'
                ]
            ],
            [
                'icon' => '🔧',
                'title' => 'Maintenance & Support',
                'description' => 'Service de maintenance technique et support pour assurer le bon fonctionnement de votre site web.',
                'features' => [
                    'Mises à jour régulières',
                    'Sauvegardes automatiques',
                    'Surveillance de sécurité',
                    'Support technique réactif'
                ]
            ]
        ];

        return view('services', compact('services'));
    }
}
