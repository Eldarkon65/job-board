<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;

Route::get('', fn()=>to_route('vacancy.index'));

Route::resource('vacancies', VacancyController::class)
    ->only(['index', 'show']);
