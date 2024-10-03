<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    // Home Page
    Route::get('/',\App\Actions\HomePage\HomePageAction::class)->name('home-page');
    
    Route::group(['prefix' => 'enroll','as'=>'enroll.'],function (){
        Route::get('/',\App\Actions\Enroll\EnrollIndexAction::class)->name('index');
        Route::post('/store',\App\Actions\Enroll\EnrollStoreAction::class)->name('store');
    });
    Route::get('/categories-courses/{slug}',\App\Actions\CoursesWithCat\CoursesCatIndexAction::class)->name('categories-courses');
    Route::get('/categories-courses/{slug}/course/{id}',\App\Actions\CoursesWithCat\CourseCatDetailsAction::class)->name('course-details');





    Route::get('qr/branch/{branch}',\App\Actions\Vistor\OpenQrForBranchAction::class)->name('branch.open_qr');
});
