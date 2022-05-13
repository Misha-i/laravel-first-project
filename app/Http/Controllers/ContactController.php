<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;

class ContactController extends Controller
{
    public function home(){
        return view('NewDataPeople.home');
    }
    
    public function index(){
        $contact = new Contact();
        Paginator::useBootstrap();
        return view('NewDataPeople.table', ['contact_data' => Contact::paginate()]);
    }
    
    public function create(){
        return view('NewDataPeople.contact');
    }
    
    public function about(){
        return view('NewDataPeople.about');
    }

    public function submit(ContactRequest $request) {
        $contact = new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');
        $contact->save();

        return redirect()->route('table1')->with('success', 'Повідомлення було відправленно');
    }
    
    public function showOne($id, Contact $data)
    {
        $contact = Contact::where('id', $id)->first();
        return view('NewDataPeople.one-message', ['data' => $contact]);
    }
    
    public function update($id) {
        $car = new Contact();
        $car = Contact::where('id', $id)->first();
        return view('NewDataPeople.update-message', ['data' => $car]);
    }
    
    public function update_submit($id, ContactRequest $request) {
        $contact = Contact::find($id);
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');
        $contact->save();

        return redirect()->route('table1')->with('success', 'Повідомлення було оновлено');
    }

    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->route('table1')->with('success', 'Повідомлення було видалено');
    }

    public function name() {
        $contact = Contact::find(1);
        return $contact->car->title;
    }
}
