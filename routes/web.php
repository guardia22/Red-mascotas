<?php

use App\Http\Controllers\AccesorioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AlimentoController;
// use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\AdoptaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Blog1Controller;
use App\Http\Controllers\Blog2Controller;
use Illuminate\Http\Request;

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
    return Redirect::route('login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (Request $request) {
//     $namepet = $request->get("namepet");
//      $perfiles = User::where('namepet', 'like', "%$namepet%")
//      ->orWhere('email', 'like', "%$namepet%")
//      ->orWhere('name', 'like', "%$namepet%")
//      ->get();   
//     return Inertia::render('Dashboard',compact('perfiles'));
//         })->name('dashboard');

 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserController::class, 'index'])->name('dashboard');

        // Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        //     $perfiles = User::all();   
        //    return Inertia::render('Dashboard',compact('perfiles'));
        //        })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard', UserController::class);

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('/dashboard', function (){
//         return Inertia::render('Dashboard');
//     })->name('dashboard');

//     Route::get('/search/{namepet}', [SearchController::class,'search'])->name('search');
// });    

Route::middleware(['auth:sanctum', 'verified'])->get('/alimentos', function () {
    return Inertia::render('Alimentos/Index');
})->name('alimentos.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/cuidados', function () {
    return Inertia::render('Cuidados/Indexcuidados');
})->name('cuidados.indexcuidados');

Route::middleware(['auth:sanctum', 'verified'])
->get('/accesorios', [AccesorioController::class, 'index'])->name('accesorios.indexaccesorios');
Route::middleware(['auth:sanctum', 'verified'])
->get('/accesorios/{accesorio}', [AccesorioController::class, 'show'])->name('accesorios.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/mascota', [Controller::class, 'mascota'])->name('mascota.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/mascota/{perfil}', [Controller::class, 'otraMascota'])->name('mascota.otraMascota');

Route::resource('alimentos', AlimentoController::class)
     ->middleware(['auth:sanctum', 'verified']);

Route::resource('horarios', HorarioController::class)
     ->middleware(['auth:sanctum', 'verified']);

// Route::resource('horarios', AgendaController::class)
//      ->middleware(['auth:sanctum', 'verified']);

// Route::resource('adoptas', AdoptaController::class,)
//      ->middleware(['auth:sanctum', 'verified']);

     Route::middleware(['auth:sanctum', 'verified'])
     ->get('/adopciones', [AdoptaController::class, 'index'])->name('adopciones.indexadopciones');
     Route::middleware(['auth:sanctum', 'verified'])
     ->get('/adopciones/{adopcion}', [AdoptaController::class, 'show'])->name('adopciones.show');

     Route::middleware(['auth:sanctum', 'verified'])
     ->get('/blogs', [BlogController::class, 'index'])->name('blogs.indexblogs');

     Route::middleware(['auth:sanctum', 'verified'])
     ->get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

     Route::middleware(['auth:sanctum', 'verified'])
     ->post('/blogs/{blog}/comment', [BlogController::class, 'storeComment'])->name('blogs.storeComment');





