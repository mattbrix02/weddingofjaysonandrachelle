<?php

namespace App\Http\Controllers;

use App\Models\RSVP;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RSVPController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'email' => 'required|email|unique:rsvps|max:255',
            'number' => 'required|string|max:20',
            'Accept' => 'required|boolean',
        ]);

        try {
            RSVP::create($validated);

            return redirect()->back()->with('success', 'Thank you for your RSVP!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again. Please notify your admin and provide this screenshot!');
        }
    }
}
