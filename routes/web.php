<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Locale Switcher Logic
Route::get('/locale/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'lv'])) {
        return redirect()->back();
    }

    // Set Session and Locale
    Session::put('locale', $lang);
    App::setLocale($lang);

    // Smart Redirect Logic
    try {
        $previousUrl = url()->previous();
        $previousRequest = app('request')->create($previousUrl);
        $route = app('router')->getRoutes()->match($previousRequest);
        
        $routeName = $route->getName();
        $routeParams = $route->parameters();

        // Map route names: 'base_name' => 'en.base_name'
        // We assume LV routes are base (e.g. 'home') and EN are prefixed (e.g. 'en.home')
        // Special cases mapping defined manually if needed
        $map = [
            'home' => 'en.home',
            'about' => 'en.about',
            'services' => 'en.services',
            'projects' => 'en.projects',
            'awards' => 'en.awards',
            'contacts' => 'en.contacts',
            'iso' => 'en.iso',
            'partners' => 'en.partners',
            'vacancies' => 'en.vacancies',
            'privacy' => 'en.privacy',
            'project' => 'en.project', // uses {id} param
        ];

        if ($lang === 'en') {
            // Switching to EN
            if (isset($map[$routeName])) {
                return redirect()->route($map[$routeName], $routeParams);
            }
        } else {
            // Switching to LV (Inverse lookup)
            $inverseMap = array_flip($map);
            if (isset($inverseMap[$routeName])) {
                return redirect()->route($inverseMap[$routeName], $routeParams);
            }
        }
    } catch (\Exception $e) {
        // Route match failed or other error, fall back to home
    }

    // Fallback if no matching route found
    if ($lang === 'en') {
        return redirect()->route('en.home');
    } else {
        return redirect()->route('home');
    }
})->name('locale');

// Latvian Routes (Default / Root)
Route::middleware(['web'])->group(function () {
    // Set locale to LV for these routes
    Route::group(['middleware' => function ($request, $next) {
        App::setLocale('lv');
        return $next($request);
    }], function () {
        Route::get('/', function () { 
            return view('home', [
                'currentProjects' => \App\Models\Project::where('status', 'in_process')
                    ->orderBy('sort_order', 'asc')
                    ->get()
            ]); 
        })->name('home');
        Route::get('/par-mums', function () { return view('about'); })->name('about');
        Route::get('/pakalpojumi', function () { 
            return view('services', [
                'services' => \App\Models\Service::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('services');
        Route::get('/pabeigtie-objekti', function () { 
            return view('projects', [
                'projects' => \App\Models\Project::where('status', '!=', 'in_process')
                    ->orderBy('sort_order', 'asc')
                    ->get()
            ]); 
        })->name('projects');
        Route::get('/apbalvojumi', function () { 
            return view('awards', [
                'awards' => \App\Models\Award::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('awards');
        Route::get('/kontakti', function () { return view('contacts'); })->name('contacts');
        Route::get('/iso-sertifikati', function () { 
            return view('iso_certificates', [
                'certificates' => \App\Models\Certificate::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('iso');
        Route::get('/partneri', function () { 
            return view('partners', [
                'partners' => \App\Models\Partner::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('partners');
        Route::get('/vakances', function () { 
            return view('vacancies', [
                'vacancies' => \App\Models\Vacancy::where('is_active', true)->orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('vacancies');
        Route::get('/privatuma-politika', function () { return view('privacy_policy'); })->name('privacy');
        
        Route::get('/objekti/{slug}', function ($slug) { 
            $project = \App\Models\Project::where('slug', $slug)->firstOrFail();
            return view('project', ['project' => $project]); 
        })->name('project');
    });
});

// English Routes
Route::prefix('en')->middleware(['web'])->group(function () {
    // Set locale to EN for these routes
    Route::group(['middleware' => function ($request, $next) {
        App::setLocale('en');
        return $next($request);
    }], function () {
        Route::get('/', function () { 
            return view('en.home', [
                'currentProjects' => \App\Models\Project::where('status', 'in_process')
                    ->orderBy('sort_order', 'asc')
                    ->get()
            ]); 
        })->name('en.home'); // /en
        Route::get('/index.php', function () { return redirect()->route('en.home'); }); // Redirect legacy index.php
        
        Route::get('/about-us', function () { return view('en.about'); })->name('en.about');
        Route::get('/services', function () { 
            return view('en.services', [
                'services' => \App\Models\Service::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('en.services');
        Route::get('/projects', function () { 
            return view('en.projects', [
                'projects' => \App\Models\Project::where('status', '!=', 'in_process')
                    ->orderBy('sort_order', 'asc')
                    ->get()
            ]); 
        })->name('en.projects');
        Route::get('/awards', function () { 
            return view('en.awards', [
                'awards' => \App\Models\Award::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('en.awards');
        Route::get('/contacts', function () { return view('en.contacts'); })->name('en.contacts');
        Route::get('/iso-certificates', function () { 
            return view('en.iso_certificates', [
                'certificates' => \App\Models\Certificate::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('en.iso');
        Route::get('/partners', function () { 
            return view('en.partners', [
                'partners' => \App\Models\Partner::orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('en.partners');
        Route::get('/vacancies', function () { 
            return view('en.vacancies', [
                'vacancies' => \App\Models\Vacancy::where('is_active', true)->orderBy('sort_order', 'asc')->get()
            ]); 
        })->name('en.vacancies');
        Route::get('/privacy-policy', function () { return view('en.privacy_policy'); })->name('en.privacy');
        
        Route::get('/projects/{slug}', function ($slug) { 
            $project = \App\Models\Project::where('slug', $slug)->firstOrFail();
            return view('en.project', ['project' => $project]); 
        })->name('en.project');
    });
});
