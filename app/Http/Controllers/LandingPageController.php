<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Services;

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

        return view('pages.landingPage.index', compact('services', 'about'));
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
