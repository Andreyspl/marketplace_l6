<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function(){
    // $products = \App\Models\Product::all(); //select * from products
    // $user = new \App\Models\User();
    // $user->name = 'Teste';
    // $user->email = 'test@gmail.com';
    // $user->password = bcrypt('123456789');
    // $user->save();

    //return 
    //return $products;
     return \App\Models\User::all(); // - Collection - Retorna todos os users
    // return \App\Models\User::find(4); // - Retorna por id
    // return \App\Models\User::where('name', 'Kris Sauer')->first(); // seleciona o primeiro em select * from users where name = x
    // return \App\Models\User::paginate(10); // - Divide os dados por página
    // return \App\Models\User::where('name', 'Kris Sauer')->get(); // select * from users where name = x

});
