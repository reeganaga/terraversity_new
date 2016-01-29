<?php

$s = 'public.';
Route::get('/',         ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);
Route::get('/matematikadasar',         ['as' => $s . 'matematikadasar',   'uses' => 'PagesController@getMatematikadasar']);
Route::get('/matematikaipa',         ['as' => $s . 'matematikaipa',   'uses' => 'PagesController@getMatematikaipa']);
Route::get('/fisika',         ['as' => $s . 'ipa',   'uses' => 'PagesController@getFisika']);
Route::get('/kimia',         ['as' => $s . 'ipa',   'uses' => 'PagesController@getKimia']);
Route::get('/biologi',         ['as' => $s . 'ipa',   'uses' => 'PagesController@getBiologi']);
Route::get('/inggris',         ['as' => $s . 'inggris',   'uses' => 'PagesController@getInggris']);
Route::get('/indo',         ['as' => $s . 'indo',   'uses' => 'PagesController@getIndo']);
Route::get('/tpa',         ['as' => $s . 'indo',   'uses' => 'PagesController@getTpa']);

$a = 'auth.';
Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
    $a = 'admin.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
    $a = 'user.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);
});

Route::group(['middleware' => 'auth:all'], function()
{
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});





Route::get('admin/home', 'AdminController@getHome');
Route::get('user/materi', 'UserController@getHome');

Route::get('admin/kupon/buat', 'KuponController@create');
Route::post('user/kupon/subscribe', 'KuponController@subscribe');
Route::get('admin/subscribe/delete', 'KuponController@backToGuest');

Route::get('user/voucher', 'UserController@getVoucher');
