	<?php

use Illuminate\Support\Facades\Route;





//back
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){

Route::get('girish', 'back\AuthController@login')->name('login'); 
Route::get('/reset/password','back\ResetPasswordController@showFrom')->name('reset.password');
Route::get('/reset/password/{token}','back\ResetPasswordController@resetPasswordShowFrom')->name('reset.password.ShowFrom');
Route::post('/reset/password/{token}','back\ResetPasswordController@resetPassword');
Route::post('/reset/password','back\ResetPasswordController@reset');

Route::post('girish', 'back\AuthController@loginPost')->name('login.post');

});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){

Route::get('panel', 'back\DashboardController@index')->name('dashboard');
//sertificate
Route::resource('sertificate','back\SertificateController');
Route::get('/deletesertificate/{id}','back\SertificateController@delete')->name('sertificate.delete');

//license
Route::resource('license','back\LicenseController');
Route::get('/deletelicense/{id}','back\LicenseController@delete')->name('license.delete');

//ourpartners
Route::resource('ourpartners','back\OurPartController');
Route::get('/deleteourpartners/{id}','back\OurPartController@delete')->name('ourpartners.delete');

//category_item

Route::resource('categoryItem','back\CategoryItemController');
Route::get('/switch','back\CategoryItemController@switch')->name('switch');
Route::get('/deleteItem/{id}','back\CategoryitemController@delete')->name('category.delete');


//product_category

Route::resource('category','back\Product_CategoryController');

//work
Route::resource('work','back\WorkController');

//work_item
Route::resource('work_Item','back\WorkItemController');
Route::get('/workdelete/{id}','back\WorkItemController@delete')->name('work.delete');

//contact
Route::resource('contact','back\ContactController');
Route::get('/deleteConatct/{id}','back\ContactController@delete')->name('contact.delete');



Route::get('cykysh', 'back\AuthController@logout')->name('logout');

});


//front
/*Route::redirect('/','/language/tm');*/
Route::get('/','front\HomeController@index')->name('home');

Route::get('/language/{lang}', 'front\HomeController@language')->name('language')->where('lang', '[a-z]+');

Route::get('/search/query','front\SearchController@search')->name('search');


Route::get('/partners','front\HomeController@partners')->name('partners');

Route::get('/product','front\HomeController@product')->name('product');
Route::get('/trade','front\HomeController@trade')->name('trade');

Route::get('/product/{category}', 'front\HomeController@category')->name('category');
Route::get('/product/{category}/{id}', 'front\HomeController@single')->name('single_page');

Route::get('/works','front\HomeController@works')->name('works');
Route::get('/works/{category}', 'front\HomeController@workcategory')->name('work.category');

Route::get('/contact','front\ContactController@contact')->name('contact');
Route::post('/contact','front\ContactController@sendMail')->name('contact.send');