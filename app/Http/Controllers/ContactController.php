<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
            'check' => 'required|numeric'
        ]);
        Contact::create($request->all());
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
