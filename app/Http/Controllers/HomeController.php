<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MVMM;
use App\MVTD;
use App\MVLINK;
use App\AboutUs;
use App\Terms;
use App\Contact;
use App\Faq;
use App\Pricing1;
use App\Pricing2;
use App\Pricing3;
use App\ScreenShot;

use App\HIWAnalysis;
use App\HIWNew;
use App\HIWNoti;
use App\HIWVideo;
use App\HIWWeb;

use App\Icon;

use Illuminate\Support\Facades\Storage;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mvtds = MVTD::orderBy('created_at', 'desc')->paginate(2);
        $mvlinks = MVLINK::orderBy('created_at', 'desc')->paginate(2);
        $mvmms = MVMM::orderBy('created_at', 'desc')->paginate(2);
        $abouts = AboutUs::orderBy('created_at', 'desc')->paginate(2);
        $terms = Terms::orderBy('created_at', 'desc')->paginate(2);
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(2);
        $faqs = Faq::orderBy('created_at', 'desc')->paginate(2);
        $pricing1s = Pricing1::orderBy('created_at', 'desc')->paginate(2);
        $pricing2s = Pricing2::orderBy('created_at', 'desc')->paginate(2);
        $pricing3s = Pricing3::orderBy('created_at', 'desc')->paginate(2);
        $screenshots = ScreenShot::orderBy('created_at', 'desc')->paginate(2);

        $hiwanalysiss = HIWAnalysis::orderBy('created_at', 'desc')->paginate(2);
        $hiwnews = HIWNew::orderBy('created_at', 'desc')->paginate(2);
        $hiwnotis = HIWNoti::orderBy('created_at', 'desc')->paginate(2);
        $hiwvideos = HIWVideo::orderBy('created_at', 'desc')->paginate(2);
        $hiwwebs = HIWWeb::orderBy('created_at', 'desc')->paginate(2);
        $icons = Icon::orderBy('created_at', 'desc')->paginate(2);

        return view('home')->with('mvmms', $mvmms)->with('mvtds', $mvtds)->with('mvlinks', $mvlinks)
        ->with('abouts', $abouts)->with('terms', $terms)->with('contacts', $contacts)
        ->with('faqs', $faqs)->with('pricing1s', $pricing1s)->with('pricing2s', $pricing2s)
        ->with('pricing3s', $pricing3s)->with('screenshots', $screenshots)
        ->with('hiwanalysiss', $hiwanalysiss)->with('hiwnews', $hiwnews)
        ->with('hiwnotis', $hiwnotis)->with('hiwvideos', $hiwvideos)->with('hiwwebs', $hiwwebs)->with('icons', $icons);
      
        
    }
}
