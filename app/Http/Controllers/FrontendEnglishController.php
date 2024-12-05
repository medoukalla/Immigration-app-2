<?php

namespace App\Http\Controllers;

use App\Models\AssuranceRequest;
use App\Models\Faq;
use App\Models\Housing;
use App\Models\Pack;
use App\Models\Programme;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class FrontendEnglishController extends Controller
{
    // index page 
    public function index() {
        $services = Service::where('active', true)->where('lang', 'en')->get();
        // id 1 => language = Espagnole
        $last_posts = Post::where('lang', 'en')->orderBy('id', 'asc')->limit(3)->get();
        // get testimonials
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        // get faqs 
        $faqs = Faq::where('lang', 'en')->get();

        // background images
        $slider = Slider::orderBy('id', 'asc')->get();
        
        return view('frontend.en.index',[
            'services' => $services,
            'last_posts' => $last_posts,
            'testimonials' => $testimonials,
            'langLink' => route('frontend.index'),
            'sliders' => $slider,
            'faqs' => $faqs
        ]);
    }


    public function contact() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.contact',[
            'testimonials' => $testimonials,
        ]);
    }


    public function contact_store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:256',
            'last_name' => 'required|string|max:256',
            'email' => 'required|email|max:256',
            'phone' => 'required|string|max:256',
            'service_interest' => 'required|string',
            'nationality' => 'required|string',
            'residence' => 'required|string',
            'situation_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            // Return validation errors
            return response()->json([
                'status' => 'error',
                'message' => 'There were validation errors.',
                'errors' => $validator->errors(),
            ], 400);
        }

        // If validation passes, save the data to the database
        $contactForm = ContactForm::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'service_interest' => $request->input('service_interest'),
            'nationality' => $request->input('nationality'),
            'residence' => $request->input('residence'),
            'situation_description' => $request->input('situation_description'),
        ]);

        // Return a success response
        return response()->json([
            'status' => 'success',
            'message' => '¡Gracias! Tu envío ha sido recibido.',
        ]);
    }

    public function services() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.services',[
            'testimonials' => $testimonials,
        ]);
    }


    public function residencia_para_emprendedores() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.residencia_para_emprendedores', [
            'testimonials' => $testimonials,
        ]);
    }

    public function arraigo_para_la_formacion() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.arraigo_para_la_formacion', [
            'testimonials' => $testimonials,
        ]);
    }

    public function arraigo_familiar() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.arraigo_familiar', [
            'testimonials' => $testimonials,
        ]);
    }

    public function arraigo_laboral() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.arraigo_laboral', [
            'testimonials' => $testimonials,
        ]);
    }

    public function arraigo_social() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.arraigo_social', [
            'testimonials' => $testimonials,
        ]);
    }

    public function residencia_no_lucrativa() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.residencia_no_lucrativa', [
            'testimonials' => $testimonials,
        ]);
    }

    public function nomada_digital() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.nomada_digital', [
            'testimonials' => $testimonials,
        ]);
    }

    public function residencia_familiar_ue() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.residencia_familiar_ue', [
            'testimonials' => $testimonials,
        ]);
    }

    public function reagrupacion_familiar() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.reagrupacion_familiar', [
            'testimonials' => $testimonials,
        ]);
    }

    public function residencia_larga_duracion() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.residencia_larga_duracion', [
            'testimonials' => $testimonials,
        ]);
    }

    public function recurso_contencioso_administrativo() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.recurso_contencioso_administrativo', [
            'testimonials' => $testimonials,
        ]);
    }

    public function recurso_administrativo() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.recurso_administrativo', [
            'testimonials' => $testimonials,
        ]);
    }

    public function nacionalidad() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.nacionalidad', [
            'testimonials' => $testimonials,
        ]);
    }

    public function golden_visa() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.golden_visa', [
            'testimonials' => $testimonials,
        ]);
    }

    public function visa_de_estudiante() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.visa_de_estudiante', [
            'testimonials' => $testimonials,
        ]);
    }

    public function renovación_de_la_tarjeta_de_residencia() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.renovación_de_la_tarjeta_de_residencia', [
            'testimonials' => $testimonials,
        ]);
    }



    // checkout page 
    public function checkout($id) {

        // set item id for stripe to hundle
        if ( Session::has('product_id') ) {
            Session::forget('product_id');
            Session::put('product_id', $id);
        }else {
            Session::put('product_id', $id);
        }

        $appartement = Housing::where('id', $id)->first();
        return view('frontend.en.checkout',[
            'appartement' => $appartement,
            'langLink' => route('frontend.checkout', $appartement->translate),
        ]);
    }

    // get page by slug 
    public function page($slug) {
        $page = Page::where('slug', $slug);
        if (! $page->exists() || $page->first()->lang != 'en' ) {
            abort(404); 
        }

        if (view()->exists('frontend.en.pages.'.$slug))
        {
            return view('frontend.en.pages.'.$slug, [
                'page' => Page::where('slug', $slug)->first(),
                'langLink' => Page::get_lang_link($page->first())
            ]);
        }else {
            return view('frontend.en.page', [
                'page' => Page::where('slug', $slug)->first(),
                'langLink' => Page::get_lang_link($page->first())
            ]);
        }

    }

    public function appartement($id) {
        $appartement = Housing::where('id', $id)->first();

        if ( is_null( $appartement->translate ) ) {
            $route = route('frontend.logements');
        }else {
            $route = route('frontend.appartement', $appartement->translate);
        }

        return view('frontend.en.appartement',[
            'appartement' => $appartement,
            'langLink' => $route,
        ]);
    }

    public function assurance() {
        return view('frontend.en.assurance',[
            'langLink' => route('frontend.assurance')
        ]);
    }

    public function assurance_store(Request $request) {
        
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'assurance' => 'required|string',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'sex' => 'required|string|in:Hombre,Mujer',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:50',
        ]);



        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422); // Return 422 Unprocessable Entity with errors
        }

        // Create a new assurance request entry in the database
        $assuranceRequest = AssuranceRequest::create([
            'name' => $request->input('name'),
            'assurance' => $request->input('assurance'),
            'date' => $request->input('day').'/'.$request->input('month').'/'.$request->input('year'),
            'sex' => $request->input('sex'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);

        // Return a success response with the created data
        return response()->json([
            'status' => 'success',
            'message' => 'La solicitud de seguro ha sido registrada exitosamente.',
            'data' => $assuranceRequest // Optionally return the stored data
        ], 201); // 201 Created
    }

    public function etudier() {
        return view('frontend.en.etudier');
    }

    public function etudier_en() {
        return view('frontend.en.etudier_en');
    }

    public function logements(Request $request) {

        // Filter by city
        if ( $request->input('city') != '' ) {
            $logements = Housing::where('active', true)->where('lang', 'en')->where('city', $request->input('city'))->orderBy('id', 'desc')->simplePaginate(15);
        }

        // Filter by type 
        if ( $request->input('type') != '' ) {
            $logements = Housing::where('active', true)->where('lang', 'en')->where('type', $request->input('type'))->orderBy('id', 'desc')->simplePaginate(15);
        }
        
        // Filter by price 
        if ( $request->input('prix') != '' ) {
            if ( $request->input('prix') == 'increase' ) {
                $logements = Housing::where('active', true)->where('lang', 'en')->orderBy('prix', 'asc')->simplePaginate(15);
            }
            if ( $request->input('prix') == 'decrease' ) {
                $logements = Housing::where('active', true)->where('lang', 'en')->orderBy('prix', 'desc')->simplePaginate(15);
            }
        }


        // Filter by chambre 
        if ( $request->input('bedrooms') != '' ) {
            if ( $request->input('bedrooms') == 'increase' ) {
                $logements = Housing::where('active', true)->where('lang', 'en')->orderBy('chambres', 'asc')->simplePaginate(15);
            }
            if ( $request->input('bedrooms') == 'decrease' ) {
                $logements = Housing::where('active', true)->where('lang', 'en')->orderBy('chambres', 'desc')->simplePaginate(15);
            }
        }

        
        // if no filter detected
        if ( $request->input('city') == '' && $request->input('type') == '' && $request->input('prix') == '' &&  $request->input('bedrooms') == '' ) {
            $logements = Housing::where('active', true)->where('lang', 'en')->orderBy('id', 'desc')->simplePaginate(15);
        }

        
        return view('frontend.en.logements',[
            'apartments' => $logements,
            'langLink' => route('frontend.logements')
        ]);

    }

    public function nos_packs() {
        $packs = Pack::where('language', 'en')->where('active', true)->orderBy('id', 'desc')->simplePaginate(15);
        return view('frontend.en.nos_packs',[
            'packs' => $packs,
            'langLink' => route('frontend.nos_packs'),
        ]);
    }

    public function quisommes_nous() {
        $services = Service::where('active', true)->where('lang', 'en')->get();

        return view('frontend.en.quisommes_nous',[
            'services' => $services,
            'langLink' => route('frontend.quisommes_nous'),
        ]);
    }
    
    public function preparation() {
        return view('frontend.en.preparation',[
            'langLink' => route('frontend.preparation'),
        ]);
    }

    public function programmes() {
        $linguistique = Programme::where('active', true)->where('language', 'en')->where('group', 'linguistique')->get();
        $selectividad = Programme::where('active', true)->where('language', 'en')->where('group', 'selectividad')->get();
        $master = Programme::where('active', true)->where('language', 'en')->where('group', 'master')->get();
        $licence = Programme::where('active', true)->where('language', 'en')->where('group', 'licence')->get();
        $grade_sup_a = Programme::where('active', true)->where('language', 'en')->where('group', 'grade_sup_a')->get();

         return view('frontend.en.programmes',[
            'linguistique' => $linguistique,
            'selectividad' => $selectividad,
            'master' => $master,
            'licence' => $licence,
            'grade_sup_a' => $grade_sup_a,
            'langLink' => route('frontend.programmes'),
        ]);


    }

    public function service(Service $service) {
        return view('frontend.en.service',[
            'service' => $service,
        ]);
    }

    public function post(Post $post) {
        if ( !is_null( $post->translate_post ) ) {
            $route = route('frontend.post', $post->translate_post);
        }else {
            $route = route('frontend.blog');
        }
        return view('frontend.en.post',[
            'post' => $post,
            'langLink' => $route,
        ]);
    }
    
    public function blog() {
        $posts = Post::where('lang', 'en')->orderBy('id', 'desc')->simplePaginate(15);
        return view('frontend.en.blog',[
            'posts' => $posts,
            'langLink' => route('frontend.blog'),
        ]);
    }

    public function about() {
        return view('frontend.en.about',[
            'langLink' => route('frontend.about'),
        ]);
    }


    public function politique() {
        return view('frontend.en.politique',[
            'langLink' => route('frontend.politique')
        ]);
    }


    public function terms() {
        return view('frontend.en.terms', [
            'langLink' => route('frontend.terms')
        ]);
    }


    // mention legal function 
    public function mencionar_legal() {
        return view('frontend.en.mention',[
            'langLink' => route('frontend.mention')
        ]);
    }
}
