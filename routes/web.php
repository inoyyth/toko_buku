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

// Route::get('/', function () {
//     return view('pages.dashboard.main');
// });

Route::get('/', [
    'uses' => 'DashboardController@index'
 ]);

Route::get('/index.html', [
'uses' => 'DashboardController@index'
]);

Route::get('/about.html', function () {
    return view('pages.about.main');
});

Route::get('/category.html', function () {
    return view('pages.category.main');
});

Route::get('/search/?keryword={keyword?}.html', function ($keyword = null) {
    return view('pages.search.main');
});

Route::get('/detail-{id}', function ($id) {
    return view('pages.contact.main',['id' => $id]);
})->where(['id'=> '[0-9]+']);

Route::get('/master-area.html', [
    'uses' => 'DashboardController@getArea'
 ]);