<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HIWNoti;
use Illuminate\Support\Facades\Storage;

class HIWNotiController extends Controller
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
     * Show the form for creating a noti resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages_backend.hiw.noti.create');
    }

    /**
     * Store a notily created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'hiw_noti_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_noti_title' => 'required',
            'hiw_noti_description' => 'required',

        ]);

         // Handle file upload
         $request->hasFile('hiw_noti_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_noti_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_noti_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_noti_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwnoti = new HIWNoti;
        $hiwnoti->hiw_noti_image_mobile= $fileNameToStore;
        $hiwnoti->hiw_noti_title = $request->input('hiw_noti_title');
        $hiwnoti->hiw_noti_description = $request->input('hiw_noti_description');
        $hiwnoti->user_id = auth()->user()->id;
        $hiwnoti->save();

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
        $hiwnoti = HIWNoti::find($id);

        // Check for correct user
        if(auth()->user()->id !== $hiwnoti->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.hiw.noti.edit')->with('hiwnoti',$hiwnoti);
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
            'hiw_noti_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_noti_title' => 'required',
            'hiw_noti_description' => 'required',
        ]);

         // Handle file upload
         $request->hasFile('hiw_noti_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_noti_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_noti_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_noti_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwnoti = HIWNoti::find($id);
        $hiwnoti->hiw_noti_image_mobile= $fileNameToStore;
        $hiwnoti->hiw_noti_title = $request->input('hiw_noti_title');
        $hiwnoti->hiw_noti_description = $request->input('hiw_noti_description');
        $hiwnoti->save();

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
        $hiwnoti = HIWNoti::find($id);
         // Check for correct user
         if(auth()->user()->id !== $hiwnoti->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $hiwnoti->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
