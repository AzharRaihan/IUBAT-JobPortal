<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Company;
use App\Models\Contact;
use App\Models\JobPost;
use App\Models\ApplyJob;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    // Index/Home Page
    public function index()
    {
        $data['categories'] = Category::withCount('jobPost')->whereHas('jobPost', function ($query) {
            return $query->where('status', 1)->where('is_published', 1);
        })->where('status', 1)->orderBy('category_name')->take(36)->get();

        $data['jobPosts'] = JobPost::where('status',1)->where('is_published',1)->latest()->take(40)->get();
        $data['companyGovts'] = JobPost::where([['company_type','GOVT'],['status',1],['is_published',1]])
        ->latest()->take(4)->get();
        $data['companyPvts'] = JobPost::where([['company_type','PVT'],['status',1],['is_published',1]])
        ->latest()->take(4)->get();
        $data['companyCount'] = Company::count();
        $data['jobPostCount'] = JobPost::count();
        return view('website.index', $data);
    }
    public function governmentCompany()
    {
        $data['companyTypeName'] = 'Government';
        $data['companyType'] = JobPost::with('company')->where('company_type', 'GOVT')->get();
        return view('website.company-type', $data);

    }
    public function privateCompany()
    {
        $data['companyTypeName'] = 'Private';
        $data['companyType'] = JobPost::with('company')->where('company_type', 'PVT')->get();
        return view('website.company-type', $data);
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
        $jobPosts = JobPost::where('category_id', $id)->where('status', 1)->where('is_published', 1)->latest()->get();
        return view('website.category-details', compact('jobPosts'));
    }
    public function jobPostDetails($id)
    {
        $jobPost = JobPost::with('company')->where('id',$id)->first();
        return view('website.jobpost-details', compact('jobPost'));
    }


    public function applyTheJob($id)
    {
        if(Auth::user()){
            $authId = Auth::user()->id;
            $companyGet = User::where('id', $authId)->first();
            if($companyGet->role_id != 2 ){
                $findJob = JobPost::findOrFail($id);
                ApplyJob::create([
                    'company_id' => $findJob->company_id,
                    'company_name' => $findJob->company_name,
                    'user_id' => Auth::user()->id,
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                ]);
                notify()->success("Success", "Successfully Apply");
                return back();
            }else{
                notify()->error("Error", "Company Can't Apply The Job !!!");
                return back();
            }

        }else{
            notify()->info('Info', 'Please Login Firs');
            return back();
        }
    }
}
