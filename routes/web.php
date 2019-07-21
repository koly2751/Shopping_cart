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

  if(Auth::check()){

 	return redirect('/admin/dashboard');
 }
 else{
 	return redirect()->route('login');
 }

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/dashboard',[

	'middleware'=>'auth',

	'uses'=>'DashboardController@index',
	'as'=>'dashboard'


]);

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin', 'middleware'=>'auth'] ,

	function(){

		
		route::resource('product','ProductController');
		route::get('product/delete/{id}','ProductController@destroy')->name('product.delete');

		route::resource('purchase','PurchaseController');
		route::resource('stock','StockController');
		route::resource('account','AccountController');
		route::resource('sale','SaleController');
		route::get('/report', 'ReportController@search')->name('report.search');
	    route::post('/report/show', 'ReportController@show')->name('report.show');


	});
