<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscriber;

class AdminDashboardController extends Controller
{
    public function starterPage()
    {
        return view('admin.demo');
    }
    public function dashboard()
    {
        // return view('admin.dashboard');
        return view('admin.dashboard');
    }
    public function user()
    {
        $data = [];
        $data['users']=User::latest()->get();
        return view('admin.user.index', $data);
    }
    public function createUser()
    {
        return view('admin.user.create-and-edit');
    }
    public function roleCreate()
    {
        return view('admin.roles.create-and-edit');
    }
    public function role()
    {
        return view('admin.roles.index');
    }
    public function dataTable()
    {
        return view('admin.datatable');
    }

    public function setting()
    {
        return view('admin.setting.add-edit');
    }
    public function subscribers()
    {
        $data['subscribers'] = Subscriber::latest()->get();
        return view('admin.subscriber', $data);
    }
    public function subscriberDestroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        notify()->success('Delete', 'Subscriber Deleted', );
        return back();
    }
    public function contacts()
    {
        $data['contacts'] = Contact::latest()->get();
        return view('admin.contact', $data);
    }
    public function contactShow($id)
    {
        $data['contact'] = Contact::findOrFail($id);
        return view('admin.contact-show', $data);
    }
    public function contactDestroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        notify()->success('Delete', 'Contact Deleted', );
        return back();
    }
}
