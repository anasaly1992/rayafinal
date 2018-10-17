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

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();
// // Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'is.admin'], function () {
    Route::get('/admin', 'admin\AdminController@index');

   
    // Contact
    Route::resource('admin/contacts', 'admin\ContactController');
 
  
   
    
 
 Route::resource('admin/opinions', 'admin\OpinionController');
 //users
 Route::resource('admin/users','admin\UserController');
  //currencies
  Route::resource('admin/currencies','admin\CurrencyController');
  //slideshow
  Route::resource('admin/slideshow','admin\SlideShowController');
  //Country
  Route::resource('admin/countries','admin\CountryController');
  //category
  Route::resource('admin/categories','admin\CategoryController');
  //slideshow
  Route::resource('admin/slideshows','admin\SlideshowController');
  //products
  Route::resource('admin/products','admin\ProductController');
//feature
  Route::resource('admin/features','admin\FeatureController');
    //feature details
    Route::resource('admin/featuredetails', 'admin\FeatureDetailsController');
    //product features
    Route::resource('admin/productfeature', 'admin\FeatureProductController');
    // orderdetails
    Route::resource('admin/orders', 'admin\OrderController');

    //Coupon
    Route::resource('admin/coupons', 'admin\CouponController');
//service
    Route::resource('admin/services', 'admin\ServiceController');
//setting
    Route::resource('admin/settings', 'admin\SettingController');
    //categories
    Route::resource('admin/categories', 'admin\CategoryController');
    //branches
    Route::resource('admin/branches', 'admin\BranchController');

    Route::resource('admin/pages', 'admin\PageController');

    Route::resource('admin/productfeatures', 'admin\FeatureProductController');
    //images
    Route::resource('image', 'ImageController');
});
//about
Route::get('about', 'PageController@about')->name('about');
Route::resource('product_details', 'frontend\ProductDetailsController');
//services
Route::get('services', 'frontend\ServicesController@index');

//products
Route::get('products', 'frontend\ProductController@index');

//service details
Route::get('servicedetails/{$slug}', 'frontend\ServicesController@details');
//contactcontact_email
Route::post('contact', 'frontend\ContactController@contact_email')->name('contact-us');
//contact
Route::get('contact', 'frontend\ContactController@index')->name('contact');
// product
Route::get('products', 'frontend\ProductController@index')->name('products');
//cart
Route::post('addtocart', 'frontend\ProductController@addToCart')->name('addtocart');
//Remove from cart
Route::post('removefromcart', 'frontend\ProductController@removeFromCart')->name('removefromcart');
// //charge and terms_conditions
// Route::get('policy', 'PageController@policy')->name('policy');
// //terms_conditionsshipping
// Route::get('terms', 'PageController@term')->name('terms');
// //shipping
Route::get('shipping', 'PageController@shipping')->name('shipping');
//shop
Route::get('shop', 'PageController@shop')->name('shop');
//product-page
//  Route::get('product_page','PageController@product_page')->name('product_page');
//wish_listaccount
Route::get('wishlist', 'PageController@wishlist')->name('wishlist');
//account
Route::get('account', 'PageController@account')->name('account');

//checkout
Route::get('checkout', 'PageController@checkout')->name('checkout');
//order_overviewpayment
Route::get('order_overview', 'PageController@order_overview')->name('order_overview');
//paymentorder_complete
Route::get('payment', 'PageController@payment')->name('payment');
//order_complete
Route::get('order_complete', 'PageController@order_complete')->name('order_complete');

//Pages '/blogs/{slug}', ['as'=>'blog.by.slug', 'uses'=> 'CmsController@show']
Route::get('page/{slug}', ['as'=>'page.by.slug', 'uses'=>'PageController@show']);
