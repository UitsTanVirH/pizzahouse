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

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/', function() {
//   return response()->json([
//    'stuff' => phpinfo()
//   ]);
// });


// pizza routes
Route::get('/pizzas', 'PizzaController@index');
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pizzas/create', 'PizzaController@create');
Route::get('/pizzas/{id}', 'PizzaController@show');
Route::delete('/pizzas/{id}', 'pizzaController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');