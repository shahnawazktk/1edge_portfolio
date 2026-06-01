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
        $footerData = $this->getFooterData();
        return view('welcome', compact('footerData'));
    }
    
    /**
     * Get footer data for all pages.
     *
     * @return array
     */
    private function getFooterData()
    {
        return [
            'company' => [
                'name' => '1Edge Technologies',
                'logo' => 'assets/images/1edgeLogo-06.png',
                'description' => 'Innovative IT solutions for modern businesses',
                'copyright_year' => date('Y'),
            ],
            'contact' => [
                'phone' => '03499088073',
                'email' => 'info@1edge.com',
                'address' => 'Peshawar, Pakistan',
            ],
            'social_media' => [
                ['name' => 'Facebook', 'icon' => 'assets/images/fb.png', 'url' => 'https://facebook.com/1edge'],
                ['name' => 'Twitter', 'icon' => 'assets/images/twitter.png', 'url' => 'https://twitter.com/1edge'],
                ['name' => 'LinkedIn', 'icon' => 'assets/images/linkedin.png', 'url' => 'https://linkedin.com/company/1edge'],
                ['name' => 'Instagram', 'icon' => 'assets/images/insta.png', 'url' => 'https://instagram.com/1edge'],
            ],
            'quick_links' => [
                ['name' => 'Home', 'url' => '/'],
                ['name' => 'About Us', 'url' => '/about'],
                ['name' => 'Products', 'url' => '/product'],
                ['name' => 'Services', 'url' => '/service'],
                ['name' => 'Contact Us', 'url' => '/contact'],
            ],
            'services' => [
                ['name' => '1School', 'url' => '/services/1school'],
                ['name' => '1Station', 'url' => '/services/1station'],
                ['name' => 'Hospital Management', 'url' => '/services/hospital-management'],
            ],
        ];
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $footerData = $this->getFooterData();
        return view('about', compact('footerData'));
    }

    /**
     * Display the product page.
     *
     * @return \Illuminate\View\View
     */
    public function product()
    {
        $footerData = $this->getFooterData();
        return view('product', compact('footerData'));
    }

    /**
     * Display the services page.
     *
     * @return \Illuminate\View\View
     */
    public function service()
    {
        $footerData = $this->getFooterData();
        return view('services', compact('footerData'));
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $footerData = $this->getFooterData();
        return view('contact', compact('footerData'));
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
