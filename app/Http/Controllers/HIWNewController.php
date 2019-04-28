<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HIWNew;
use Illuminate\Support\Facades\Storage;

class HIWNewController extends Controller
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
        return view('pages_backend.hiw.new.create');
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
            'hiw_new_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_new_title' => 'required',
            'hiw_new_description' => 'required',

        ]);

         // Handle file upload
         $request->hasFile('hiw_new_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_new_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_new_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_new_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwnew = new HIWNew;
        $hiwnew->hiw_new_image_mobile= $fileNameToStore;
        $hiwnew->hiw_new_title = $request->input('hiw_new_title');
        $hiwnew->hiw_new_description = $request->input('hiw_new_description');
        $hiwnew->user_id = auth()->user()->id;
        $hiwnew->save();

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
        $hiwnew = HIWNew::find($id);

        // Check for correct user
        if(auth()->user()->id !== $hiwnew->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.hiw.new.edit')->with('hiwnew',$hiwnew);
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
            'hiw_new_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_new_title' => 'required',
            'hiw_new_description' => 'required',
        ]);

         // Handle file upload
         $request->hasFile('hiw_new_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_new_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_new_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_new_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwnew = HIWNew::find($id);
        $hiwnew->hiw_new_image_mobile= $fileNameToStore;
        $hiwnew->hiw_new_title = $request->input('hiw_new_title');
        $hiwnew->hiw_new_description = $request->input('hiw_new_description');
        $hiwnew->save();

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
        $hiwnew = HIWNew::find($id);
         // Check for correct user
         if(auth()->user()->id !== $hiwnew->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $hiwnew->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
