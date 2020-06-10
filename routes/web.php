<?php

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

//cuando corremos migracion en .env normal, pero cuando quitamos el punto env dice
// que esta en production


// Comandos frecuentes, para no perder el tiempo recordandolos

// php artisan make:controller UserController -r

// php artisan make:model Flight -m

// php artisan make:migration create_users_table --create=users

//Cuando queremos agregar nueva columna a tabla existente//
// php artisan make:migration add_state_id_to_users

// composer require "laravelcollective/html":"^5.8.0"

// composer require laravel/ui "^1.0" --dev

// php artisan ui vue --auth

// despues usar npm install && npm run dev con este auth

//refrescar data en seeds
// php artisan migrate:refresh --seed 

// crear controlador resource con modelo inyeccion (implicit model binding)
// php artisan make:controller Category/CategoryController –r –m Category


//hacemos rollback de todas las migraciones
//php artisan migrate:reset

// crear migracion con tabla
//php artisan make:migration create_users_table --create=users

// crear la migracion solamente
//php artisan make:migration create_users_table

// subir las semillas la data
// php artisan db:seed



Route::get('/', function () {
    return view('welcome');
});
