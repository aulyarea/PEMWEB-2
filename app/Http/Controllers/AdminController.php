<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
    {
        return view('admin.index');
    }
}

Route::get('/pasien/show', [PasienController::class, 'show']);

Route::get('/pasien/show', [PasienController::class, 'show']);

Route::get('/pasien/show', [PasienController::class, 'show']);