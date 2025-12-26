<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $experience = [
            [
                'year' => '2022 - Présent',
                'title' => 'Développeur Web Full Stack',
                'description' => '3 ans d\'expérience dans le développement web moderne'
            ],
            [
                'year' => '2021 - 2022',
                'title' => 'Développeur WordPress',
                'description' => 'Création de sites web professionnels et e-commerce'
            ],
            [
                'year' => '2020 - 2021',
                'title' => 'Développeur Junior',
                'description' => 'Apprentissage et développement de compétences en PHP et Laravel'
            ]
        ];

        $technicalSkills = [
            ['name' => 'HTML / CSS / JavaScript', 'level' => 95],
            ['name' => 'WordPress', 'level' => 90],
            ['name' => 'PHP', 'level' => 85],
            ['name' => 'Laravel', 'level' => 80],
            ['name' => 'GitHub', 'level' => 85],
            ['name' => 'Shopify', 'level' => 80],
        ];

        $marketingSkills = [
            ['name' => 'SEO / SEA', 'level' => 75],
            ['name' => 'Marketing Digital', 'level' => 75],
            ['name' => 'Google Ads', 'level' => 70],
            ['name' => 'Réseaux Sociaux', 'level' => 80],
        ];

        return view('about', compact('experience', 'technicalSkills', 'marketingSkills'));
    }
}
