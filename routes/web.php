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

Route::get('home', function () {
    return view('pages.welcome');
}) -> name('home');

Route::group(['prefix' => 'YouyouBeauty'], function(){
    Route::get('services', function(){return view('pages.service');}) -> name('services');
    Route::get('produits', function(){return view('pages.produit');}) -> name('produits');
    Route::get('contact', function(){return view('pages.contact');}) -> name('contact');
    Route::get('about', function(){return view('pages.about');}) -> name('about');
});
