<?php

use Illuminate\Http\Request;
use App\Category;
use App\Role;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('test/{a}/{b}', function($a, $b){
    return $a.' : '.$b;
});
Route::get('category/{id}', function($id){
    $cat = Category::find($id);

    foreach($cat->products as $product){
        $product->brand;
        $product->product_amounts;
        $product->product_amount;

        $product->xx = 10+12;

    }
    
    return $cat;
});

Route::get('role', function(){
    $roles = Role::get();
    foreach($roles as $role){
        $role->users;
        foreach($role->users as $user ){
            $user->role;
            

            foreach($user->addresses as $address){
                $address->text =  $address->id == $user->default_address_id ? 'เป็นที่อยู่ปัจจุบัน' :'ไม่ใช่ที่อยู่ปัจจุบัน';               
            }
        }

    }
    return $roles;
});

Route::get('category/2', function(){
    $cat = Category::first();
    $cat->category_type;
    return $cat;
});


Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::post('email/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend');

    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
});
