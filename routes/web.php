<?php

use App\Http\Controllers\PdfExampleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReadXmlStandardController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// xml test
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::get('/standard', [ReadXmlStandardController::class, 'index'])->name('read-xml-standard');

// pdf test
Route::get('/pdf', [PdfExampleController::class, 'index'])->name('pdf.index');
Route::get('/pdf/download/{product}', [PdfExampleController::class, 'download'])->name('pdf.download');
Route::resource('products', ProductController::class);
