<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('pages.dashboard.dashboard'))->name('dashboard');

Route::controller(TeacherController::class)
    ->name('teachers.')
    ->prefix('teachers')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/update/{id}', 'show')->name('show');
        Route::post('/', 'store')->name('store');
    });


//Group section
 Route::get('/group', fn () => view('pages.group.groupList'))->name('group');

 //Group list section
 Route::get('/groupList', fn () => view('pages.groupList.groupList'))->name('groupList');

 //Assistance generator section
  Route::get('/assistanceGenerator', fn () => view('pages.assistanceGenerator.assistanceG'))->name('assistanceGenerator');

 //saved groups section
 Route::get('/savedGroups', fn () => view('pages.savedGroups.savedGroups'))->name('savedGroups');
