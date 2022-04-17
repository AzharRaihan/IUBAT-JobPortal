@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<link rel="stylesheet" href="{{ asset('assets/website/css/company-user-dashboard.css') }}">
@endpush
@section('page-content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- Company Sidebar -->
          @include('layouts.company.company-sidebar')
        </div>
        <div class="col-md-8">
          <!-- Edit Profile Tab -->
          <div class="card p-3">
            <form action="{{ route('company.update-profile') }}" method="POST">
              @csrf
              @method('put')
              <h5 class="pb-2 border-bottom"><b>Update Company Profile</b></h4>
              <div class="heading py-2">
                <h5><b>Account Info</b></h5>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="" value="{{ Auth::user()->email }}">
                </div>
              </div>
              <div class="heading py-2">
                <h5><b>Company Details Info</b></h5>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="company_name" class="form-label">CompanyName</label>
                  <input type="text" class="form-control" name="company_name" id="company_name" value="">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="" class="form-label">New Entrepreneur ?</label>
                  <div aria-label="Basic radio toggle button group">

                    <input type="radio" class="btn-check" name="entrepreneur" id="yes">
                    <label class="btn btn-outline-primary" for="yes" ><i class="bi bi-check-circle"></i> Yes</label>
                  
                    <input type="radio" class="btn-check" name="entrepreneur" id="no">
                    <label class="btn btn-outline-primary" for="no"><i class="fas fa-exclamation-circle"></i> No</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Trade License No</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Website URL</label>
                  <input type="email" class="form-control" name="email" id="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Industry Type</label>
                  <select class="form-control" name="name" id="name">
                    <option>Select--</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Thana</label>
                  <select class="form-control" name="email">
                    <option>Select--</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Company Size</label>
                  <select class="form-control" name="name" id="name">
                    <option>Select--</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Thana</label>
                  <select class="form-control" name="email">
                    <option>Select--</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="bio" class="form-label"><Address></Address> <span class="text-muted">Max 200 chr</span></label>
                <textarea type="text" class="form-control" name="bio" id="bio">{{ Auth::user()->bio }}</textarea>
              </div>
              <button type="submit" class="btn site-btn"><i class="fal fa-arrow-circle-up"></i> Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
@endpush