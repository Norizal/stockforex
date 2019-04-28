<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terms;

class TermsController extends Controller
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
        return view('pages_backend.terms.create');
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
            'description' => 'required',
        ]);

        // Create post
        $term = new Terms;
        $term->description = $request->input('description');
        $term->user_id = auth()->user()->id;
        $term->save();

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
        $term = Terms::find($id);

        // Check for correct user
        if(auth()->user()->id !== $term->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.terms.edit')->with('term',$term);
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
            'description' => 'required',
        ]);

        // Create post
        $term = Terms::find($id);
        $term->description = $request->input('description');
        $term->save();

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
        $term = Terms::find($id);
        // Check for correct user
        if(auth()->user()->id !== $term->user_id){
           return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
       }

       

       $about->delete();
       return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
