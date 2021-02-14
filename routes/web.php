<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// latihan 1
// Route::get('/siswa/{nama_siswa}', function ($nama_siswa) {
//     return view('siswa',[
//         'nama_siswa'=> $nama_siswa
//     ]);
// });

// Route::view('/about', 'v_about', [
//     'nama'=>'<i>kukuh</i>',
//     'alamat'=>'klaten'
// ]);

// Route::view('/admin', 'admin/v_index');

// Route::view('/guru', 'admin.guru.v_index');

// latihan 2
// Route::view('/','v_home');
// Route::view('/home','v_home');
// Route::view('/guru','v_guru');
// Route::view('/siswa','v_siswa');
// Route::view('/about','v_about');
// Route::view('/contact','v_contact');

// latihan 5
// Route::get('/', function () {
//     return view('v_home');
// });
// Route::view('/home','v_home');
// Route::view('/guru','v_guru');
// Route::view('/siswa','v_siswa');
// Route::view('/user','v_user');
// Route::view('/about','v_about');
// Route::view('/contact','v_contact');

// Latihan 7
route::get('/', [HomeController::class, 'index']);
route::get('/guru', [GuruController::class, 'index'])->name('guru');
// latihan 10
route::get('/guru/detail/{id_guru}', [GuruController::class, 'detail']);
// latihan 11
route::get('/guru/add', [GuruController::class, 'add']);
route::post('/guru/insert', [GuruController::class, 'insert']);

route::get('/about/{id}', [HomeController::class, 'about']);
