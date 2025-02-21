<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobsController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/single/{id}', [App\Http\Controllers\Jobs\JobsController::class, 'single'])->name('single.job');
Route::post('/jobs/save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');
Route::post('/jobs/apply', [App\Http\Controllers\Jobs\JobsController::class, 'applyJob'])->name('apply.job');
Route::get('/categories/single/{id}', [App\Http\Controllers\Categories\CategoriesController::class, 'singleCatgory'])->name('categories.single');

Route::get('/users/profile', [App\Http\Controllers\Users\UsersController::class, 'profile'])->name('profile');
Route::get('/users/profileSavedjob', [App\Http\Controllers\Users\UsersController::class, 'profileSavedJob'])->name('profileSavedJob');
Route::get('/users/profileAppliedjob', [App\Http\Controllers\Users\UsersController::class, 'profileAppliedjob'])->name('profileAppliedjob');

Route::get('/users/edit-details', [App\Http\Controllers\Users\UsersController::class, 'editDetails'])->name('edit.details');

Route::get('/employer-register',[App\Http\Controllers\Employers\EmployerController::class, 'employer'])->name('employer.register');