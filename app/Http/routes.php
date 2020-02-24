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

Route::get('test', function () {
    return view('testing');
});

Route::get('dual-login', function () {
    return view('dual-login');
});

Route::get('wb', 'BaseController@getWelcomePageB');

Route::get('summernote', function () {
    return view('summernote-test');
});

Route::auth();

Route::post('testing', 'CampaignController@store');

Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth.register'], function () {
    Route::get('start-a-campaign', 'CampaignController@create');
    Route::post('campaigns', 'CampaignController@store');
    Route::post('campaign-details', 'CampaignController@getCampaignDetails');
    // Route::get('start-a-campaign', 'testController@create');
    // Route::post('campaigns', 'testController@store');
    Route::get('campaigns', 'CampaignController@view');
    Route::get('campaignDetails', function () { return view('campaigns.campaign-details');});
    Route::post('update-profile', 'UserController@updateUser');
    Route::get('edit-profile', 'UserController@getUserData');
    Route::get('user-profile', 'UserController@index');
    Route::get('delete-profile', 'UserController@deleteUser');
    // PayPal
    Route::get('homePay', 'PaymentController@index');
    // route for processing payment
    Route::post('paypal', 'PaymentController@payWithpaypal');
    // route for check status of the payment
    Route::get('status', 'PaymentController@getPaymentStatus');
    // Route::get('donate', function () { return view('campaigns.donate');});
    Route::post('donate', 'CampaignController@getCampaign');
    Route::post('donation', 'CampaignController@getDonationData');


});

Route::group(['prefix' => 'backend'], function () {
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'Admin\DashboardController@index');
        Route::get('created-campaign', 'Admin\DashboardController@getCreatedCampaign');

        Route::post('app-campaign-details', 'Admin\DashboardController@approvedCampaignDetails');
        Route::post('del-campaign-details', 'Admin\DashboardController@deletedCampaignDetails');
        Route::post('end-campaign-details', 'Admin\DashboardController@endedCampaignDetails');


        Route::get('ended-campaign', 'Admin\DashboardController@getEndedCampaign');
        Route::post('edit-campaign', 'Admin\DashboardController@getCampaignData');
        Route::post('update-campaign', 'Admin\DashboardController@updateCampaignData');
        Route::post('delete-campaign', 'Admin\DashboardController@deleteCampaign');
        Route::post('approve-campaign', 'Admin\DashboardController@approvedCampaign');
        Route::get('view-approved', 'Admin\DashboardController@showApproved');
        Route::get('view-ended', 'Admin\DashboardController@getEndedCampaign');
        Route::get('view-deleted', 'Admin\DashboardController@showDeleted');
        Route::get('notify-user', 'MailController@MailUser');

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
