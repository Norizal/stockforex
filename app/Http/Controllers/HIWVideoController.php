<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HIWVideo;
use Illuminate\Support\Facades\Storage;

class HIWVideoController extends Controller
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
     * Show the form for creating a video resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages_backend.hiw.video.create');
    }

    /**
     * Store a videoly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'hiw_video_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_video_title' => 'required',
            'hiw_video_description' => 'required',

        ]);

         // Handle file upload
         $request->hasFile('hiw_video_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_video_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_video_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_video_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwvideo = new HIWVideo;
        $hiwvideo->hiw_video_image_mobile= $fileNameToStore;
        $hiwvideo->hiw_video_title = $request->input('hiw_video_title');
        $hiwvideo->hiw_video_description = $request->input('hiw_video_description');
        $hiwvideo->user_id = auth()->user()->id;
        $hiwvideo->save();

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
        $hiwvideo = HIWVideo::find($id);

        // Check for correct user
        if(auth()->user()->id !== $hiwvideo->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.hiw.video.edit')->with('hiwvideo',$hiwvideo);
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
            'hiw_video_image_mobile' => 'image|nullable|max:1999|required',
            'hiw_video_title' => 'required',
            'hiw_video_description' => 'required',
        ]);

         // Handle file upload
         $request->hasFile('hiw_video_image_mobile');
         // Get filename with the extension
         $filenameWithExt = $request->file('hiw_video_image_mobile')->getClientOriginalName();
         // Get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //Get just ext
         $extension = $request->file('hiw_video_image_mobile')->getClientOriginalExtension();
         // Filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         // Upload the image
         $path = $request->file('hiw_video_image_mobile')->storeAs('public/hiw/', $fileNameToStore);
          

        // Create post
        $hiwvideo = HIWVideo::find($id);
        $hiwvideo->hiw_video_image_mobile= $fileNameToStore;
        $hiwvideo->hiw_video_title = $request->input('hiw_video_title');
        $hiwvideo->hiw_video_description = $request->input('hiw_video_description');
        $hiwvideo->save();

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
        $hiwvideo = HIWVideo::find($id);
         // Check for correct user
         if(auth()->user()->id !== $hiwvideo->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $hiwvideo->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
