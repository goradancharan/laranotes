<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/',[ViewController::class,'index'])->name('user.index');

Route::get('Laravel-Install',[ViewController::class,'laravelInstall'])->name('user.laravelInstall');
Route::get('Create-Project',[ViewController::class,'CreateProject'])->name('user.CreateProject');

