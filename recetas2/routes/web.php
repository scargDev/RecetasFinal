<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;



//Rutas de las páginas, también hacen los mismo los controllers, se usan más.

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});

//LLama al método prueba de la clase  RecetaController, llama una ruta desde el controlador
                                                        //regresar al menú anterior de recetas
Route::get('/recetas', [RecetaController::class, 'index'])->name('recetas.index');

//ruta para ir a vista de crear recetas, método create para crear
Route::get('/recetas/create', [RecetaController::class, 'create'])->name('recetas.create');

//ruta para ir a vista agregar receta, étodo store para almacenar
Route::post('/recetas', [RecetaController::class, 'store'])->name('recetas.store');

//para visualizar individualmente cada una de las recetas
Route::get('/recetas/{receta}', [RecetaController::class, 'show'])->name('recetas.show');

//editar las recetas
Route::get('/recetas/{receta}/edit', [RecetaController::class, 'edit'])->name('recetas.edit');
//Actualziar las recetas método PUT
Route::put('/recetas/{receta}', [RecetaController::class, 'update'])->name('recetas.update');


//Eliminar receta
Route::delete('/recetas/{receta}', [RecetaController::class, 'destroy'])->name('recetas.destroy');



//Mostrar perfil de usuario
Route::get('/perfiles/{perfil}', [PerfilController::class, 'show'])->name('perfiles.show');

//Editar perfiles de usuarios
Route::get('/perfiles/{perfil}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
//Actualizar el perfil de usuarios de usuario
Route::put('/perfiles/{perfil}', [PerfilController::class, 'update'])->name('perfiles.update');



//


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
