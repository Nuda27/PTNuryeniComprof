<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\Project;
use App\Models\Services;
use App\Models\Struktur;
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

        // client
        $clients = Client::latest()->take('20')->get();

        return view('pages.landingPage.index', compact('services', 'about', 'project', 'carousels', 'testimonials', 'whychoose', 'whychooseDetail', 'clients'));
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

    /**
     * struktur
     *
     * @return void
     */
    public function struktur()
    {
        // get 1
        $struktur = Struktur::first();
        return view('pages.landingPage.struktur', compact('struktur'));
    }

}