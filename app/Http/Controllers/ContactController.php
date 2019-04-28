<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
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
        return view('pages_backend.contact.create');
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
            'contact_address' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_instagram' => 'required',
            'contact_facebook' => 'required',
            'contact_twitter' => 'required',
        ]);

        // Create post
        $contact = new Contact;
        $contact->contact_address = $request->input('contact_address');
        $contact->contact_email = $request->input('contact_email');
        $contact->contact_phone = $request->input('contact_phone');
        $contact->contact_instagram = $request->input('contact_instagram');
        $contact->contact_facebook = $request->input('contact_facebook');
        $contact->contact_twitter = $request->input('contact_twitter');
        $contact->user_id = auth()->user()->id;
        $contact->save();

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
        $contact = Contact::find($id);

        // Check for correct user
        if(auth()->user()->id !== $contact->user_id){
            return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
        }

        return view('pages_backend.contact.edit')->with('contact',$contact);
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
            'contact_address' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_instagram' => 'required',
            'contact_facebook' => 'required',
            'contact_twitter' => 'required',
        ]);

        // Create post
        $contact = Contact::find($id);
        $contact->contact_address = $request->input('contact_address');
        $contact->contact_email = $request->input('contact_email');
        $contact->contact_phone = $request->input('contact_phone');
        $contact->contact_instagram = $request->input('contact_instagram');
        $contact->contact_facebook = $request->input('contact_facebook');
        $contact->contact_twitter = $request->input('contact_twitter');
        $contact->save();

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
        $contact = Contact::find($id);
        // Check for correct user
        if(auth()->user()->id !== $contact->user_id){
           return redirect('/login-admin-panelpage')->with('error', 'Unauthorized Page!');    
       }

       

       $contact->delete();
       return redirect('/home-admin')->with('success', 'Data Deleted');
    }
}
