<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;


# PARA EL DIRECCIONAMIENTO DE LAS WEB SE USA LA BARRA INCLINADA "/" COMO PAGINA DE INICIO
# FOR THE ADDRESSING OF THE WEBSITE, THE SLOPE "/" IS USED AS THE HOME PAGE

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);
  
  
