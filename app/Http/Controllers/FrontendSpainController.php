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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class FrontendSpainController extends Controller
{
    // index page 
    public function index() {
        $services = Service::where('active', true)->where('lang', 'es')->get();
        // id 1 => language = Espagnole
        $last_posts = Post::where('lang', 'es')->orderBy('id', 'asc')->limit(3)->get();
        // get testimonials
        $testimonials = Testimonial::where('active', true)->where('lang', 'es')->get();

        // get faqs 
        $faqs = Faq::where('lang', 'es')->get();

        // background images
        $slider = Slider::orderBy('id', 'asc')->get();
        
        return view('frontend.sp.index',[
            'services' => $services,
            'last_posts' => $last_posts,
            'testimonials' => $testimonials,
            'langLink' => route('frontend.index'),
            'sliders' => $slider,
            'faqs' => $faqs
        ]);
    }


    public function contact() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'es')->get();

        return view('frontend.sp.contact',[
            'testimonials' => $testimonials,
        ]);
    }

    public function services() {
        $testimonials = Testimonial::where('active', true)->where('lang', 'es')->get();

        return view('frontend.sp.services',[
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
        return view('frontend.sp.checkout',[
            'appartement' => $appartement,
            'langLink' => route('frontend.checkout', $appartement->translate),
        ]);
    }

    // get page by slug 
    public function page($slug) {
        $page = Page::where('slug', $slug);
        if (! $page->exists() || $page->first()->lang != 'es' ) {
            abort(404); 
        }

        if (view()->exists('frontend.sp.pages.'.$slug))
        {
            return view('frontend.sp.pages.'.$slug, [
                'page' => Page::where('slug', $slug)->first(),
                'langLink' => Page::get_lang_link($page->first())
            ]);
        }else {
            return view('frontend.sp.page', [
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

        return view('frontend.sp.appartement',[
            'appartement' => $appartement,
            'langLink' => $route,
        ]);
    }

    public function assurance() {
        return view('frontend.sp.assurance',[
            'langLink' => route('frontend.assurance')
        ]);
    }

    public function assurance_store(Request $request) {
        // store tthe assurance request into database 
        
        $assurance = new AssuranceRequest();
        $assurance->name = $request->input('name');
        $assurance->date = $request->input('day').'/'.$request->input('month').'/'.$request->input('year');
        $assurance->sex  = $request->input('sex');
        $assurance->phone = $request->input('phone');
        $assurance->email = $request->input('email');
        $assurance->save();

        return redirect()->route('frontend.index');
    }

    public function etudier() {
        return view('frontend.sp.etudier');
    }

    public function etudier_en() {
        return view('frontend.sp.etudier_en');
    }

    public function logements(Request $request) {

        // Filter by city
        if ( $request->input('city') != '' ) {
            $logements = Housing::where('active', true)->where('lang', 'es')->where('city', $request->input('city'))->orderBy('id', 'desc')->simplePaginate(15);
        }

        // Filter by type 
        if ( $request->input('type') != '' ) {
            $logements = Housing::where('active', true)->where('lang', 'es')->where('type', $request->input('type'))->orderBy('id', 'desc')->simplePaginate(15);
        }
        
        // Filter by price 
        if ( $request->input('prix') != '' ) {
            if ( $request->input('prix') == 'increase' ) {
                $logements = Housing::where('active', true)->where('lang', 'es')->orderBy('prix', 'asc')->simplePaginate(15);
            }
            if ( $request->input('prix') == 'decrease' ) {
                $logements = Housing::where('active', true)->where('lang', 'es')->orderBy('prix', 'desc')->simplePaginate(15);
            }
        }


        // Filter by chambre 
        if ( $request->input('bedrooms') != '' ) {
            if ( $request->input('bedrooms') == 'increase' ) {
                $logements = Housing::where('active', true)->where('lang', 'es')->orderBy('chambres', 'asc')->simplePaginate(15);
            }
            if ( $request->input('bedrooms') == 'decrease' ) {
                $logements = Housing::where('active', true)->where('lang', 'es')->orderBy('chambres', 'desc')->simplePaginate(15);
            }
        }


        // if no filter detected
        if ( $request->input('city') == '' && $request->input('type') == '' && $request->input('prix') == '' &&  $request->input('bedrooms') == '' ) {
            $logements = Housing::where('active', true)->where('lang', 'es')->orderBy('id', 'desc')->simplePaginate(15);
        }

        
        return view('frontend.sp.logements',[
            'apartments' => $logements,
            'langLink' => route('frontend.logements')
        ]);

    }

    public function nos_packs() {
        $packs = Pack::where('language', 'es')->where('active', true)->orderBy('id', 'desc')->simplePaginate(15);
        return view('frontend.sp.nos_packs',[
            'packs' => $packs,
            'langLink' => route('frontend.nos_packs'),
        ]);
    }

    public function quisommes_nous() {
        $services = Service::where('active', true)->where('lang', 'es')->get();

        return view('frontend.sp.quisommes_nous',[
            'services' => $services,
            'langLink' => route('frontend.quisommes_nous'),
        ]);
    }
    
    public function preparation() {
        return view('frontend.sp.preparation',[
            'langLink' => route('frontend.preparation'),
        ]);
    }

    public function programmes() {
        $linguistique = Programme::where('active', true)->where('language', 'es')->where('group', 'linguistique')->get();
        $selectividad = Programme::where('active', true)->where('language', 'es')->where('group', 'selectividad')->get();
        $master = Programme::where('active', true)->where('language', 'es')->where('group', 'master')->get();
        $licence = Programme::where('active', true)->where('language', 'es')->where('group', 'licence')->get();
        $grade_sup_a = Programme::where('active', true)->where('language', 'es')->where('group', 'grade_sup_a')->get();

         return view('frontend.sp.programmes',[
            'linguistique' => $linguistique,
            'selectividad' => $selectividad,
            'master' => $master,
            'licence' => $licence,
            'grade_sup_a' => $grade_sup_a,
            'langLink' => route('frontend.programmes'),
        ]);


    }

    public function service(Service $service) {
        return view('frontend.sp.service',[
            'service' => $service,
        ]);
    }

    public function post(Post $post) {
        if ( !is_null( $post->translate_post ) ) {
            $route = route('frontend.post', $post->translate_post);
        }else {
            $route = route('frontend.blog');
        }
        return view('frontend.sp.post',[
            'post' => $post,
            'langLink' => $route,
        ]);
    }
    
    public function blog() {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(15);
        return view('frontend.sp.blog',[
            'posts' => $posts,
            'langLink' => route('frontend.blog'),
        ]);
    }


    public function politique() {
        return view('frontend.sp.politique',[
            'langLink' => route('frontend.politique')
        ]);
    }


    public function terms() {
        return view('frontend.sp.terms', [
            'langLink' => route('frontend.terms')
        ]);
    }


    // mention legal function 
    public function mencionar_legal() {
        return view('frontend.sp.mention',[
            'langLink' => route('frontend.mention')
        ]);
    }
}
