<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icon;
use Illuminate\Support\Facades\Storage;

class IconController extends Controller
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
        return view('pages_backend.icon.create');
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
            'icon_image' => 'image|nullable|max:1999|required',
            'icon_image2' => 'image|nullable|max:1999|required'
        ]);

        if($request->hasFile('icon_image')){
            // Get filename with the extension
        $filenameWithExt = $request->file('icon_image')->getClientOriginalName();
        // Get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('icon_image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload the image
        $path = $request->file('icon_image')->storeAs('public/icon/', $fileNameToStore);

        }

        if($request->hasFile('icon_image2')){
            // Get filename with the extension
        $filenameWithExt = $request->file('icon_image2')->getClientOriginalName();
        // Get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('icon_image2')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
        // Upload the image
        $path = $request->file('icon_image2')->storeAs('public/icon/', $fileNameToStore2);

        }
        

       
        
         

        // Create post
        $icon = new Icon;
        $icon->icon_image = $fileNameToStore;
        $icon->icon_image2 = $fileNameToStore2;
        $icon->user_id = auth()->user()->id;
        $icon->save();

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
        $icon = Icon::find($id);

        // Check for correct user
        if(auth()->user()->id !== $icon->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.icon.edit')->with('icon',$icon);
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
            'icon_image' => 'image|nullable|max:1999|required',
            'icon_image2' => 'image|nullable|max:1999|required'
        ]);

        if($request->hasFile('icon_image')){
            // Get filename with the extension
        $filenameWithExt = $request->file('icon_image')->getClientOriginalName();
        // Get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('icon_image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload the image
        $path = $request->file('icon_image')->storeAs('public/icon/', $fileNameToStore);

        }

        if($request->hasFile('icon_image2')){
            // Get filename with the extension
        $filenameWithExt = $request->file('icon_image2')->getClientOriginalName();
        // Get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('icon_image2')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
        // Upload the image
        $path = $request->file('icon_image2')->storeAs('public/icon/', $fileNameToStore2);

        }
         

        // Create post
        $icon = Icon::find($id);
        $icon->icon_image = $fileNameToStore;
        $icon->icon_image2 = $fileNameToStore2;
        $icon->save();
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
        $icon = Icon::find($id);
         // Check for correct user
         if(auth()->user()->id !== $icon->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

       
        Storage::delete('public/icon/'.$icon->icon_image);
        Storage::delete('public/icon/'.$icon->icon_image2);
        

        $icon->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
