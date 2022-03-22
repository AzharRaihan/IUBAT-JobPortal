<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function dashboard(){
        return view('admin.lte-dashboard');
    }
    public function user(){
        $data = [];
        $data['users']=User::latest()->get();
        return view('admin.user.index', $data);
    }
    public function createUser(){
        return view('admin.user.create-and-edit');
    }
    public function roleCreate(){
        return view('admin.roles.create-and-edit');
    }
    public function role(){
        return view('admin.roles.index');
    }
}
