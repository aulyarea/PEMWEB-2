<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about',[
//         'nama' =>'Aulya Rea Sagita',
//         'prodi' => 'Sistem Informasi'
//     ]);
// });

// Route ::get('/salam', function () {
//     return "assalamualaikum wr.wb";
// });

// Route ::get('/salam', function () {
//     return "assalamualaikum wr.wb";
// });

// Route ::get('/produk{index}', function ($id) {
//     return view('produk.index',['idproduk'=>$id]);
// });


Route::get('/pasien/show', [PasienController::class, 'show']);