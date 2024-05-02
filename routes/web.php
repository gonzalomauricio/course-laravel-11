<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;


# PARA EL DIRECCIONAMIENTO DE LAS WEB SE USA LA BARRA INCLINADA "/" COMO PAGINA DE INICIO
# FOR THE ADDRESSING OF THE WEBSITE, THE SLOPE "/" IS USED AS THE HOME PAGE

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',[PrimerControlador::class,'index']);

Route::resource('post',PrimerControlador::class);

/*
Route::get('/contact', function(){

    //return redirect('/contact2');
    //return redirect()->route('contact2');
    //return to_route('contact2');

    
    return view('contact', ['name' => 'Gonzalo']);

  # SE ASIGNA UN NOMBRE A LA RUTA DE CRUD PARA SU NAVEGACIOIN ENTRE LAS PAGINAS WEB  
  # A NAME IS ASSIGNED TO THE CRUD PATH FOR NAVIGATION BETWEEN WEB PAGES
})->name('contact'); # ->name('crud'); NOMBRE DE REFERENCIA PARA EL LINK DE NAVEGACION  

Route::get('/contact2', function(){
    return view('contact2 ');

  # SE ASIGNA UN NOMBRE A LA RUTA DE CRUD PARA SU NAVEGACIOIN ENTRE LAS PAGINAS WEB  
  # A NAME IS ASSIGNED TO THE CRUD PATH FOR NAVIGATION BETWEEN WEB PAGES
})->name('contact2'); # ->name('crud'); NOMBRE DE REFERENCIA PARA EL LINK DE NAVEGACION  
*/

  
  
