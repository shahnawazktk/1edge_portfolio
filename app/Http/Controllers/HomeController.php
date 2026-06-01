<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the product page.
     *
     * @return \Illuminate\View\View
     */
    public function product()
    {
        return view('product');
    }

    /**
     * Display the services page.
     *
     * @return \Illuminate\View\View
     */
    public function service()
    {
        return view('services');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}
