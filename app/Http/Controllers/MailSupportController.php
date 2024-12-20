<?php

namespace App\Http\Controllers;

use App\Models\MailSupport;
use Illuminate\Http\Request;

class MailSupportController extends Controller
{
    public function store(Request $request)
    {
        $validData = $request->validate([
            'username' => 'string|required|max:255',
            'phone' => 'string|required|regex:/^\+?[0-9]{10,15}$/|max:15',
            'address' => 'string|max:255',
            'message' => 'string|required',
        ]);

        MailSupport::create($validData);

        return redirect('/')->with('success', 'Your message has been sent!');
    }
    
}
