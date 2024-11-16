<?php

namespace App\View\Components\fr;

use App\Models\Testimonial;
use Illuminate\View\Component;

class testimonials extends Component
{

    public $testimonials;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->testimonials = Testimonial::where('active', true)->where('lang', 'en')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fr.testimonials');
    }
}
