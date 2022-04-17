<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CompanyDashboardController extends Controller
{
    public function dashboard()
    {
        return view('company.company-dashboard');
    }
    public function updateAvater(Request $request)
    {
        // Get Logedin company
        $company = Auth::user();
        if ($request->hasfile('profile_photo'))
        {
            $profile_photo_path = public_path('company/profile-pic/' . $company->profile_photo);
            // Find and Delete Old Image
            if (File::exists($profile_photo_path)) {
                File::delete($profile_photo_path);
            }
            $file = $request->file('profile_photo');
            $extension = $file->extension();
            $filename =  time() . '.' . $extension;
            $file->move('company/profile-pic/', $filename);
        } else {
            $filename = $company->profile_photo;
        }
        $company->update([
            'profile_photo'=>$filename
        ]);
        notify()->success('Company Successfully Updated.', 'Updated');
        return back();
    }

    // Change Password
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed',

        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }
    // Edit Profile
    public function editProfile(Request $request)
    {
        $company = Auth::user();
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'bio' => $request->bio,
        ]);
        notify()->success('Company Successfully Updated.', 'Updated');
        return back();
    }
    // Setting
    public function setting(Request $request)
    {
        //
    }


    
}
