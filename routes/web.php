<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontendController@home')->name(HOME);
Route::get('detail/{id}/{slug}', 'FrontendController@getDetail')->name(PRODUCT_DETAIL);
Route::post('detail/{id}/{slug}', 'FrontendController@postComment')->name(PRODUCT_DETAIL_STORE);
Route::get('category/{id}/{slug}', 'FrontendController@getCategory');
Route::get('search', 'FrontendController@getSearch');
Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}', 'CartController@getAddCart')->name(CART_ADD);
    Route::get('show', 'CartController@getShowCart')->name(CART_SHOW);
    Route::get('delete/{id}', 'CartController@getDeleteCart')->name(CART_DELETE);
    Route::get('update', 'CartController@getUpdateCart')->name(CART_ADD);
    Route::post('show', 'CartController@postComplete')->name(CART_STORE);
});
Route::get('complete', 'CartController@getComplete');

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });
    Route::get('logout', 'HomeController@getLogout');
    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
        Route::get('home', 'HomeController@getHome');
        Route::group(['prefix' => 'user', 'middleware' => 'CheckLogedOut'], function () {
            Route::get('/', 'UserController@getUser')->name(USER_LIST);
            Route::get('add', 'UserController@getAddUser')->name(USER_ADD);
            Route::post('add', 'UserController@postAddUser')->name(USER_ADD_STORE);
            Route::get('edit/{id}', 'UserController@getEditUser')->name(USER_EDIT);
            Route::post('edit/{id}', 'UserController@postEditUser')->name(USER_EDIT_STORE);
            Route::get('delete/{id}', 'UserController@getDeleteUser')->name(USER_DELETE);
        });
        Route::group(['prefix' => 'category', 'middleware' => 'CheckLogedOut'], function () {
            Route::get('/', 'CategoryController@getCategory')->name(CATEGORY_LIST);
            Route::post('/', 'CategoryController@postCategory')->name(CATEGORY_ADD_STORE);
            Route::get('edit/{id}', 'CategoryController@getEditCategory')->name(CATEGORY_ADD);
            Route::post('edit/{id}', 'CategoryController@postEditCategory')->name(CATEGORY_ADD_STORE);
            Route::get('delete/{id}', 'CategoryController@getDeleteCategory')->name(CATEGORY_DELETE);
        });
        Route::group(['prefix' => 'product', 'middleware' => 'CheckLogedOut'], function () {
            Route::get('/', 'ProductController@getProduct')->name(PRODUCT_LIST);;
            Route::get('add', 'ProductController@getAddProduct')->name(PRODUCT_ADD);;
            Route::post('add', 'ProductController@postAddProduct')->name(PRODUCT_ADD_STORE);;
            Route::get('edit/{id}', 'ProductController@getEditProduct')->name(PRODUCT_EDIT);;
            Route::post('edit/{id}', 'ProductController@postEditProduct')->name(PRODUCT_EDIT_STORE);;
            Route::get('delete/{id}', 'ProductController@getDeleteProduct')->name(PRODUCT_DELETE);;
        });
    });
});
