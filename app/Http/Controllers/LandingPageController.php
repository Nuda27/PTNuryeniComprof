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

}
