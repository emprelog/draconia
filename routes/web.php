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
        return Inertia::render('Arena');
    })->name('arena');

    Route::get('/tournament', function () {
        return Inertia::render('Tournament');
    })->name('tournament');

    Route::get('/invasion', function () {
        return Inertia::render('Invasion');
    })->name('invasion');

    Route::get('/inventory', function () {
        return Inertia::render('Inventory');
    })->name('inventory');

    Route::get('/techniques', function () {
        return Inertia::render('Techniques');
    })->name('techniques');

    Route::get('/groups', function () {
        return Inertia::render('Groups');
    })->name('groups');

    Route::get('/diary', function () {
        return Inertia::render('Diary');
    })->name('diary');
});
