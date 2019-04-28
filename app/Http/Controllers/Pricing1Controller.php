<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing1;

class Pricing1Controller extends Controller
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
        return view('pages_backend.pricing.pricing1.create');
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
            'pricing1_price' => 'required',
            'pricing1_duration' => 'required',
            'pricing1_description' => 'required',
        ]);

        // Create post
        $pricing1 = new Pricing1;
        $pricing1->pricing1_price = $request->input('pricing1_price');
        $pricing1->pricing1_duration = $request->input('pricing1_duration');
        $pricing1->pricing1_promotion = $request->input('pricing1_promotion');
        $pricing1->pricing1_description = $request->input('pricing1_description');
        $pricing1->user_id = auth()->user()->id;
        $pricing1->save();

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
        $pricing1 = Pricing1::find($id);

        // Check for correct user
        if(auth()->user()->id !== $pricing1->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.pricing.pricing1.edit')->with('pricing1',$pricing1);
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
            'pricing1_price' => 'required',
            'pricing1_duration' => 'required',
            'pricing1_description' => 'required',
        ]);

        // Create post
        $pricing1 = Pricing1::find($id);
        $pricing1->pricing1_price = $request->input('pricing1_price');
        $pricing1->pricing1_duration = $request->input('pricing1_duration');
        $pricing1->pricing1_promotion = $request->input('pricing1_promotion');
        $pricing1->pricing1_description = $request->input('pricing1_description');
        $pricing1->save();

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
        $pricing1 = Pricing1::find($id);
         // Check for correct user
         if(auth()->user()->id !== $pricing1->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $pricing1->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
