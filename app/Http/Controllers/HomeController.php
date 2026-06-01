<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the product page.
     *
     * @return \Illuminate\View\View
     */
    public function product()
    {
        return view('product');
    }

    /**
     * Display the services page.
     *
     * @return \Illuminate\View\View
     */
    public function service()
    {
        return view('services');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'Message cannot exceed 2000 characters.',
        ]);

        try {
            // Save to database
            Contact::create($validated);

            // You can also add email notification here
            // Mail::to('info@1edge.com')->send(new ContactFormMail($validated));

            return redirect()->route('contact')->with('success', 'Thank you for contacting 1Edge! Our representative will call you shortly.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
