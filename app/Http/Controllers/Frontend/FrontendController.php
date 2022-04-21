<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobPost;
use App\Models\Subscriber;

class FrontendController extends Controller
{
    // Index/Home Page
    public function index()
    {
        $data['categories'] = Category::where('status', 1)
        ->orderBy('category_name')->take(36)->get();
        $data['jobPosts'] = JobPost::where('status',1)->latest()->get();
        $data['companyGovts'] = JobPost::where(['company_type'=>'GOVT'],['status'=>true])
        ->latest()->take(4)->get();
        $data['companyPvts'] = JobPost::where(['company_type'=>'PVT'],['status'=>true])
        ->latest()->take(4)->get();
        return view('website.index', $data);
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
    public function category($id)
    {
        $jobPosts = JobPost::where('category_id', $id)->latest()->get();
        return view('website.category-details', compact('jobPosts'));
    }
    public function jobPostDetails($id)
    {
        $jobPost = JobPost::findOrFail($id);
        return view('website.jobpost-details', compact('jobPost'));
    }
}
