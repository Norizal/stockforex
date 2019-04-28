<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing2;

class Pricing2Controller extends Controller
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
        return view('pages_backend.pricing.pricing2.create');
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
            'pricing2_price' => 'required',
            'pricing2_duration' => 'required',
            'pricing2_description' => 'required',
        ]);

        // Create post
        $pricing2 = new Pricing2;
        $pricing2->pricing2_price = $request->input('pricing2_price');
        $pricing2->pricing2_duration = $request->input('pricing2_duration');
        $pricing2->pricing2_promotion = $request->input('pricing2_promotion');
        $pricing2->pricing2_description = $request->input('pricing2_description');
        $pricing2->user_id = auth()->user()->id;
        $pricing2->save();

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
        $pricing2 = Pricing2::find($id);

        // Check for correct user
        if(auth()->user()->id !== $pricing2->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.pricing.pricing2.edit')->with('pricing2',$pricing2);
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
            'pricing2_price' => 'required',
            'pricing2_duration' => 'required',
            'pricing2_description' => 'required',
        ]);

        // Create post
        $pricing2 = Pricing2::find($id);
        $pricing2->pricing2_price = $request->input('pricing2_price');
        $pricing2->pricing2_duration = $request->input('pricing2_duration');
        $pricing2->pricing2_promotion = $request->input('pricing2_promotion');
        $pricing2->pricing2_description = $request->input('pricing2_description');
        $pricing2->save();

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
        $pricing2 = Pricing2::find($id);
         // Check for correct user
         if(auth()->user()->id !== $pricing2->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $pricing2->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
