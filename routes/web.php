<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendSpainController;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

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
// })->name('frontend.index');

Route::group(['prefix' => 'dashboard'], function () {
    
    Voyager::routes();

    Route::get('{user}/profile', [backendController::class, 'profile'])->name('seller.profile');

    // reset password
    Route::get('forgot-password', [backendController::class, 'forgot_password'])->middleware('guest')->name('password.request');
    Route::post('forgot-password', [backendController::class, 'reset_password'])->middleware('guest')->name('password.reset');
    Route::post('update-password', [backendController::class, 'update_password'])->middleware('guest')->name('password.update');

});


Route::post('/checkout', [StripeController::class, 'index']);
Route::get('/checkout_success', [StripeController::class, 'success']);
Route::post('/checkout_fr', [StripeController::class, 'index_fr']);
Route::get('/checkout_success_fr', [StripeController::class, 'success_fr']);

Route::get('admin/apartments/{id}/duplicate', [VoyagerBaseController::class, 'duplicate'])->name('backend.apartments.duplicate')->middleware('auth');
Route::post('admin/apartments/{id}/duplicate', [VoyagerBaseController::class, 'duplicate_store'])->name('backend.apartments.duplicate.store')->middleware('auth');

Route::get('admin/posts/{id}/duplicate', [VoyagerBaseController::class, 'duplicate_post'])->name('backend.posts.duplicate')->middleware('auth');
Route::post('admin/posts/{id}/duplicate', [VoyagerBaseController::class, 'duplicate_store_post'])->name('backend.posts.duplicate.store')->middleware('auth');


Route::get('admin/packs/{id}/duplicate', [VoyagerBaseController::class, 'duplicate_pack'])->name('backend.packs.duplicate')->middleware('auth');
Route::post('admin/packs/{id}/duplicate', [VoyagerBaseController::class, 'duplicate_store_pack'])->name('backend.packs.duplicate.store')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Espaign

Route::get('/', [FrontendSpainController::class, 'index'])->name('frontend.sp.index');
Route::get('/Contacto', [FrontendSpainController::class, 'contact'])->name('frontend.sp.contact');
Route::post('/Contacto', [FrontendSpainController::class, 'contact_store'])->name('frontend.sp.contact.store');
Route::get('/Servicios', [FrontendSpainController::class, 'services'])->name('frontend.sp.services');
Route::get('/logements/{id}', [FrontendSpainController::class, 'appartement'])->name('frontend.sp.appartement');
Route::get('/logements/{id}/checkout', [FrontendSpainController::class, 'checkout'])->name('frontend.sp.checkout');
Route::get('/assurance', [FrontendSpainController::class, 'assurance'])->name('frontend.sp.assurance');
Route::post('/assurance', [FrontendSpainController::class, 'assurance_store'])->name('frontend.sp.assurance.store');
Route::get('/etudier', [FrontendSpainController::class, 'etudier'])->name('frontend.sp.etudier');
Route::get('/etudier_en', [FrontendSpainController::class, 'etudier_en'])->name('frontend.sp.etudier_en');
Route::get('/logements', [FrontendSpainController::class, 'logements'])->name('frontend.sp.logements');
Route::get('/nos_packs', [FrontendSpainController::class, 'nos_packs'])->name('frontend.sp.nos_packs');
Route::get('/quisommes_nous', [FrontendSpainController::class, 'quisommes_nous'])->name('frontend.sp.quisommes_nous');
Route::get('/preparation', [FrontendSpainController::class, 'preparation'])->name('frontend.sp.preparation');
Route::get('/programmes', [FrontendSpainController::class, 'programmes'])->name('frontend.sp.programmes');
Route::get('/service/{service}/{slug}', [FrontendSpainController::class, 'service'])->name('frontend.sp.service');
Route::get('/blog', [FrontendSpainController::class, 'blog'])->name('frontend.sp.blog');
Route::get('/about', [FrontendSpainController::class, 'about'])->name('frontend.sp.about');
Route::get('/post/{post}', [FrontendSpainController::class, 'post'])->name('frontend.sp.post');

Route::get('/nos_packs', [FrontendSpainController::class, 'nos_packs'])->name('frontend.sp.nos_packs');

Route::get('/politica_de_confidencialidad', [FrontendSpainController::class, 'politique'])->name('frontend.sp.politique');

Route::get('/terminos_y_condiciones', [FrontendSpainController::class, 'terms'])->name('frontend.sp.terms');


// mention legal
Route::get('/mencionar_legal', [FrontendSpainController::class, 'mencionar_legal'])->name('frontend.sp.mention');

// pages usign slug
Route::get('page/{slug}', [FrontendSpainController::class, 'page'])->name('frontend.sp.page');


Route::get('/residencia_para_emprendedores', [FrontendSpainController::class, 'residencia_para_emprendedores'])->name('frontend.sp.residencia_para_emprendedores');
Route::get('/arraigo_para_la_formacion', [FrontendSpainController::class, 'arraigo_para_la_formacion'])->name('frontend.sp.arraigo_para_la_formacion');
Route::get('/arraigo_familiar', [FrontendSpainController::class, 'arraigo_familiar'])->name('frontend.sp.arraigo_familiar');
Route::get('/arraigo_laboral', [FrontendSpainController::class, 'arraigo_laboral'])->name('frontend.sp.arraigo_laboral');
Route::get('/arraigo_social', [FrontendSpainController::class, 'arraigo_social'])->name('frontend.sp.arraigo_social');
Route::get('/residencia_no_lucrativa', [FrontendSpainController::class, 'residencia_no_lucrativa'])->name('frontend.sp.residencia_no_lucrativa');
Route::get('/nomada_digital', [FrontendSpainController::class, 'nomada_digital'])->name('frontend.sp.nomada_digital');
Route::get('/residencia_familiar_ue', [FrontendSpainController::class, 'residencia_familiar_ue'])->name('frontend.sp.residencia_familiar_ue');
Route::get('/reagrupacion_familiar', [FrontendSpainController::class, 'reagrupacion_familiar'])->name('frontend.sp.reagrupacion_familiar');
Route::get('/residencia_larga_duracion', [FrontendSpainController::class, 'residencia_larga_duracion'])->name('frontend.sp.residencia_larga_duracion');
Route::get('/recurso_contencioso_administrativo', [FrontendSpainController::class, 'recurso_contencioso_administrativo'])->name('frontend.sp.recurso_contencioso_administrativo');
Route::get('/recurso_administrativo', [FrontendSpainController::class, 'recurso_administrativo'])->name('frontend.sp.recurso_administrativo');
Route::get('/nacionalidad', [FrontendSpainController::class, 'nacionalidad'])->name('frontend.sp.nacionalidad');
Route::get('/golden_visa', [FrontendSpainController::class, 'golden_visa'])->name('frontend.sp.golden_visa');
Route::get('/visa_de_estudiante', [FrontendSpainController::class, 'visa_de_estudiante'])->name('frontend.sp.visa_de_estudiante');
Route::get('/renovación_de_la_tarjeta_de_residencia', [FrontendSpainController::class, 'renovación_de_la_tarjeta_de_residencia'])->name('frontend.sp.renovación_de_la_tarjeta_de_residencia');

// Route::get('checkout', [FrontendSpainController::class, 'checkout'])->name('frontend.sp.checkout');


// Francais
Route::group(['prefix' => 'fr'], function () {

    Route::post('checkout', [StripeController::class, 'index_fr']);

    Route::get('checkout_success', [StripeController::class, 'success_fr']);

    Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
    Route::get('/logements/{id}', [FrontendController::class, 'appartement'])->name('frontend.appartement');
    Route::get('/logements/{id}/Checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
    Route::get('/assurance', [FrontendController::class, 'assurance'])->name('frontend.assurance');
    Route::post('/assurance', [FrontendController::class, 'assurance_store'])->name('frontend.assurance.store');
    Route::get('/etudier', [FrontendController::class, 'etudier'])->name('frontend.etudier');
    Route::get('/etudier_en', [FrontendController::class, 'etudier_en'])->name('frontend.etudier_en');
    Route::get('/logements', [FrontendController::class, 'logements'])->name('frontend.logements');
    Route::get('/nos_packs', [FrontendController::class, 'nos_packs'])->name('frontend.nos_packs');
    Route::get('/quisommes_nous', [FrontendController::class, 'quisommes_nous'])->name('frontend.quisommes_nous');
    Route::get('/preparation', [FrontendController::class, 'preparation'])->name('frontend.preparation');
    Route::get('/programmes', [FrontendController::class, 'programmes'])->name('frontend.programmes');
    Route::get('/service/{service}', [FrontendController::class, 'service'])->name('frontend.service');
    Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
    Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
    Route::get('/post/{post}', [FrontendController::class, 'post'])->name('frontend.post');


    Route::get('/politique_de_confidentialite', [FrontendController::class, 'politique'])->name('frontend.politique');

    Route::get('/termes_et_conditions', [FrontendController::class, 'terms'])->name('frontend.terms');

    // mention legal
    Route::get('/mention_legale', [FrontendController::class, 'mention_legale'])->name('frontend.mention');

    Route::get('page/{slug}', [FrontendController::class, 'page'])->name('frontend.page');


});


Route::get('lang', function() {

    // first get current language 
    $current = Session::get('lang');

    if ( $current == 'en' ) {
        Session::forget('lang');
        Session::put('lang', 'es');
    }else {
        Session::forget('lang');
        Session::put('lang', 'en');
    }
    return back();
})->name('change.language');