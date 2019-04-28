<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages_backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'about_us_mission' => 'required',
            'about_us_vision' => 'required',
            'about_us_who' => 'required',
        ]);

        // Create post
        $about = new AboutUs;
        $about->about_us_mission = $request->input('about_us_mission');
        $about->about_us_vision = $request->input('about_us_vision');
        $about->about_us_who = $request->input('about_us_who');
        $about->user_id = auth()->user()->id;
        $about->save();

        return redirect('/home-admin')->with('success', 'Data Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = AboutUs::find($id);

        // Check for correct user
        if(auth()->user()->id !== $about->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.about.edit')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'about_us_mission' => 'required',
            'about_us_vision' => 'required',
            'about_us_who' => 'required',
        ]);

        // Create post
        $about = AboutUs::find($id);
        $about->about_us_mission = $request->input('about_us_mission');
        $about->about_us_vision = $request->input('about_us_vision');
        $about->about_us_who = $request->input('about_us_who');
        $about->save();

        return redirect('/home-admin')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = AboutUs::find($id);
        // Check for correct user
        if(auth()->user()->id !== $about->user_id){
           return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
       }

       

       $about->delete();
       return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
