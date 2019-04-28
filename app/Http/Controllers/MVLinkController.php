<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MVLINK;

class MVLinkController extends Controller
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
        return view('pages_backend.mv.url.create');
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
            'mv_link_url_ios' => 'required',
            'mv_link_url_android' => 'required',
            'mv_link_url_youtube' => 'required',
        ]);

        // Create post
        $mvlink = new MVLINK;
        $mvlink->mv_link_url_ios = $request->input('mv_link_url_ios');
        $mvlink->mv_link_url_android = $request->input('mv_link_url_android');
        $mvlink->mv_link_url_youtube = $request->input('mv_link_url_youtube');
        $mvlink->user_id = auth()->user()->id;
        $mvlink->save();

        return redirect('/home-admin')->with('success', 'Data Created');  //
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
        $mvlink = MVLINK::find($id);

        // Check for correct user
        if(auth()->user()->id !== $mvlink->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.mv.url.edit')->with('mvlink',$mvlink);
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
            'mv_link_url_ios' => 'required',
            'mv_link_url_android' => 'required',
            'mv_link_url_youtube' => 'required',
        ]);

        // Create post
        $mvlink = MVLINK::find($id);
        $mvlink->mv_link_url_ios = $request->input('mv_link_url_ios');
        $mvlink->mv_link_url_android = $request->input('mv_link_url_android');
        $mvlink->mv_link_url_youtube = $request->input('mv_link_url_youtube');
        $mvlink->save();

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
        $mvlink = MVLINK::find($id);
        // Check for correct user
        if(auth()->user()->id !== $mvlink->user_id){
           return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
       }

       

       $mvlink->delete();
       return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
