<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Project;
use App\Models\Services;
use App\Models\Testimoni;
use App\Models\Whychoose;
use App\Models\whychooseDetail;

class LandingPageController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // get 3 data terbaru service
        $services = Services::latest()->take('3')->get();

        // get 1 data about
        $about = About::latest()->first();

        // get 1 data project
        $project = Project::latest()->take('10')->get();

        // get 4 carousel
        $carousels = Carousel::latest()->take('4')->get();

        // testimonial 4 aja
        $testimonials = Testimoni::latest()->take('4')->get();

        // get whychoose
        $whychoose = Whychoose::latest()->first();

        // get detail whychoose
        $whychooseDetail = whychooseDetail::where('whychoose_id', $whychoose->id)->take('4')->get();

        return view('pages.landingPage.index', compact('services', 'about', 'project', 'carousels', 'testimonials', 'whychoose', 'whychooseDetail'));
    }

    /**
     * service
     *
     * @return void
     */
    public function service()
    {
        // get 3 data terbaru service
        $services = Services::latest()->get();

        return view('pages.landingPage.service', compact('services'));
    }

}
