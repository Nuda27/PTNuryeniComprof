<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Project;
use App\Models\Services;
use App\Models\Testimoni;

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
        $about = About::first();

        // get 1 data project
        $project = Project::latest()->take('10')->get();

        // get 4 carousel
        $carousels = Carousel::latest()->take('4')->get();

        // testimonial 4 aja
        $testimonials = Testimoni::latest()->take('4')->get();

        return view('pages.landingPage.index', compact('services', 'about', 'project', 'carousels', 'testimonials'));
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