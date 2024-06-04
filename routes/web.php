<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// backend routes 
route::prefix('admin')->group(function(){
   route::get('/dashboard',[DashboardController::class ,'index'])->name('dashboard');
   
});

