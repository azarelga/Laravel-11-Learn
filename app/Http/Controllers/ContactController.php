<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function show()
    {
        return view('contact');
    }

    // Handle form submission and validation
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Logic for handling the submission (e.g., sending email)
        // In this example, we'll just redirect back with a success message
        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}
