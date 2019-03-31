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

Route::get('/', 'BaseController@getWelcomePage');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('test', function () {
    return view('testing');
});

Route::get('summernote', function () {
    return view('summernote-test');
});

Route::auth();

Route::post('testing', 'CampaignController@store');

Route::get('home', 'HomeController@index');



Route::group(['middleware' => 'auth.register'], function () {
    Route::get('start-a-campaign', 'CampaignController@create');
    Route::post('campaigns', 'CampaignController@store');
    // Route::get('start-a-campaign', 'testController@create');
    // Route::post('campaigns', 'testController@store');
    Route::get('campaigns', 'CampaignController@view');
    Route::get('campaignDetails', function () { return view('campaigns.campaign-details');});
});

Route::group(['prefix' => 'backend'], function () {
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'Admin\DashboardController@index');
        Route::get('created-campaign', 'Admin\DashboardController@getCreatedCampaign');
        Route::get('ended-campaign', 'Admin\DashboardController@getEndedCampaign');
        Route::post('delete-campaign', 'Admin\DashboardController@deleteCampaign');
        Route::post('approve-campaign', 'Admin\DashboardController@approvedCampaign');
        Route::get('view-approved', 'Admin\DashboardController@showApproved');
        Route::get('view-deleted', 'Admin\DashboardController@showDeleted');
    });

    // Authentication Routes...
    $this->get('login', 'Admin\Auth\AuthController@showLoginForm');
    $this->post('login', 'Admin\Auth\AuthController@login');
    $this->get('logout', 'Admin\Auth\AuthController@logout');

    // Registration Routes...
    $this->get('register', 'Admin\Auth\AuthController@showRegistrationForm');
    $this->post('register', 'Admin\Auth\AuthController@register');

    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'Admin\Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Admin\Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Admin\Auth\PasswordController@reset');
});
