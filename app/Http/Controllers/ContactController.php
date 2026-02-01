<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:200',
            'message' => 'nullable|string|max:2000',
        ]);

        // Send email
        $recipient = config('mail.contact.address'); 
        
        \Illuminate\Support\Facades\Log::info('Submitting contact form', ['validated_data' => $validated, 'recipient' => $recipient]);

        try {
             Mail::to($recipient)->send(new ContactFormSubmitted($validated));
             return response()->json(['message' => 'Message sent successfully'], 200);
        } catch (\Exception $e) {
             \Illuminate\Support\Facades\Log::error('Contact form error: ' . $e->getMessage());
             \Illuminate\Support\Facades\Log::error($e->getTraceAsString()); // Log full trace
             return response()->json(['message' => 'Error sending message', 'error' => $e->getMessage()], 500);
        }
    }
}
