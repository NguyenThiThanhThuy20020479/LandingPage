<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $contact = Contact::all();

      return view('list', [
          'contact' => $contact
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('welcome');
    }

    /**
     * Store a newly created or update resource in storage.
     */
    public function store(Request $request, $id = null)
    {
      $id == null ? $contact = new Contact() : $contact = Contact::find($id);
      $contact->first_name = $request->input('first_name');
      $contact->last_name = $request->input('last_name');
      $contact->email = $request->input('email');
      $contact->phone_number = $request->input('phone_number');
      $contact->address = $request->input('address');
      // validate name and address 
      $validator = Validator::make($request->all(),[
      'first_name' => 'required', 
      'last_name' => 'required',
      'address' => 'required', 
      ]);
      if ($validator->fails()) { 
        return response()->json([ 'error'=> $validator->errors() ]);
      }
      // validate phone number
      $validatePhoneNumber = Validator::make($request->all(),[
        'phone_number' => 'required|regex:/^[0-9]{10}$/'
      ]);
      if ($validatePhoneNumber->fails()) {
        return response()->json(['error' => 'Error phone number']);
      }
      // validate email
      $validateEmail = Validator::make($request->all(), [
        'email' => 'required|regex:/(.+)@(.+)\.(.+)/i'
      ]);
      if ($validateEmail->fails()) {
        return response()->json(['error' => 'Error email']);
      }
      $contact->save();
      
      return redirect('list');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $contact = Contact::findOrFail($id);

      return view('detail', [
        'contact' => $contact
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id )
    {
      $contact = Contact::findOrFail($id);

      return view('edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $this->store($request, $id);
      
      return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $contact = Contact::findOrFail($id);
      $contact->delete();

      return redirect('list');
    }
}
