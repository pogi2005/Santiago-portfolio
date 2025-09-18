<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Paul christain Santiago',

            'title' => 'Portfolio',

            'email' => 'paulsantiago296@gmail.com',

            'phone' => '09564805678',

            'location' => 'PH, Manila',

            'bio' => '2nd year student mabati at pogi',

            'profile_image' => 'https://via.placeholder.com/300x300?text=Your+Photo',

            'skills' => ['Laravel', 'PHP', 'Javarice', 'HTML5', 'CSS#'],

            'projects' => ['calendar', 'web site'], // Project data

            'experience' => [...], // Experience data

            'education' => [...], // Education data

            'social_links' => [...] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}