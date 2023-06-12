<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\EmployeeController;
use App\Http\Resources\BranchResource;
use Illuminate\Support\Facades\Route;


Route::resource('branch', BranchController::class)->only('show', 'index');
Route::resource('employee', EmployeeController::class)->only('show', 'index');
Route::resource('cat', CatController::class)->only('show', 'index');
