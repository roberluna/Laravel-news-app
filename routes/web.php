<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\CategoryController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $news_by_category = DB::table('notas')
        ->join('categories', 'notas.categories_id', "=", 'categories.id')
        ->where('users_id', Auth::id())
        ->select(DB::raw('category_name, count(categories.id) as total'))
        ->groupBy('category_name','categories.id')
        ->orderBy('total','desc')
        ->get();


    return Inertia::render('Dashboard', [
         'news_by_category' => $news_by_category
    ]);

})->name('dashboard');

Route::resource('noticias', NotaController::class);
Route::resource('categorias', CategoryController::class);