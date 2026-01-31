<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        $staticPages = [
            // LV
            'home',
            'about',
            'services',
            'projects',
            'awards',
            'contacts',
            'iso',
            'partners',
            'vacancies',
            'privacy',

            // EN
            'en.home',
            'en.about',
            'en.services',
            'en.projects',
            'en.awards',
            'en.contacts',
            'en.iso',
            'en.partners',
            'en.vacancies',
            'en.privacy',
        ];

        return response()->view('sitemap', [
            'projects' => $projects,
            'staticPages' => $staticPages
        ])->header('Content-Type', 'text/xml');
    }
}
