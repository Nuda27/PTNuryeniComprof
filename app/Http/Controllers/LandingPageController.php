<?php

namespace App\Http\Controllers;

class LandingPageController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('pages.landingPage.index');
    }

    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('pages.landingPage.contact');
    }
}