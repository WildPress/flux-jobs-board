<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\JobPostings\CreateJobPosting;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job-postings', CreateJobPosting::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
});
