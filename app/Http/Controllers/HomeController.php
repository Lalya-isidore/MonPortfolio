<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skills = [
            'HTML',
            'CSS',
            'JavaScript',
            'WordPress',
            'PHP',
            'Laravel',
            'SEO',
            'Marketing Digital',
            'GitHub',
            'Shopify'
        ];

        return view('home', compact('skills'));
    }
}
