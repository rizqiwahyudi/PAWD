<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where('user_id', Auth::user()->id)->get();
        return view('pages.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'web' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        $contact = Contact::create($data);

        if ($contact) {
            return redirect()->route('contacts.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('pages.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('pages.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'web' => 'required',
        ]);

        $data = $request->all();

        $upCon = $contact->update($data);

        if ($upCon) {
            return redirect()->route('contacts.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $delCon = $contact->delete();

        if ($delCon) {
            return redirect()->route('contacts.index');
        }
    }
}
