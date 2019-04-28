<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
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
        return view('pages_backend.faq.create');
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
            'faqs_title' => 'required',
            'faqs_description' => 'required',
        ]);

        // Create post
        $faq = new Faq;
        $faq->faqs_title = $request->input('faqs_title');
        $faq->faqs_description = $request->input('faqs_description');
        $faq->user_id = auth()->user()->id;
        $faq->save();

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
        $faq = Faq::find($id);

        // Check for correct user
        if(auth()->user()->id !== $faq->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.faq.edit')->with('faq',$faq);
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
            'faqs_title' => 'required',
            'faqs_description' => 'required',
        ]);

        // Create post
        $faq = Faq::find($id);
        $faq->faqs_title = $request->input('faqs_title');
        $faq->faqs_description = $request->input('faqs_description');
        $faq->save();

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
        $faq = Faq::find($id);
        // Check for correct user
        if(auth()->user()->id !== $faq->user_id){
           return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
       }

       

       $about->delete();
       return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
