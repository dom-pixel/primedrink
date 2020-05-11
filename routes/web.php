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

Route::get('/', 'Web\LandingPageController@home')->name('landingPage');
Route::post('/send/email', 'Web\LandingPageController@mail')->name('sendRegisterSubscription');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('/register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/restaurante/{id}', 'HomeController@show')->name('info');
Route::get('/partner/{id}', 'HomeController@showPartner')->name('infoPartner');
Route::get('/cadastro', 'Web\LandingPageController@form')->name('showForm');

Route::post('/registro', 'Web\LandingPageController@register')->name('sendRegister');
Route::get('/minhaprimedrink', 'Web\LandingPageController@socio')->name('socio');
Route::post('/minhaprimedrink/register', 'Web\LandingPageController@socioRegister')->name('socioRegister');
