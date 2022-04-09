<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserDashboardController extends Controller
{
    public function dashboard(){
        return view('user.user-dashboard');
    }
    public function updateAvater(Request $request)
    {
        // Get Logedin User
        $user = Auth::user();
        if ($request->hasfile('profile_photo'))
        {
            $profile_photo_path = public_path('users/profile-pic/' . $user->profile_photo);
            // Find and Delete Old Image
            if (File::exists($profile_photo_path)) {
                File::delete($profile_photo_path);
            }
            $file = $request->file('profile_photo');
            $extension = $file->extension();
            $filename =  time() . '.' . $extension;
            $file->move('users/profile-pic/', $filename);
        } else {
            $filename = $user->profile_photo;
        }
        $user->update([
            'profile_photo'=>$filename
        ]);
        



        // dd('success');

        // notify()->success('User Successfully Updated.', 'Updated');
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
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'bio' => $request->bio,
        ]);
        return back();
    }
    // Setting
    public function setting(Request $request)
    {
        //
    }
}
