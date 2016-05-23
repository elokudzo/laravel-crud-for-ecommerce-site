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


Route::bind('suppliers',function($supplier_uniq_id,$route){

return App\Supplier::whereSupplier_uniq_id($supplier_uniq_id)->first();

});


 Route::get('/suppliers/export', array('as'=>'suppliers.export','uses'=>'SuppliersController@export'));


Route::get('/',function(){

return view('index');
});
 Route::resource('suppliers', 'SuppliersController');

