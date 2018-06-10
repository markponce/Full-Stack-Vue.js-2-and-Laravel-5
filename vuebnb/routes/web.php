<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
  return view('app');
    // echo 123;
});

// use App\Listing;

// Route::get('/listing/{listing}', function (Listing $listing) {
//   // echo $listing->id // will equal 5 for route /listing/5
// 	$model = $listing->toArray();
// 	return view('app', [ 'model' => $model ]);
// });

Route::get('/listing/{listing}', 'ListingController@get_listing_web');
