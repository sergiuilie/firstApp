<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class ContactsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contacts = \App\Models\UserContacts::where('user_id', \Auth::user()->id);
        return view('modules.contacts.index')
                        ->with('contacts', $contacts->paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Contacts\CreateContactRequest $request) {
        \App\Models\UserContacts::firstOrCreate([
            'user_id' => \Auth::user()->id,
            'reference_user_id' => $request->input('id')
        ]);


        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\UserContacts $contact) {
        $contact->delete();

        return response()->json(TRUE);
    }

}
