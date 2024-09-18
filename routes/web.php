<?php

use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\SlidesController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Rotas públicas
Route::get('/',                  [WebsiteController::class, 'welcome'           ])->name('welcome');
Route::get('/about',             [WebsiteController::class, 'about'             ])->name('about');
Route::get('/methodology',       [WebsiteController::class, 'methodology'       ])->name('methodology');
Route::get('/unities',           [WebsiteController::class, 'campus'            ])->name('campus');
Route::get('/cosmovisao',        [WebsiteController::class, 'cosmovisao'        ])->name('cosmovisao');
Route::get('/educational_model', [WebsiteController::class, 'educational_model' ])->name('educational_model');
Route::get('/trilingual_program',[WebsiteController::class, 'trilingual_program'])->name('trilingual_program');
Route::get('/teaching_staff',    [WebsiteController::class, 'teaching_staff'    ])->name('teaching_staff');
Route::get('/education_system',  [WebsiteController::class, 'education_system'  ])->name('education_system');
Route::get('/nursery',           [WebsiteController::class, 'nursery'           ])->name('nursery');
Route::get('/child_education',   [WebsiteController::class, 'child_education'   ])->name('child_education');
Route::get('/primary',           [WebsiteController::class, 'primary'           ])->name('primary');
Route::get('/high_school',       [WebsiteController::class, 'high_school'       ])->name('high_school');
Route::get('/segments',          [WebsiteController::class, 'segments'          ])->name('segments');


Route::view('dashboard', 'admin.dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::prefix('slides')->name('slides.')->group(function () {
        Route::get('/', [SlidesController::class, 'index'])->name('index');
        Route::get('/create', [SlidesController::class, 'create'])->name('create');
        Route::get('/{id}/edit', [SlidesController::class, 'edit'])->name('edit');
    });
    Route::prefix('schools')->name('schools.')->group(function () {
        Route::get('/', [SchoolController::class, 'index'])->name('index');
        Route::get('/create', [SchoolController::class, 'create'])->name('create');
        Route::get('/{id}/edit', [SchoolController::class, 'edit'])->name('edit');
    });
});

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
