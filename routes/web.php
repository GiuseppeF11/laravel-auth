<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\ProjectController;

//Models
use App\Models\Project;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::prefix('projects')->name('projects.')->group(function () {

    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/{project}', [ProjectController::class, 'show'])->name('show');
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

    Route::get('/dashboard', [AdminMainController::class, 'dashboard'])->name('dashboard');
    Route::resource('projects', AdminProjectController::class);

});

require __DIR__.'/auth.php';
