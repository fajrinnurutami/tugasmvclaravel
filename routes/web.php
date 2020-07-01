<?php

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



Route::get('/', 'HomeController@index');
//Route::get('/', 'BukuController@koleksibuku')->middleware('auth');

Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome_post');
/*
Langkah-langkahnya adalah:

Buatlah route terlebih dahulu untuk setiap halaman yang ingin dibuat.
Buat halaman blade untuk masing-masing route yang ingin dibuat. simpanlah di folder resources/views
Buat dua controller : HomeController dan AuthController.
Route Home diatur oleh HomeController, sedangkan route Register dan Welcome 
diatur oleh AuthController.

Alur program: dimulai dari halaman Home(route: '/') terdapat link 
menuju route register (route: '/register') . di halaman register terdapat 
form untuk mengisi nama depan, nama belakang, dan isian lainnya. 
Ketika disubmit di halaman register, form diarahkan ke halaman 
welcome ( route : '/welcome') dengan membawa data nama depan dan nama belakang yang akan 
ditampilkan di halaman welcome tersebut.
*/