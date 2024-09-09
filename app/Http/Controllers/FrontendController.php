<?php

namespace App\Http\Controllers;

use App\Models\AssuranceRequest;
use App\Models\Housing;
use App\Models\Pack;
use App\Models\Programme;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class FrontendController extends Controller
{
    // index page 
    public function index() {
        $services = Service::where('active', true)->where('lang', 'fr')->get();
        // id 2 => language = francais
        $last_posts = Post::where('category_id', 2)->orderBy('id', 'asc')->limit(3)->get();
        // get testimonials
        $testimonials = Testimonial::where('active', true)->where('lang', 'fr')->get();

        // background images
        $slider = Slider::orderBy('id', 'asc')->get();

        return view('frontend.fr.index',[
            'services' => $services,
            'last_posts' => $last_posts,
            'testimonials' => $testimonials,
            'langLink' => route('frontend.sp.index'),
            'sliders' => $slider,
        ]);
    }


    public function checkout($id) {

        // set item id for stripe to hundle
        if ( Session::has('product_id') ) {
            Session::forget('product_id');
            Session::put('product_id', $id);
        }else {
            Session::put('product_id', $id);
        }

        $appartement = Housing::where('id', $id)->first();
        return view('frontend.fr.checkout',[
            'appartement' => $appartement,
            'langLink' => route('frontend.sp.checkout', $appartement->translate),
        ]);
    }


    // get page by slug 
    public function page($slug) {
        $page = Page::where('slug', $slug);
        if (! $page->exists() || $page->first()->lang != 'fr' ) {
            abort(404); 
        }

        if (view()->exists('frontend.fr.pages.'.$slug)) {
            return view('frontend.fr.pages.'.$slug, [
                'page' => Page::where('slug', $slug)->first(),
                'langLink' => Page::get_lang_link($page->first())
            ]);
        }else {
            return view('frontend.fr.page', [
                'page' => Page::where('slug', $slug)->first(),
                'langLink' => Page::get_lang_link($page->first())
            ]);
        }


        return view('frontend.fr.pages.'.$slug, [
            'page' => Page::where('slug', $slug)->first(),
            'langLink' => Page::get_lang_link($page->first())
        ]);
    }

    public function appartement($id) {
        $appartement = Housing::where('id', $id)->first();

        if ( is_null( $appartement->translate ) ) {
            $route = route('frontend.sp.logements');
        }else {
            $route = route('frontend.sp.appartement', $appartement->translate);
        }

        return view('frontend.fr.appartement',[
            'appartement' => $appartement,
            'langLink' => $route,
        ]);
    }

    public function assurance() {
        return view('frontend.fr.assurance',[
            'langLink' => route('frontend.sp.assurance')
        ]);
    }

    public function assurance_store(Request $request) {
        // store tthe assurance request into database 
        
        $assurance = new AssuranceRequest();
        $assurance->name = $request->input('name');
        $assurance->assurance = $request->input('assurance');
        $assurance->date = $request->input('day').'/'.$request->input('month').'/'.$request->input('year');
        $assurance->sex  = $request->input('sex');
        $assurance->phone = $request->input('phone');
        $assurance->email = $request->input('email');
        $assurance->save();

        return back();
    }

    public function etudier() {
        return view('frontend.fr.etudier');
    }

    public function etudier_en() {
        return view('frontend.fr.etudier_en');
    }

    public function logements(Request $request) {

        // Filter by city
        if ( $request->input('city') != '' ) {
            $logements = Housing::where('active', true)->where('lang', 'fr')->where('city', $request->input('city'))->orderBy('id', 'desc')->simplePaginate(15);
        }

        // Filter by type 
        if ( $request->input('type') != '' ) {
            $logements = Housing::where('active', true)->where('lang', 'fr')->where('type', $request->input('type'))->orderBy('id', 'desc')->simplePaginate(15);
        }
        
        // Filter by price 
        if ( $request->input('prix') != '' ) {
            if ( $request->input('prix') == 'increase' ) {
                $logements = Housing::where('active', true)->where('lang', 'fr')->orderBy('prix', 'asc')->simplePaginate(15);
            }
            if ( $request->input('prix') == 'decrease' ) {
                $logements = Housing::where('active', true)->where('lang', 'fr')->orderBy('prix', 'desc')->simplePaginate(15);
            }
        }


        // Filter by chambre 
        if ( $request->input('bedrooms') != '' ) {
            if ( $request->input('bedrooms') == 'increase' ) {
                $logements = Housing::where('active', true)->where('lang', 'fr')->orderBy('chambres', 'asc')->simplePaginate(15);
            }
            if ( $request->input('bedrooms') == 'decrease' ) {
                $logements = Housing::where('active', true)->where('lang', 'fr')->orderBy('chambres', 'desc')->simplePaginate(15);
            }
        }


        // if no filter detected
        if ( $request->input('city') == '' && $request->input('type') == '' && $request->input('prix') == '' &&  $request->input('bedrooms') == '' ) {
            $logements = Housing::where('active', true)->where('lang', 'fr')->orderBy('id', 'desc')->simplePaginate(15);
        }

        
        return view('frontend.fr.logements',[
            'apartments' => $logements,
            'langLink' => route('frontend.sp.logements')
        ]);

    }

    public function nos_packs() {
        $packs = Pack::where('language', 'fr')->where('active', true)->orderBy('id', 'desc')->simplePaginate(15);
        return view('frontend.fr.nos_packs',[
            'packs' => $packs,
            'langLink' => route('frontend.sp.nos_packs'),
        ]);
    }

    public function quisommes_nous() {
        $services = Service::where('active', true)->where('lang', 'fr')->get();

        return view('frontend.fr.quisommes_nous',[
            'services' => $services,
            'langLink' => route('frontend.sp.quisommes_nous'),
        ]);
    }
    
    public function preparation() {
        return view('frontend.fr.preparation',[
            'langLink' => route('frontend.sp.preparation'),
        ]);
    }

    public function programmes() {
        $linguistique = Programme::where('active', true)->where('language', 'fr')->where('group', 'linguistique')->get();
        $selectividad = Programme::where('active', true)->where('language', 'fr')->where('group', 'selectividad')->get();
        $master = Programme::where('active', true)->where('language', 'fr')->where('group', 'master')->get();
        $licence = Programme::where('active', true)->where('language', 'fr')->where('group', 'licence')->get();
        $grade_sup_a = Programme::where('active', true)->where('language', 'fr')->where('group', 'grade_sup_a')->get();

         return view('frontend.fr.programmes',[
            'linguistique' => $linguistique,
            'selectividad' => $selectividad,
            'master' => $master,
            'licence' => $licence,
            'grade_sup_a' => $grade_sup_a,
            'langLink' => route('frontend.sp.programmes')
        ]);


    }

    public function service(Service $service) {
        return view('frontend.fr.service',[
            'service' => $service,
        ]);
    }

    public function post(Post $post) {
        if ( !is_null( $post->translate_post ) ) {
            $route = route('frontend.sp.post', $post->translate_post);
        }else {
            $route = route('frontend.sp.blog');
        }
        return view('frontend.fr.post',[
            'post' => $post,
            'langLink' => $route,
        ]);
    }
    
    public function blog() {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(15);
        return view('frontend.fr.blog',[
            'posts' => $posts,
            'langLink' => route('frontend.sp.blog'),
        ]);
    }


    public function politique() {
        return view('frontend.fr.politique', [
            'langLink' => route('frontend.sp.politique')
        ]);
    }


    public function terms() {
        return view('frontend.fr.terms', [
            'langLink' => route('frontend.sp.terms')
        ]);
    }


    // mention legal function 
    public function mention_legale() {
        return view('frontend.fr.mention',[
            'langLink' => route('frontend.sp.mention')
        ]);
    }

}
