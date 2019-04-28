<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MVMM;
use Illuminate\Support\Facades\Storage;

class MVMMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        // $mvmms = MVMM::orderBy('created_at', 'desc');
        // return view('/home-admin')->with('mvmms', $mvmms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages_backend.mv.mobile.create');
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
            'mv_mm_image_mobile' => 'image|nullable|max:1999|required'
        ]);

        // Handle file upload
        $request->hasFile('mv_mm_image_mobile');
        // Get filename with the extension
        $filenameWithExt = $request->file('mv_mm_image_mobile')->getClientOriginalName();
        // Get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('mv_mm_image_mobile')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload the image
        $path = $request->file('mv_mm_image_mobile')->storeAs('public/mv/mobile/', $fileNameToStore);
         

        // Create post
        $mvmm = new MVMM;
        $mvmm->mv_mm_image_mobile = $fileNameToStore;
        $mvmm->user_id = auth()->user()->id;
        $mvmm->save();

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
        $mvmm = MVMM::find($id);

        // Check for correct user
        if(auth()->user()->id !== $mvmm->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.mv.mobile.edit')->with('mvmm',$mvmm);
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
            'mv_mm_image_mobile' => 'image|nullable|max:1999|required'
        ]);

        // Handle file upload
        $request->hasFile('mv_mm_image_mobile');
        // Get filename with the extension
        $filenameWithExt = $request->file('mv_mm_image_mobile')->getClientOriginalName();
        // Get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('mv_mm_image_mobile')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload the image
        $path = $request->file('mv_mm_image_mobile')->storeAs('public/mv/mobile/', $fileNameToStore);
         

        // Create post
        $mvmm = MVMM::find($id);
        $mvmm->mv_mm_image_mobile = $fileNameToStore;
        $mvmm->save();
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
        $mvmm = MVMM::find($id);
         // Check for correct user
         if(auth()->user()->id !== $mvmm->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

       
        Storage::delete('public/mv/mobile/'.$mvmm->mv_mm_image_mobile);
        

        $mvmm->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
