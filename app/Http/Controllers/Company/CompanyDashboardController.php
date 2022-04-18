<?php

namespace App\Http\Controllers\Company;

use App\Models\User;
use App\Models\Company;
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
            $profile_photo_path = public_path('uploads/company/profile-pic/' . $company->profile_photo);
            // Find and Delete Old Image
            if (File::exists($profile_photo_path)) {
                File::delete($profile_photo_path);
            }
            $file = $request->file('profile_photo');
            $extension = $file->extension();
            $filename =  time() . '.' . $extension;
            $file->move('uploads/company/profile-pic/', $filename);
        } else {
            $filename = $company->profile_photo;
        }
        $company->update([
            'profile_photo'=>$filename
        ]);
        notify()->success('Updated','Successfully Updated');
        return back();
    }
    public function editProfile()
    {
        $companyInfo = Company::where('user_id', Auth::user()->id)->first();
        return view('company.company-profile-edit', compact('companyInfo'));
    }
    // Edit Profile
    public function profileUpdate(Request $request)
    {
        $companyAuth = Auth::user();
        $companyInfo = Company::where('user_id', $companyAuth->id)->first();
        $companyAuth->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        if($companyInfo == null){
            Company::updateOrCreate([
                'user_id' => $companyAuth->id,
                'company_name' => $request->company_name,
                'entrepreneur' => $request->entrepreneur,
                'company_address' => $request->company_address,
                'employee_size' => $request->employee_size,
                'thana' => $request->thana,
                'district' => $request->district,
                'trade_license' => $request->trade_license,
                'industry' => $request->industry,
                'website_url' => $request->website_url,
            ]);
        }else{
            $companyInfo->update([
                'user_id' => Auth::user()->id,
                'company_name' => $request->company_name,
                'entrepreneur' => $request->entrepreneur,
                'company_address' => $request->company_address,
                'employee_size' => $request->employee_size,
                'thana' => $request->thana,
                'district' => $request->district,
                'trade_license' => $request->trade_license,
                'industry' => $request->industry,
                'website_url' => $request->website_url,
            ]);
        }

        notify()->success('Updated','Successfully Updated');
        return back();
    }
    public function changePassword()
    {
        return view('company.company-change-password');
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
                notify()->success('Success','Password Successfully Changed');
                return redirect()->route('login');
            } else {
                notify()->warning('Warning', 'New password cannot be the same as old password');
            }
        } else {
            notify()->error('Error','Current password not match');
        }
        return redirect()->back();
    }


    
}
