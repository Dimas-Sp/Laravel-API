<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SiswaController;

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
Route::get('/oka', function () {
    return view('oka');
});

Route::post('/savedatasiswa', function () {

    DB::table('siswa')->insert([
        'nisn' => $_POST['nisn'],
        'nis' => $_POST['nis'],
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'id_telp' => $_POST['id_telp']
    ]);
    return back();
});
Route::get('/savedatasiswa', function () {

    DB::table('siswa')->insert([
        'nisn' => $_GET['nisn'],
        'nis' => $_GET['nis'],
        'nama' => $_GET['nama'],
        'alamat' => $_GET['alamat'],
        'id_telp' => $_GET['id_telp']
    ]);
    return back();
});

Route::get('/user', [SiswaController::class, 'coba']);
