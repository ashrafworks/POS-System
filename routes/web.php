<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')
        ->name('home');

    Route::get('/sales-purchases/chart-data', 'HomeController@salesPurchasesChart')
        ->name('sales-purchases.chart');

    Route::get('/current-month/chart-data', 'HomeController@currentMonthChart')
        ->name('current-month.chart');

    Route::get('/payment-flow/chart-data', 'HomeController@paymentChart')
        ->name('payment-flow.chart');
});


use Illuminate\Http\Request;

// Route::get('/debug-can', function (Request $request) {
//     $user = auth()->user();
//     // dd($user->getFirstMediaUrl('avatars'));
//     dd($request->routeIs('/debug-can'));
//     // dd(\Spatie\Permission\Models\Permission::all()->pluck('name', 'guard_name'));
// // true
//     //  dd($role->hasPermissionTo('dashboard_home'))

// });

Route::get('/debug-can', function (Request $request) {
    dd($request->routeIs('debug.can'));
})->name('debug.can');
