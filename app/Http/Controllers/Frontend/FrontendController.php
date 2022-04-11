<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
