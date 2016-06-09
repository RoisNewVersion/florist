<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//protect from csrf
Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::filter('csrf', function() {
	$token = Request::ajax() ? Request::header('X-CSRF-Token') : Input::get('_token');
	if (Session::token() != $token){
		throw new Illuminate\Session\TokenMismatchException;
	}
});
/*protect from csrf*/

// Route::get('/', function () {
// 	return view('user.homeuser');
// });

Route::get('/', ['uses'=>'homeCtrl@homeuser', 'as'=>'homeuser']);
// utk login
//auth
Route::get('login', ['uses'=>'AuthCtrl@getLogin', 'as'=>'login']);
Route::post('login', 'AuthCtrl@postLogin');
Route::get('logout', ['uses'=>'AuthCtrl@getLogout', 'as'=>'logout']);
// utk register
Route::get('register', ['uses'=>'AuthCtrl@getRegister', 'as'=>'register']);
Route::post('register', ['uses'=>'AuthCtrl@postRegister', 'as'=>'register']);


Route::group(['middleware' => 'auth'], function() {

	/*=========== url ini utk admin ==============*/
	Route::group(['prefix' => 'superuser'], function() {
		Route::get('/', ['uses'=>'homeCtrl@index', 'as'=>'home']);
	    // utk produk
		Route::resource('produk', 'produkCtrl');
	    // utk datapemesanan
		Route::resource('pemesanan', 'pemesananCtrl');
	    // utk customer
		Route::resource('customer', 'customerCtrl');
	});


	/*======ini utk user =======*/


});
// Route::get('/superuser', function () {
// 	return view('layout.layoutadmin.contoh');
// });
