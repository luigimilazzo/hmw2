<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});

Route::get('/login', 'LoginController@login'); //->name("login");
Route::post('/login', 'LoginController@checkLogin');
Route::get('/logout', 'LoginController@logout'); //->name("logout");

Route::get('/register',"RegisterController@index");
Route::post('/register',"RegisterController@create");
Route::get("register/username/{q}","RegisterController@checkUsername");
Route::get("register/email/{q}","RegisterController@checkEmail");
Route::get("register/CF/{q}","RegisterController@checkCF");
Route::get("preferiti","FavouriteController@verifica");
Route::get("preferiti/contenuti","FavouriteController@contenuti");
Route::get("inserisci","InsertController@verifica");
Route::get("inserisci/carceri","InsertController@carceri");
Route::get("inserisci/impiegati/{q}","InsertController@inserisci");
Route::get("celle","FindCelleController@verifica");
Route::get("celle/Ncelle/{q}","FindCelleController@trovaCelle");
Route::get("archivio","ArchivioController@verifica");
Route::get("archivio/detenuti/{q}","ArchivioController@detenuti");
Route::get("nyt","NYTController@articoli");
Route::get("spotify","SpotifyController@spotify");
Route::get("impieghi","ImpieghiController@verifica");
Route::get("impieghi/findComments/{q}","ImpieghiController@trovaTesto");
Route::get("impieghi/findEmployee","ImpieghiController@trovaImpieghi");
Route::get("impieghi/addComments/{q1}/{q2}/{q3}","ImpieghiController@addCommento");
Route::get("impieghi/deleteComments/{q1}/{q2}/{q3}","ImpieghiController@deleteCommento");

Route::get('/home', 'HomeController@index');
Route::get('/signup', function () {
    return view('signup');
});
