<?php

namespace App\Http\Controllers\Company;

use App\Models\User;
use App\Models\Thana;
use App\Models\Company;
use App\Models\JobPost;
use App\Models\District;
use App\Models\Industry;
use Illuminate\Support\Str;
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
        $data['companyInfo'] = Company::where('user_id', Auth::user()->id)->first();
        $data['districts'] = District::orderBy('district_name')->get();
        $data['thanas'] = Thana::orderBy('thana_name')->get();
        $data['industries'] = Industry::orderBy('industry_name')->get();
        return view('company.company-profile-edit', $data);
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
                'industry_id' => $request->industry_id,
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
                'industry_id' => $request->industry_id,
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


    // Create Job Post
    public function createJobPost()
    {
        return view('company.create-edit-job-post');
    }

    public function storeJobPost(Request $request)
    {

        $this->validate($request, [
            'job_title' => 'required|max:255',
            'company_name' => 'required|max:200',
            'job_location' => 'required|max:255',
            'published_on' => 'required|max:55',
            'deadline' => 'required|max:55',
            'req_degree' => 'required|max:300',
            'age' => 'required|max:100',
            'experience' => 'required|max:100',
            'employment_status' => 'required|max:100',
            'vacancy' => 'required|max:55',
            'salary' => 'required|max:8',
            'report' => 'required|max:300',
            'description' => 'required',
            'job_thumbnail' => 'required|mimes:jpg,bmp,png,jpeg',
        ]); 
        // Get Job Thumbnail for store
        if($request->hasfile('job_thumbnail'))
        {
            $file = $request->file('job_thumbnail');
            $extension = $file->extension();
            $fileName = time() . '.' . $extension;
        }
        // Get Body Data
        $content = $request->description;
        // Disable libxml errors and allow user to fetch error information
        libxml_use_internal_errors(true);
        // Body content object create
        $dom = new \DomDocument();
        // Load HTML from a string
        $dom->loadHtml('<?xml encoding="utf-8" ?>' . $content); //Language Support for Bangla
        // Get image name from summer note editor
        $imageFile = $dom->getElementsByTagName('imageFile');
        // Fetch Images And Store
        foreach($imageFile as $item => $image){
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "upload/" . time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        $content = $dom->saveHTML();

        $jobPost = new JobPost();
        $jobPost->job_title = $request->job_title;
        $jobPost->slug = Str::slug($request->job_title);
        $jobPost->company_name = $request->company_name;
        $jobPost->job_location = $request->job_location;
        $jobPost->published_on = $request->published_on;
        $jobPost->deadline = $request->deadline;
        $jobPost->req_degree = $request->req_degree;
        $jobPost->age = $request->age;
        $jobPost->experience = $request->experience;
        $jobPost->employment_status = $request->employment_status;
        $jobPost->vacancy = $request->vacancy;
        $jobPost->salary = $request->salary;
        $jobPost->report = $request->report;
        $jobPost->description = $request->description;
        $jobPost->job_thumbnail = $fileName;
        $jobPost->save();
        $file->move('uploads/job-thumbnail/', $fileName);
        notify()->success('Success','Successfully Created');
        return back();
    }

    public function editJobPost($id)
    {
        $jobPostEdit = JobPost::findOrFail($id);
        return view('company.create-edit-job-post', compact('jobPostEdit'));
    }

    public function updateJobPost(Request $request, $id)
    {
        $jobPostUp = JobPost::findOrFail($id);
        $jobPostSlug = Str::slug($request->job_title);
        // Job Thumbnail
        if ($request->hasfile('job_thumbnail')) {
            // Existing gallery thumbnail path
            $job_thumbnail_path = public_path('uploads/galleries/' . $jobPostUp->job_thumbnail);
            // Delete old thumbnail, If the thumbnail has
            if (File::exists($job_thumbnail_path)) {
                File::delete($job_thumbnail_path);
            }
            // New Gallery Avater store
            $file = $request->file('job_thumbnail');
            $extension = $file->extension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/job-thumbnail/', $fileName);
        } else {
            // Old Job Post thumbnail store
            $fileName = $jobPostUp->job_thumbnail;
        }
        // Get Body Data
        $content = $request->description;
        // Disable libxml errors and allow user to fetch error information
        libxml_use_internal_errors(true);
        // Body content object create
        $dom = new \DomDocument();
        // Load HTML from a string
        $dom->loadHtml('<?xml encoding="utf-8" ?>' . $content); //Language Support for Bangla
        // Get image name from summer note editor
        $imageFile = $dom->getElementsByTagName('imageFile');
        // Fetch Images And Store
        foreach($imageFile as $item => $image){
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "upload/" . time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        $content = $dom->saveHTML();
        $jobPostUp->update([
            'job_title' => $request->job_title,
            'slug' => $jobPostSlug,
            'company_name' => $request->company_name,
            'job_location' => $request->job_location,
            'published_on' => $request->published_on,
            'deadline' => $request->deadline,
            'req_degree' => $request->req_degree,
            'age' => $request->age,
            'experience' => $request->experience,
            'employment_status' => $request->employment_status,
            'vacancy' => $request->vacancy,
            'salary' => $request->salary,
            'report' => $request->report,
            'description' => $request->description,
            'job_thumbnail' => $fileName,
        ]);
        notify()->success('Update','Successfully Updated');
        return back();
    }

}
