<?php

Route::get('/ride/{id?}/transport', function ($id = 0) {

    return view('transport.user.ride.home', compact('id'));
});
Route::view('/trips', 'transport.user.ride.trips');


Route::view('rental/dashboard', 'transport.user.ride.rental-dashboard');
Route::view('rental/listing', 'transport.user.ride.rental-listing');
Route::view('rental/finance', 'transport.user.ride.rental-finance');
Route::view('rental/history', 'transport.user.ride.rental-history');
Route::view('rental/messages', 'transport.user.ride.inbox');

Route::get('/rental/booking/{id?}', function ($id = 1) {
    return view('transport.user.ride.rental-booking', compact('id'));
});
Route::get('rental/car/{id}/info', function ($id = 1) {
    return view('transport.user.ride.rental-info', compact('id'));
});

Route::get('rental/car/{id}/book', function ($id = 1) {
    return view('transport.user.ride.booking', compact('id'));
});
