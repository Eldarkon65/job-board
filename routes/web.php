<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;

Route::resource('vacancies', VacancyController::class)
    ->only(['index']);
