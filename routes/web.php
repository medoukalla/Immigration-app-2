<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendSpanishController;
use App\Http\Controllers\FrontendEnglishController;

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
Route::post('/checkout_en', [StripeController::class, 'index_en']);
Route::get('/checkout_success_en', [StripeController::class, 'success_en']);

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

Route::get('/', [FrontendSpanishController::class, 'index'])->name('frontend.sp.index');
Route::get('/Contacto', [FrontendSpanishController::class, 'contact'])->name('frontend.sp.contact');
Route::post('/Contacto', [FrontendSpanishController::class, 'contact_store'])->name('frontend.sp.contact.store');
Route::get('/Servicios', [FrontendSpanishController::class, 'services'])->name('frontend.sp.services');
Route::get('/logements/{id}', [FrontendSpanishController::class, 'appartement'])->name('frontend.sp.appartement');
Route::get('/logements/{id}/checkout', [FrontendSpanishController::class, 'checkout'])->name('frontend.sp.checkout');
Route::get('/assurance', [FrontendSpanishController::class, 'assurance'])->name('frontend.sp.assurance');
Route::post('/assurance', [FrontendSpanishController::class, 'assurance_store'])->name('frontend.sp.assurance.store');
Route::get('/etudier', [FrontendSpanishController::class, 'etudier'])->name('frontend.sp.etudier');
Route::get('/etudier_en', [FrontendSpanishController::class, 'etudier_en'])->name('frontend.sp.etudier_en');
Route::get('/logements', [FrontendSpanishController::class, 'logements'])->name('frontend.sp.logements');
Route::get('/nos_packs', [FrontendSpanishController::class, 'nos_packs'])->name('frontend.sp.nos_packs');
Route::get('/quisommes_nous', [FrontendSpanishController::class, 'quisommes_nous'])->name('frontend.sp.quisommes_nous');
Route::get('/preparation', [FrontendSpanishController::class, 'preparation'])->name('frontend.sp.preparation');
Route::get('/programmes', [FrontendSpanishController::class, 'programmes'])->name('frontend.sp.programmes');
Route::get('/service/{service}/{slug}', [FrontendSpanishController::class, 'service'])->name('frontend.sp.service');
Route::get('/blog', [FrontendSpanishController::class, 'blog'])->name('frontend.sp.blog');
Route::get('/about', [FrontendSpanishController::class, 'about'])->name('frontend.sp.about');
Route::get('/post/{post}', [FrontendSpanishController::class, 'post'])->name('frontend.sp.post');

Route::get('/nos_packs', [FrontendSpanishController::class, 'nos_packs'])->name('frontend.sp.nos_packs');

Route::get('/politica_de_confidencialidad', [FrontendSpanishController::class, 'politique'])->name('frontend.sp.politique');

Route::get('/terminos_y_condiciones', [FrontendSpanishController::class, 'terms'])->name('frontend.sp.terms');


// mention legal
Route::get('/mencionar_legal', [FrontendSpanishController::class, 'mencionar_legal'])->name('frontend.sp.mention');

// pages usign slug
Route::get('page/{slug}', [FrontendSpanishController::class, 'page'])->name('frontend.sp.page');


Route::get('/residencia_para_emprendedores', [FrontendSpanishController::class, 'residencia_para_emprendedores'])->name('frontend.sp.residencia_para_emprendedores');
Route::get('/arraigo_para_la_formacion', [FrontendSpanishController::class, 'arraigo_para_la_formacion'])->name('frontend.sp.arraigo_para_la_formacion');
Route::get('/arraigo_familiar', [FrontendSpanishController::class, 'arraigo_familiar'])->name('frontend.sp.arraigo_familiar');
Route::get('/arraigo_laboral', [FrontendSpanishController::class, 'arraigo_laboral'])->name('frontend.sp.arraigo_laboral');
Route::get('/arraigo_social', [FrontendSpanishController::class, 'arraigo_social'])->name('frontend.sp.arraigo_social');
Route::get('/residencia_no_lucrativa', [FrontendSpanishController::class, 'residencia_no_lucrativa'])->name('frontend.sp.residencia_no_lucrativa');
Route::get('/nomada_digital', [FrontendSpanishController::class, 'nomada_digital'])->name('frontend.sp.nomada_digital');
Route::get('/residencia_familiar_ue', [FrontendSpanishController::class, 'residencia_familiar_ue'])->name('frontend.sp.residencia_familiar_ue');
Route::get('/reagrupacion_familiar', [FrontendSpanishController::class, 'reagrupacion_familiar'])->name('frontend.sp.reagrupacion_familiar');
Route::get('/residencia_larga_duracion', [FrontendSpanishController::class, 'residencia_larga_duracion'])->name('frontend.sp.residencia_larga_duracion');
Route::get('/recurso_contencioso_administrativo', [FrontendSpanishController::class, 'recurso_contencioso_administrativo'])->name('frontend.sp.recurso_contencioso_administrativo');
Route::get('/recurso_administrativo', [FrontendSpanishController::class, 'recurso_administrativo'])->name('frontend.sp.recurso_administrativo');
Route::get('/nacionalidad', [FrontendSpanishController::class, 'nacionalidad'])->name('frontend.sp.nacionalidad');
Route::get('/golden_visa', [FrontendSpanishController::class, 'golden_visa'])->name('frontend.sp.golden_visa');
Route::get('/visa_de_estudiante', [FrontendSpanishController::class, 'visa_de_estudiante'])->name('frontend.sp.visa_de_estudiante');
Route::get('/renovación_de_la_tarjeta_de_residencia', [FrontendSpanishController::class, 'renovación_de_la_tarjeta_de_residencia'])->name('frontend.sp.renovación_de_la_tarjeta_de_residencia');

// Route::get('checkout', [FrontendSpanishController::class, 'checkout'])->name('frontend.sp.checkout');


// English
Route::group(['prefix' => 'en'], function () {

    Route::post('checkout', [StripeController::class, 'index_en']);

    Route::get('checkout_success', [StripeController::class, 'success_en']);

    Route::get('/', [FrontendEnglishController::class, 'index'])->name('frontend.index');
    Route::get('/Contacto', [FrontendEnglishController::class, 'contact'])->name('frontend.contact');
    Route::get('/logements/{id}', [FrontendEnglishController::class, 'appartement'])->name('frontend.appartement');
    Route::get('/logements/{id}/Checkout', [FrontendEnglishController::class, 'checkout'])->name('frontend.checkout');
    Route::get('/assurance', [FrontendEnglishController::class, 'assurance'])->name('frontend.assurance');
    Route::post('/assurance', [FrontendEnglishController::class, 'assurance_store'])->name('frontend.assurance.store');
    Route::get('/etudier', [FrontendEnglishController::class, 'etudier'])->name('frontend.etudier');
    Route::get('/etudier_en', [FrontendEnglishController::class, 'etudier_en'])->name('frontend.etudier_en');
    Route::get('/logements', [FrontendEnglishController::class, 'logements'])->name('frontend.logements');
    Route::get('/nos_packs', [FrontendEnglishController::class, 'nos_packs'])->name('frontend.nos_packs');
    Route::get('/quisommes_nous', [FrontendEnglishController::class, 'quisommes_nous'])->name('frontend.quisommes_nous');
    Route::get('/preparation', [FrontendEnglishController::class, 'preparation'])->name('frontend.preparation');
    Route::get('/programmes', [FrontendEnglishController::class, 'programmes'])->name('frontend.programmes');
    Route::get('/service/{service}', [FrontendEnglishController::class, 'service'])->name('frontend.service');
    Route::get('/blog', [FrontendEnglishController::class, 'blog'])->name('frontend.blog');
    Route::get('/about', [FrontendEnglishController::class, 'about'])->name('frontend.about');
    Route::get('/post/{post}', [FrontendEnglishController::class, 'post'])->name('frontend.post');


    Route::get('/politique_de_confidentialite', [FrontendEnglishController::class, 'politique'])->name('frontend.politique');

    Route::get('/termes_et_conditions', [FrontendEnglishController::class, 'terms'])->name('frontend.terms');

    // mention legal
    Route::get('/mention_legale', [FrontendEnglishController::class, 'mencionar_legal'])->name('frontend.mention');

    Route::get('page/{slug}', [FrontendEnglishController::class, 'page'])->name('frontend.page');



    Route::get('/entrepreneur_residence', [FrontendEnglishController::class, 'residencia_para_emprendedores'])->name('frontend.residencia_para_emprendedores');
    Route::get('/arraigo_para_la_formacion', [FrontendEnglishController::class, 'arraigo_para_la_formacion'])->name('frontend.arraigo_para_la_formacion');
    Route::get('/arraigo_familiar', [FrontendEnglishController::class, 'arraigo_familiar'])->name('frontend.arraigo_familiar');
    Route::get('/arraigo_laboral', [FrontendEnglishController::class, 'arraigo_laboral'])->name('frontend.arraigo_laboral');
    Route::get('/arraigo_social', [FrontendEnglishController::class, 'arraigo_social'])->name('frontend.arraigo_social');
    Route::get('/non_lucrative_residence', [FrontendEnglishController::class, 'residencia_no_lucrativa'])->name('frontend.residencia_no_lucrativa');
    Route::get('/digital_nomad', [FrontendEnglishController::class, 'nomada_digital'])->name('frontend.nomada_digital');
    Route::get('/eu_family_member', [FrontendEnglishController::class, 'residencia_familiar_ue'])->name('frontend.residencia_familiar_ue');
    Route::get('/family_reunification', [FrontendEnglishController::class, 'reagrupacion_familiar'])->name('frontend.reagrupacion_familiar');
    Route::get('/long_term_residence', [FrontendEnglishController::class, 'residencia_larga_duracion'])->name('frontend.residencia_larga_duracion');
    Route::get('/administrative_litigation_appeal', [FrontendEnglishController::class, 'recurso_contencioso_administrativo'])->name('frontend.recurso_contencioso_administrativo');
    Route::get('/administrative_appeal', [FrontendEnglishController::class, 'recurso_administrativo'])->name('frontend.recurso_administrativo');
    Route::get('/citizenship', [FrontendEnglishController::class, 'nacionalidad'])->name('frontend.nacionalidad');
    Route::get('/golden_visa', [FrontendEnglishController::class, 'golden_visa'])->name('frontend.golden_visa');
    Route::get('/student_visa', [FrontendEnglishController::class, 'visa_de_estudiante'])->name('frontend.visa_de_estudiante');
    Route::get('/renewal_of_residence_card_NIE', [FrontendEnglishController::class, 'renovación_de_la_tarjeta_de_residencia'])->name('frontend.renovación_de_la_tarjeta_de_residencia');



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