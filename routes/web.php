<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/fight', function () {
        return Inertia::render('Placeholder', ['title' => 'Fight']);
    })->name('fight');

    Route::get('/arena', function () {
        return Inertia::render('Placeholder', ['title' => 'Arena']);
    })->name('arena');

    Route::get('/tournament', function () {
        return Inertia::render('Placeholder', ['title' => 'Tournament']);
    })->name('tournament');

    Route::get('/invasion', function () {
        return Inertia::render('Placeholder', ['title' => 'Invasion']);
    })->name('invasion');

    Route::get('/inventory', function () {
        return Inertia::render('Placeholder', ['title' => 'Inventory']);
    })->name('inventory');

    Route::get('/techniques', function () {
        return Inertia::render('Placeholder', ['title' => 'Techniques']);
    })->name('techniques');

    Route::get('/groups', function () {
        return Inertia::render('Placeholder', ['title' => 'Groups']);
    })->name('groups');

    Route::get('/diary', function () {
        return Inertia::render('Placeholder', ['title' => 'Diary']);
    })->name('diary');
});
