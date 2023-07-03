<?php

use App\Http\Controllers\SepatuController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('layoutIndex/index');
});

Route::get('shop', function () {
    return view('content/shop');
});

Route::get('single', function () {
    return view('content/single');
});

Route::get('pesanan', function () {
    return view('content/checkout');
});

Route::get('payment', function () {
    return view('content/payment');
});

Route::get('halamanAdmin', function () {
    return view('content/halamanAdmin');
});

Route::get('settingAkun', function () {
    return view('content/settingAkun');
});

Route::get('/', function () {
    return view('content/login');
});

Route::get('register', function () {
    return view('content/register');
});

Route::get('datasepatu', [SepatuController::class, 'index2']);

Route::get('tambahsepatu', [SepatuController::class, 'index']);

Route::post('tambahsepatu', [SepatuController::class, 'store']);

Route::get('deletesepatu/{sepatu}', [SepatuController::class, 'delete']);

Route::post('updatesepatu/{sepatu}', [SepatuController::class, 'update']);

Route::get('editsepatu/{sepatu}', [SepatuController::class, 'edit']);
