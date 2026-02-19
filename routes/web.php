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

Route::group(['middleware' => ['frameguard']], function () {
    Route::get('/', 'PagesController@index');
    Route::get('/about', 'PagesController@about');
    Route::get('/career', 'PagesController@career');
    Route::get('/contact', 'PagesController@contact');
    Route::get('/corporate-governance', 'PagesController@corporategovernance');
    Route::get('/shareholders', 'PagesController@shareholders');
    Route::get('/investor-relations', 'PagesController@investorrelations');
    Route::get('/corporate-action', 'PagesController@corporateaction');
    Route::get('/media', 'PagesController@media');
    Route::get('/discover-identify', 'PagesController@discoverIdentify');
    Route::get('/acquire-engage', 'PagesController@acquireEngage');
    Route::get('/re-engage-transact', 'PagesController@reengageTransact');
    Route::get('/about-us-india', 'PagesController@aboutusIndia');
    Route::get('/esg-affle', 'PagesController@esgaffle');
    Route::get('/annual-reports-agm-information', 'PagesController@annualReportsAGMInformation');
    Route::get('/blogs', 'PagesController@blogs');
    Route::get('/blog-detail', 'PagesController@blogdetail');
    Route::get('/author', 'PagesController@author');
    Route::get('/thankyou', 'PagesController@thankyou');
    Route::get('/digital-transformation', 'PagesController@digitalTransformation');
});