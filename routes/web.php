<?php
 
Route::view('/', 'common/web/home');
Route::view('/home/{lang?}', 'common/web/home');
Route::view('/pages/how_it_works', 'common/web/how_it_works');
Route::view('/pages/features', 'common/web/features');
Route::get('/pages/blog', 'FrontBlogController@index');
Route::get('/pages/single_blog/{slug}', 'FrontBlogController@show');

Route::view('/pages/coming_soon', 'common/web/comingsoon');
Route::view('/pages/investment', 'common/web/investment');
Route::view('/user/signup', 'common/web/signup');
Route::view('/services/{lang?}', 'common/web/services');
Route::view('/delivery-contract', 'common/web/delivery-contract');
Route::view('/pages/financial', 'common/web/financial');
Route::view('/pages/safety', 'common/web/safety');
Route::view('/rental', 'common/web/rental');
Route::get('/rental/{id}/cars', function ($id) {
    return view('common/web/rentalcars', compact('id'));
});


Route::view('/city-update', 'common/web/citties_insert');

Route::get('/rental/car/{id}/info', function ($id) {
    return view('common/web/car-info', compact('id'));
});

Route::view('/pages/driver', 'common/web/driver');
Route::view('/pages/delivery_food', 'common/web/delivery_food');
Route::view('/pages/delivery_city', 'common/web/delivery_city');
;
Route::post('/sendemail','EmailController@sendmail');

Route::get('/pages/{type}', function ($type) {
    return view('common/web/cmspage', compact('type'));
});

Route::get('/access-denied', function () {
    abort('403');
});

Route::get('/drivers', function () {
    abort('503');
});

Route::get('/track/{id}', function ($id) {
    return view('common.admin.track', compact('id'));
});

Route::get('/limit', function () {
    return view('common.admin.limit.index');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::post('ckeditor/image_upload', 'CkeditorController@upload')->name('upload');