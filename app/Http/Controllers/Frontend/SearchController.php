<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Company;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    // Search By Company
    public function searchByCompany()
    {
        $data['companies'] = Company::with('jobPost')->latest()->paginate(10);
        return view('website.search-by-company', $data);
    }

    public function searchByWord(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('searc_word');
        // Search in the title
        $companies = Company::with('jobPost')->where('company_name', 'LIKE', "{$search}%")->paginate(10);
        // Return the search view with the resluts compacted
        return view('website.search-by-company', compact('companies'));
    
    }

    public function companyJobPosts($id)
    {
        $data['companyName'] = Company::where('id', $id)->first();
        $data['jobPosts'] = JobPost::with('company')->where('company_id', $id)->get();
        return view('website.company-job-posts', $data);
    }

}
