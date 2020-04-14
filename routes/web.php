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
use App\admin;
Route::get('/', function () {
    return view('Login');
})->name('login');
Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/admin/add_product',function()
{
    return view('admin/Add_Product');
});
Route::get('/admin/edit_product',function()
{
    return view('admin/Edit_Product');
});
Route::get('/admin/add_category',function()
{
    return view('admin/Add_Category');
});
Route::get('/admin/show_category',function()
{
    return view('admin.show_Category');
});
Route::get('/admin/edit_category',function()
{
    return view('admin/Edit_Category');
});
Route::get('/admin/admin',function()
{
    return view('admin/index');
});
Route::get('/admin/show_product',function()
{
    return view('admin/Show_Product');
});
Route::get('/admin/show_customer',function()
{
    return view('admin/Show_Customer');
});
Route::get('/user/cloths',function()
{
    $arr=["image\img-1.jpg","super Asd","this description of close",100];
    return view('user/Show_Product',compact('arr'));
});
Route::get('/user/laptop',function()
{
    $arr=["image\computer.jpg","dell laptop core i9","this description of close",200];
    return view('user/Show_Product',compact('arr'));
});
Route::get('/user/phone',function()
{
    $arr=["image\phone.png","Apple phone","this description Mobile",200];
    return view('user/Show_Product',compact('arr'));
});
Route::get('/user/card',function()
{
    return view('card/card',compact('arr'));
});

Route::get('/user', function () {
    return view('user.index');
    })->name('user.index');

Route::get('/profile/overview', function () {
    return view('userProfile.index');
})->name('profile');
Route::get('profile/edit',function (){
    return view('userProfile.EditProfile');
})->name('edit');
Route::get('profile/history', function (){
    return view('userProfile.history');
})->name('hist');


