<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HIWWeb;
use Illuminate\Support\Facades\Storage;

class HIWWebController extends Controller
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
     * Show the form for creating a web resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages_backend.hiw.web.create');
    }

    /**
     * Store a webly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'hiw_web_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_web_title' => 'required',
            'hiw_web_description' => 'required',

        ]);

         // Handle file upload
         $request->hasFile('hiw_web_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_web_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_web_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_web_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwweb = new HIWWeb;
        $hiwweb->hiw_web_image_mobile= $fileNameToStore;
        $hiwweb->hiw_web_title = $request->input('hiw_web_title');
        $hiwweb->hiw_web_description = $request->input('hiw_web_description');
        $hiwweb->user_id = auth()->user()->id;
        $hiwweb->save();

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
        $hiwweb = HIWWeb::find($id);

        // Check for correct user
        if(auth()->user()->id !== $hiwweb->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.hiw.web.edit')->with('hiwweb',$hiwweb);
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
            'hiw_web_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_web_title' => 'required',
            'hiw_web_description' => 'required',
        ]);

         // Handle file upload
         $request->hasFile('hiw_web_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_web_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_web_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_web_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwweb = HIWWeb::find($id);
        $hiwweb->hiw_web_image_mobile= $fileNameToStore;
        $hiwweb->hiw_web_title = $request->input('hiw_web_title');
        $hiwweb->hiw_web_description = $request->input('hiw_web_description');
        $hiwweb->save();

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
        $hiwweb = HIWWeb::find($id);
         // Check for correct user
         if(auth()->user()->id !== $hiwweb->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $hiwweb->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
