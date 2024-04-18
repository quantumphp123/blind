<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// GET Route
Route::get('setblind',[UserController::class,'set_session'])->name('set-session');
Route::get('login',[UserController::class,'login']);
Route::get('/',[UserController::class,'homepage'])->name('homepage');
Route::get('google',[UserController::class,'redirect_to_google'])->name('redirect-to-google');
Route::get('google/callback',[UserController::class,'handle_google_callback'])->name('handle-google-callback');

// Protected Routes
Route::middleware(['webGuard'])->group(function() {
    
});

Route::get('shop',[UserController::class,'shop']);
Route::get('contact-us',[UserController::class,'contact_us'])->name('contact-us');
Route::get('about-us',[UserController::class,'about_us'])->name('about-us');
Route::get('account',[UserController::class,'account'])->name('account');
Route::get('account-personal-details',[UserController::class,'account_personal_details'])->name('account-personal-details');
Route::get('account-address',[UserController::class,'account_address'])->name('account-address');
Route::post('save-billing-address',[UserController::class,'save_billing_address'])->name('save-billing-address');
Route::post('save-shipping-address',[UserController::class,'save_shipping_address'])->name('save-shipping-address');
Route::post('edit-billing-address',[UserController::class,'edit_billing_address'])->name('edit-billing-address');
Route::post('edit-shipping-address',[UserController::class,'edit_shipping_address'])->name('edit-shipping-address');
Route::get('account-payment-method',[UserController::class,'account_payment_method'])->name('account-payment-method');
Route::get('cart',[UserController::class,'show_cart'])->name('show-cart');
Route::get('dec-product',[UserController::class,'dec_product'])->name('dec-product');
Route::get('inc-product',[UserController::class,'inc_product'])->name('inc-product');
Route::get('product/{id}',[UserController::class,'show_product'])->name('show-product');
Route::get('get-fabric-details',[UserController::class,'get_fabric_details'])->name('get-fabric-details');
Route::get('checkout',[UserController::class,'checkout'])->name('checkout');

Route::get('product-detail',[UserController::class,'product_detail']);

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::post('add-to-cart', [UserController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('remove-from-cart/{productId}', [UserController::class, 'remove_from_cart'])->name('remove-from-cart');
Route::post('change-personals', [UserController::class, 'change_personals'])->name('change-personals');
Route::post('signup', [UserController::class, 'signup'])->name('signup');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('place-order', [UserController::class, 'place_order'])->name('place-order');
Route::get('payment', [UserController::class, 'payment'])->name('payment');
Route::get('imdt', [UserController::class, 'imdt'])->name('imdt');







// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin-login', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-login');
// Route::get('generate-pdf', [App\Http\Controllers\AdminController::class, 'generatePDF'])->name('generate-pdf');
// Route::post('admin-login-post', [App\Http\Controllers\AdminController::class, 'login_post'])->name('admin-login-post');


// Route::group(['middleware'=>['adminBasicAuth']],function(){

// Route::get('admin-dashboard', [App\Http\Controllers\AdminController::class, 'admin_dashboard'])->name('admin-dashboard');
// Route::get('professional', [App\Http\Controllers\AdminController::class, 'professional'])->name('professional');
// Route::get('estimate', [App\Http\Controllers\AdminController::class, 'estimate'])->name('estimate');
// Route::get('add-estimate', [App\Http\Controllers\AdminController::class, 'add_estimate'])->name('add-estimate');


// Route::get('add-professional', [App\Http\Controllers\AdminController::class, 'add_professional'])->name('add-professional');
// Route::post('post-add-professional', [App\Http\Controllers\AdminController::class, 'post_add_professional'])->name('post-add-professional');
// Route::get('delete-professional/{id}', [App\Http\Controllers\AdminController::class, 'delete_professional'])->name('delete-professional');
// Route::get('view-professional/{id}', [App\Http\Controllers\AdminController::class, 'view_professional'])->name('view-professional');
// Route::post('change-status', [App\Http\Controllers\AdminController::class, 'change_status'])->name('change-status');
// Route::post('proff-update', [App\Http\Controllers\AdminController::class, 'proff_update'])->name('proff-update');
// Route::get('delete-skill/{id}/{userId}', [App\Http\Controllers\AdminController::class, 'delete_skill'])->name('delete-skill');
// Route::post('add-skill', [App\Http\Controllers\AdminController::class, 'add_skill'])->name('add-skill');
// Route::post('add-more-images', [App\Http\Controllers\AdminController::class, 'add_more_images'])->name('add-more-images');
// Route::get('delete-more-images/{id}', [App\Http\Controllers\AdminController::class, 'delete_more_images'])->name('delete-more-images');
// Route::post('update-proffessional-status', [App\Http\Controllers\AdminController::class, 'update_proffessional_status'])->name('update-proffessional-status');

// Route::get('ExportProfessional', [App\Http\Controllers\AdminController::class, 'ExportProfessional'])->name('ExportProfessional');


// Route::get('calendar', [App\Http\Controllers\AdminController::class, 'calendar'])->name('calendar');
// Route::get('add-event', [App\Http\Controllers\AdminController::class, 'addEvent'])->name('add-event');

// Route::get('events', [App\Http\Controllers\AdminController::class, 'events'])->name('events');
// Route::get('post-new-event', [App\Http\Controllers\AdminController::class, 'addNewEvent'])->name('post-new-event');
// Route::get('event-post', [App\Http\Controllers\AdminController::class, 'eventPost'])->name('event-post');
// Route::get('delete-event/{id}', [App\Http\Controllers\AdminController::class, 'deleteEvent'])->name('delete-event');

// Route::get('event-list', [App\Http\Controllers\AdminController::class, 'eventList'])->name('event-list');
// Route::any('add-new-event', [App\Http\Controllers\AdminController::class, 'postEvent'])->name('add-new-event');
// Route::get('delete-parent-event/{id}', [App\Http\Controllers\AdminController::class, 'deleteParentEvent'])->name('delete-parent-event');


// });

// Route::get('sendbasicemail', [App\Http\Controllers\AdminController::class, 'basic_email'])->name('sendbasicemail');
// Route::get('sendhtmlemail', [App\Http\Controllers\AdminController::class, 'html_email'])->name('sendhtmlemail');
// Route::get('sendattachmentemail', [App\Http\Controllers\AdminController::class, 'attachment_email'])->name('sendattachmentemail');


// Route::get('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');

