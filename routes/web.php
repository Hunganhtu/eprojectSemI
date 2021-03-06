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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user','namespace'=>'User'], function () {
    // home page
    Route::get('/','FontendController@index')->name('user.home');
    // login page
    Route::match(['get', 'post'], '/login', [
        'as'=>'user.login',
        'uses'=>Request::isMethod('get')?'FontendController@login':'FontendController@post_login'
    ]);
    // register page
    Route::match(['get', 'post'], '/register', [
        'as'=>'user.register',
        'uses'=>Request::isMethod('get')?'FontendController@register':'FontendController@post_register'
    ]);
    // changepass page
    Route::match(['get', 'post'], '/changepass', [
        'as'=>'user.changepass',
        'uses'=>Request::isMethod('get')?'FontendController@changepass':'FontendController@post_changepass'
    ]);
    // forget password
    Route::match(['get', 'post'], '/getpass', [
        'as'=>'user.getpass',
        'uses'=>Request::isMethod('get')?'FontendController@getpass':'FontendController@post_getpass'
    ]);
    // contact page
    Route::match(['get', 'post'], '/contact', [
        'as'=>'user.contact',
        'uses'=>Request::isMethod('get')?'FontendController@contact':'FontendController@post_contact'
    ]);
    // about-us page
    Route::get('about-us',function(){
        return view('font_end.about-us');
    })->name('user.about');

    // error page
    Route::get('error',function(){
        return view('font_end.error');
    })->name('user.error');

    // blog page
    Route::get('blog-grid',function(){
        return view('font_end.blog-grid');
    })->name('user.blog-grid');

    // blog page
    Route::get('blog-single',function(){
        return view('font_end.blog-single');
    })->name('user.blog-single');

    // blog page
    Route::get('blog',function(){
        return view('font_end.blog');
    })->name('user.blog');

    // cart page
    Route::get('cart',function(){
        return view('font_end.cart');
    })->name('user.cart');

     // checkout page
     Route::get('checkout',function(){
        return view('font_end.checkout');
    })->name('user.ckeckout');

     // left-sidebar page
     Route::get('left-sidebar',function(){
        return view('font_end.left-sidebar');
    })->name('user.left-sidebar');

     // right-sidebar page
     Route::get('right-sidebar',function(){
        return view('font_end.right-sidebar');
    })->name('user.right-sidebar');
    
     // shop page
     Route::get('shop',function(){
        return view('font_end.shop');
    })->name('user.shop');

    

     // product-layout-3 page
     Route::get('product-layout-3',function(){
        return view('font_end.product-layout3');
    })->name('user.product-layout-3');
    
});
// route admin
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/',function(){
        return view('back_end.master');
    });
// route cateory
   Route::group(['prefix'=>'category'],function(){
         Route::get('/','CategoryController@index')->name('category.index');
         Route::match(['GET' ,'POST'],'/create',[
            'as'=>'category.create',
            'uses'=>Request::isMethod('get')?'CategoryController@create':'CategoryController@store'
         ]);
         Route::get('/delete/{slug}','CategoryController@delete')->name('category.delete');

         Route::match(['GET' ,'POST'],'update/{slug}',[
            'as'=>'category.update',
            'uses'=>Request::isMethod('get')?'CategoryController@edit':'CategoryController@update'
         ]);

   });
   // route product
   Route::group(['prefix'=>'product'],function(){
         Route::get('/','ProductController@index')->name('product.index');
         Route::match(['GET' ,'POST'],'/create',[
            'as'=>'product.create',
            'uses'=>Request::isMethod('get')?'ProductController@create':'ProductController@store'
         ]);
         Route::get('/delete/{id}','ProductController@delete')->name('product.delete');

         Route::match(['GET' ,'POST'],'update/{slug}',[
            'as'=>'product.update',
            'uses'=>Request::isMethod('get')?'ProductController@edit':'ProductController@update'
         ]);
            Route::get('/detail/{slug}','ProductController@detail')->name('product.detail');
   });
});
