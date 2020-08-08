<?php

Route::resource('products', 'ProductController');
// Route::get('products', 'ProductController@create')->name('products.create');




Route::middleware([])->group(function () {

	Route::prefix('admin')->group(function () {

		Route::namespace ('Admin')->group(function () {

			Route::name('admin.')->group(function () {

				Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

				Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

				Route::get('/produtos', 'TesteController@teste')->name('produtos');

				Route::get('/', 'TesteController@teste')->name('dashboard');

			});

		});
	});
});

Route::get('/login', function () {
	return "Login";
})->name('login');

Route::view('/view', 'ola');

// Route::redirect('/redirect1', '/redirect2');

Route::get('redirect2', function () {
	return redirect()->route('url.name');
});

Route::get('/pedro', function () {
	return "URl Name";
})->name('url.name');

Route::get('/categorias/{flag}', function ($flag) {
	return "Produtos da categoria: {$flag}";
});

Route::get('/categoria/{flag}/post', function ($flag) {
	return "Posts da categoria: {$flag}";
});

Route::get('/', function () {
	return view('welcome');
});

Route::get('/ola', function () {
	return view('ola');
});

?>