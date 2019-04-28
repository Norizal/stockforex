<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MVMM;
use App\MVTD;
use App\MVLINK;
use App\Terms;
use App\AboutUs;
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

class PagesController extends Controller
{
    public function index(){
        $mvmms = MVMM::all();
        $mvtds = MVTD::all();
        $mvlinks = MVLINK::all();
        $terms = Terms::all();
        $abouts = AboutUs::all();
        $contacts = Contact::all();
        $faqs = Faq::all();
        $pricing1s = Pricing1::all();
        $pricing2s = Pricing2::all();
        $pricing3s = Pricing3::all();
        $screenshots = ScreenShot::all();

        $hiwanalysiss = HIWAnalysis::all();
        $hiwnews = HIWNew::all();
        $hiwnotis = HIWNoti::all();
        $hiwvideos = HIWVideo::all();
        $hiwwebs = HIWWeb::all();

        $icons = Icon::all();

        
        return view('pages.index')->with('mvmms', $mvmms)->with('mvtds', $mvtds)->with('mvlinks', $mvlinks)->with('terms', $terms)
        ->with('abouts', $abouts)->with('contacts', $contacts)->with('faqs', $faqs)
        ->with('pricing1s', $pricing1s)->with('pricing2s', $pricing2s)
        ->with('pricing3s', $pricing3s)->with('screenshots', $screenshots)->with('hiwanalysiss', $hiwanalysiss)->with('hiwnews', $hiwnews)
        ->with('hiwnotis', $hiwnotis)->with('hiwvideos', $hiwvideos)->with('hiwwebs', $hiwwebs)->with('icons', $icons);

        
    }
}
