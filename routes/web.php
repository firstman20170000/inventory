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

use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/items/{id}', 'InventoryController@update');
Route::resource('/items', 'InventoryController');
Route::get('/create-item', 'InventoryController@create');
Route::get('/get-items', 'InventoryController@get');
Route::post('/delete/file','InventoryController@deletefile');
Route::get('/view-items/{id}', 'InventoryController@show');
Route::get('/default-items', 'InventoryController@default');
Route::get('/delete/{id?}', 'InventoryController@destroy');
Route::post('/items_modify', 'InventoryRecordController@store');
Route::get('/purchase-order/item/{id}','PurchaseController@createpurchaseorder')->name('purchaseorder');
Route::post('/create/po','PurchaseController@createpo')->name('user.createpo');
Route::get('/purchase-order/view/table','PurchaseController@viewtable')->name('viewpo');
Route::get('/get-items/purchase','PurchaseController@getpurchase');
Route::get('/view/po/{id}','PurchaseController@viewpo');
Route::get('/edit/po/{id}','PurchaseController@editpo')->name('editpo');
Route::post('/change/po','PurchaseController@changepo')->name('user.changepo');
Route::post('/user/post/note','PurchaseController@postnote')->name('user.postnote');
Route::get('/bundles','BundleController@viewbundle');
Route::get('/get-bundles','BundleController@getbundle');
Route::get('/bundle/create','BundleController@createbundle');
Route::post('/bundles','BundleController@postbundle');
Route::get('/view/bundle/{id}','BundleController@vieweachbundle');
Route::get('/edit/bundle/{id}','BundleController@editbundle');
Route::post('/post/bundle/note','BundleController@postnote');
Route::post('/delete/bundle/file','BundleController@deletebundlefile');
Route::post('/manu/bundle','BundleController@manubundle');
Route::post('/post/bundle-items','BundleController@updatebundle_items');
Route::post('/delete/bundle-items','BundleController@deletebundle_items');
Route::post('/package/bundle','BundleController@postpackage');
Route::post('/delete/pack-items','BundleController@deletepack');
Route::post('/update/bundle','BundleController@updatebundle');
Route::get('/create/stock-order/{id}','StockController@createstock');
Route::post('/user/create/stock-order','StockController@poststockorder')->name('user.create.stockorder');
Route::get('/view/stock-order/table','StockController@viewstocktable');
Route::get('/get-stocks','StockController@getstock');
Route::get('/view/stock/{id}','StockController@viewstock');
Route::get('/edit/stock/{id}','StockController@editstock');
Route::post('/post/user/note','StockController@postnote')->name('user.stock.note');
Route::post('/user/change/stock','StockController@changestock')->name('user.change.stock');
Route::get('/create/shipping/{id}','ShippingController@createship');
Route::get('/view/shipping-table','ShippingController@viewtable');
Route::get('/get-shipping','ShippingController@shipdata');
Route::get('/edit/shipping/{id}','ShippingController@editshipplan');
Route::get('/view/shipping/{id}','ShippingController@viewshippaln');
Route::get('/view/ship-type','ShippingController@viewtype');
Route::get('/get-shiptype','ShippingController@getshippingmethodtype'); 
Route::get('/shiptype/create','ShippingController@createshippingmethodtype');
Route::post('/create/shipmethod','ShippingController@createshipmethod');
Route::get('/edit/ship-type/{id}','ShippingController@editshipmethod');
Route::post('/update/shipmethod','ShippingController@updateshipmethod');
Route::post('/delete/methodid','ShippingController@deletemethod');
Route::post('/check/validation','ShippingController@checkvalidation');
Route::post('/FSOshipping','ShippingController@createfsoshipping');
Route::post('/edit/check/validation','ShippingController@checkvalidatship');
Route::post('/edit/FSOshipping','ShippingController@editFsoshipping');
Route::post('/post/shipment/note','ShippingController@submitnote');
Route::get('/create/dropship','DropzoneController@createdropship');
Route::get('/edit/dropship/{id}','DropzoneController@editdropship');
Route::get('/view/dropship/{id}','DropzoneController@viewdropship');
Route::get('/view/dropship-table','DropzoneController@dropshiptable');
Route::get('/get-dropshipping','DropzoneController@getdropshippingdata');
Route::post('/check/dropship/validation','DropzoneController@checkvalidation');
Route::post('/DSOshipping','DropzoneController@postshipping');
Route::post('/check/edit/dropship/validation','DropzoneController@editvalidation');
Route::post('/update/DSOshipping','DropzoneController@updatedroporder');
Route::post('/post/dropship/note','DropzoneController@postnote');
Route::get('/view/inovice/table','InvoiceController@viewinvoice');
Route::get('/view/inovice/{id}','InvoiceController@getinvoice');
Route::get('/get-inovice','InvoiceController@getinvoicedata');
Route::post('/update/invoice/status','InvoiceController@updateinvoice');
Route::get('/view/user-table','UserController@getviewusertable');
Route::get('/get-userdata','UserController@getuserdata');
Route::get('/create/user','UserController@createuser');
Route::post('/create/new/user','UserController@createnewuser');
Route::get('/edit/user/{id}','UserController@edituser');
Route::post('/update/user/info','UserController@updateuserinfo');
Route::get('/user/delete/{id}','UserController@deleteuser');
Route::post('/user/create/item-note','InventoryController@postitemnote');
