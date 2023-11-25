<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controller\PenController;
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

Route::get('fill', [PenController::class, 'fillPen']);
Route::get('create', [PenController::class, 'createPen']);
Route::get('insert', [PenController::class, 'insertPen']);


Route::get('uuid', function () {
    $products = Product::all();
    foreach ($products as $product) {
        echo $product . '<br>';
    }
});
