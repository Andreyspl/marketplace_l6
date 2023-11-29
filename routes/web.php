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

    // return 
    // return $products;
    // return \App\Models\User::all(); // - Collection - Retorna todos os users
    // return \App\Models\User::find(4); // - Retorna por id
    // return \App\Models\User::where('name', 'Kris Sauer')->first(); // seleciona o primeiro em select * from users where name = x
    // return \App\Models\User::paginate(10); // - Divide os dados por página
    // return \App\Models\User::where('name', 'Kris Sauer')->get(); // select * from users where name = x

    //$user = \App\Models\User::find(121);
    //$store = $user->store;


    //Criar uma loja para o user

    //$user = \App\Models\User::find(121);
    //$store = $user->store()->create([
    //    'name' => 'Loja teste',
    //    'description' => 'Loja de produtos de informática',
    //    'phone' => '41995128822',
    //    'slug' => 'loja_teste'
    //]);

    //dd($store);

    //Criar um produto para a loja

    //$user = \App\Models\User::find(121);
    //$products = $user->store->products()->create([
    //    'name' => 'Produto Teste',
    //    'description' => 'Descrição do Produto',
    //    'body' => 'Conteúdo do produto',
    //    'price' => 10.9,
    //    'slug' => 'produto-teste'
    //]);
    //dd($products);

    //Criar uma categoria

    // $category = \App\Models\Category::create([
    //    'name' => 'Games',
    //    'description' => null,
    //    'slug' => 'games'
    //]);

    //$category = \App\Models\Category::create([
    //    'name' => 'Notebooks',
    //    'description' => null,
    //    'slug' => 'notebooks'
    //]);

    //return \App\Models\Category::all();

    //Adicionar uma categoria ao produto

    //$product = \App\Models\Product::find(41);
    //$product->categories()->attach([1]); //Adiciona a categoria via id
    //$product->categories()->detach([1]); //Apaga categoria via id
    //$product->categories()->sync([1, 2]); //Adiciona a categoria via id também
    //$product->categories()->sync([2]); // Método sync passando menos valores do que existe lá, ocorre o detach no id 1 e o id 2 (passado) se mantém.
    //$categories = \App\Models\Category::all();

    return \App\Models\User::all();
});

Route::prefix('admin')->name('admin.')->namespace('App\\Http\\Controllers\\Admin\\')->group(function(){
    
    // Route::prefix('stores')->name('stores.')->group(function(){
    //     Route::get('/', 'StoreController@index')->name('index');
    //     Route::get('/create', 'StoreController@create')->name('create');
    //     Route::post('/store', 'StoreController@store')->name('store');
    //     Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
    //     Route::post('/update/{store}', 'StoreController@update')->name('update');
    //     Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    // });

    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');
});
