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

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')
    ->name('password.reset');

Route::get('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')
    ->name('password.request');

//Route::get('email-verification/error', 'EmailVerificationController@getVerificationError')
//    ->name('email-verification.error');
//
//Route::get('email-verification/check/{token}', 'EmailVerificationController@getVerification')
//    ->name('email-verification.check');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin\\'],
    function () {
        Route::group(['middleware' => 'can:admin'], function () {
            Route::name('logout')->post('logout', 'Auth\LoginController@logout');
            Route::get('dashboard', function () {
                return view('admin.dashboard');
            });

            Route::resource('users', 'UsersController');

        });
    });

Route::get('login', 'Admin\Auth\LoginController@showLoginForm')
    ->name('login');

Route::post('login', 'Admin\Auth\LoginController@login');


//Efetuar login via força bruta, passando um ID fixo.
Route::get('/force-login', function () {
    \Auth::loginUsingId(1);
});