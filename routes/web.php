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

// ****************** user side menu href link redirect ********************** //
Route::get('/', 'Uscontroller@home_page');
Route::get('/contact', 'Uscontroller@contact_page');
Route::get('/service', 'Uscontroller@service_page');
Route::get('/portfolio', 'Uscontroller@portfolio_page');
Route::get('/blog', 'Uscontroller@blog_page');
Route::get('/about', 'Uscontroller@about_page');
Route::get('/gallery', 'Uscontroller@gallery_page');

// **************** company select data to show in update page *************** //
Route::get('/companyselupd', [
    'uses' => 'companycontroller@companyselectforupdate',
    'as' => 'company.selupd',

]);
// ************** company update data from update page ************* //
Route::post('/companyupdate', [
    'uses' => 'companycontroller@companyupdate',
    'as' => 'company.update',

]);
// **************** company list data show for display ************ //
Route::get('/companylist', 'companycontroller@companylistdatashowfordisplay');

