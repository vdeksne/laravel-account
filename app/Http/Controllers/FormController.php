<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handleForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        return back()->with('success', 'Form submitted successfully!');
    }
}
