<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts =Contact::all();
        return view('contact-list', compact('contacts'));
    }

    public function contact(){
        return view('contact');
    }


public function store(Request $request){

    $contact = new Contact ;

    $contact->fName = $request->firstName;
    $contact->lName = $request->lastName;
    $contact->email = $request->email;

    $contact->save();

    return redirect()->back();
}

public function delete($contact){

    Contact::where('id', $contact)->delete();

    return redirect()->back();

    }

    // public function edit($contact){


    //    Contact::where('active', 1)
    //    ->where('destination', '');



    //     // Contact::where('id', $contact)->edit();

    //     // return view('contact-list', compact('contacts'));

    //     // return redirect()->back();

    // }

    public function edit(Request $request){

        $contact = new Contact ;

        $contact->fName = $request->firstName;
        $contact->lName = $request->lastName;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->back();
    }


}

