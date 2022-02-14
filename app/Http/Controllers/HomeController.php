<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function faq()
    {
        $faqs = Faq::all()->sortByDesc("id");;
        return view('faq',[ 'faqs' => $faqs ]);
    }
    public function onde()
    {
        return view('atuamos');
    }
}
