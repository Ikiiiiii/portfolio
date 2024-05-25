<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function show(){
        $data['contact'] = Contact::all();
        return view('contact', $data);
    }

    // function add(){
    //     $data = [
    //         'action' => url('contact/create'),
    //         'contact' => (object)[
    //             'nama' => '',
    //             'email' => '',
    //             'pesan' => ''
    //         ],
    //     ];
    //     return view('contact', $data);
    // }

    function create(request $req){
        Contact::create([
            'nama' => $req-> nama,
            'email' => $req-> email,
            'pesan' => $req-> pesan,
        ]);
        return redirect('/');
    }

    function delete($id){
        $contact = Contact::where('id',$id)->first();
        $contact->delete();
        return redirect('contact');
    }
}
