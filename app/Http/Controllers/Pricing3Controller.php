<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing3;

class Pricing3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
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
        return view('pages_backend.pricing.pricing3.create');
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
            'pricing3_price' => 'required',
            'pricing3_duration' => 'required',
            'pricing3_description' => 'required',
        ]);

        // Create post
        $pricing3 = new Pricing3;
        $pricing3->pricing3_price = $request->input('pricing3_price');
        $pricing3->pricing3_duration = $request->input('pricing3_duration');
        $pricing3->pricing3_promotion = $request->input('pricing3_promotion');
        $pricing3->pricing3_description = $request->input('pricing3_description');
        $pricing3->user_id = auth()->user()->id;
        $pricing3->save();

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
        $pricing3 = Pricing3::find($id);

        // Check for correct user
        if(auth()->user()->id !== $pricing3->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.pricing.pricing3.edit')->with('pricing3',$pricing3);
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
            'pricing3_price' => 'required',
            'pricing3_duration' => 'required',
            'pricing3_description' => 'required',
        ]);

        // Create post
        $pricing3 = Pricing3::find($id);
        $pricing3->pricing3_price = $request->input('pricing3_price');
        $pricing3->pricing3_duration = $request->input('pricing3_duration');
        $pricing3->pricing3_promotion = $request->input('pricing3_promotion');
        $pricing3->pricing3_description = $request->input('pricing3_description');
        $pricing3->save();

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
        $pricing3 = Pricing3::find($id);
         // Check for correct user
         if(auth()->user()->id !== $pricing3->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $pricing3->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
