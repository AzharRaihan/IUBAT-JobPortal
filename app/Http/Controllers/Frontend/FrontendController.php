<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Index/Home Page
    public function index()
    {
        return view('frontend.index');
    }
    // Career
    public function careers()
    {
        return view('frontend.careers');
    }
    // Career Details
    public function careerDetails()
    {
        return view('frontend.career-details');
    }
    // Category Page
    public function categoryPage()
    {
        return view('frontend.category-page');
    }
    // Contact
    public function contact()
    {
        return view('frontend.contact');
    }
    // Job Apply
    public function jobApply()
    {
        return view('frontend.job-apply');
    }
    // Main Category
    public function mainCategory()
    {
        return view('frontend.main-category');
    }
    // News
    public function news()
    {
        return view('frontend.news');
    }
    // News
    public function newsDetails()
    {
        return view('frontend.news-details');
    }
    // Product Inpection
    public function productInspection()
    {
        return view('frontend.product-inspection');
    }
    // Team
    public function team()
    {
        // return view('frontend.team');
        return view('auth.company-register');
    }
    // Testimonial
    public function testimonial()
    {
        return view('frontend.testimonial');
    }

}
