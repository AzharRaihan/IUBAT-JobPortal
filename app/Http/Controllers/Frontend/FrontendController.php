<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscriber;

class FrontendController extends Controller
{
    // Index/Home Page
    public function index()
    {
        return view('website.index');
    }
    // Search By Company
    public function searchByCompany()
    {
        return view('website.search-by-company');
    }
    // Contact 
    public function contact()
    {
        return view('website.contact-page');
    }
    public function contactSend(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:55',
            'email' => 'required|email|max:55',
            'subject' => 'required|max:255',
            'message' => 'required|max:500',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        notify()->success('Success', 'Contact Submitted');
        return back();
    }
    public function subscriberStore(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:55|unique:subscribers,email',
        ]);
        Subscriber::create([
            'email' => $request->email
        ]);
        notify()->success('Success', 'Successfully Subscribed');
        return back();
    }
    public function category()
    {
        return view('website.category-details');
    }
}
