<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MVTD;

class MVTDController extends Controller
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
        return view('pages_backend.mv.title.create');
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
            'mv_td_title' => 'required',
            'mv_td_head_title' => 'required',
            'mv_td_description' => 'required',
        ]);

        // Create post
        $mvtd = new MVTD;
        $mvtd->mv_td_title = $request->input('mv_td_title');
        $mvtd->mv_td_head_title = $request->input('mv_td_head_title');
        $mvtd->mv_td_description = $request->input('mv_td_description');
        $mvtd->user_id = auth()->user()->id;
        $mvtd->save();

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
        $mvtd = MVTD::find($id);

        // Check for correct user
        if(auth()->user()->id !== $mvtd->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.mv.title.edit')->with('mvtd',$mvtd);
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
            'mv_td_title' => 'required',
            'mv_td_head_title' => 'required',
            'mv_td_description' => 'required',
        ]);

        // Create post
        $mvtd = MVTD::find($id);
        $mvtd->mv_td_title = $request->input('mv_td_title');
        $mvtd->mv_td_head_title = $request->input('mv_td_head_title');
        $mvtd->mv_td_description = $request->input('mv_td_description');
        $mvtd->save();

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
        $mvtd = MVTD::find($id);
         // Check for correct user
         if(auth()->user()->id !== $mvtd->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        

        $mvtd->delete();
        return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
