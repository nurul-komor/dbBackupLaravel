<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', function () {
    return view('welcome');
});


Artisan::command('logs:clear', function () {
    array_map('unlink', array_filter((array) glob(storage_path('logs/*.log'))));
    $this->comment('Logs have been cleared!');
})->describe('Clear log files');