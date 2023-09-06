<?php

namespace App\Http\Controllers;

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
        
        return view('pages.landingPage.index', compact('services'));
    }

    /**
     * service
     *
     * @return void
     */
    public function service()
    {
        return view('pages.landingPage.service');
    }

}
