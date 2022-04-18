@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<link rel="stylesheet" href="{{ asset('assets/website/css/company-user-dashboard.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
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
                  <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                </div>
              </div>
              <div class="heading py-2">
                <h5><b>Company Details Info</b></h5>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="company_name" class="form-label">CompanyName</label>
                  <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $companyInfo != null ? $companyInfo->company_name : '' }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="" class="form-label">New Entrepreneur ?</label>
                  <div aria-label="Basic radio toggle button group">

                    <input type="radio" class="btn-check" name="entrepreneur" id="yes" value="yes" {{ $companyInfo != null ? $companyInfo->entrepreneur == 'yes' ? 'checked' : '' : '' }}>
                    <label class="btn btn-outline-primary" for="yes" ><i class="bi bi-check-circle"></i> Yes</label>
                  
                    <input type="radio" class="btn-check" name="entrepreneur" id="no" value="no" {{ $companyInfo != null ? $companyInfo->entrepreneur == 'no' ? 'checked' : '' : '' }}>
                    <label class="btn btn-outline-primary" for="no"><i class="fas fa-exclamation-circle"></i> No</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="trade_license" class="form-label">Trade License No</label>
                  <input type="text" class="form-control" name="trade_license" id="trade_license" value="{{ $companyInfo != null ? $companyInfo->trade_license : '' }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="website-url" class="form-label">Website URL</label>
                  <input type="website_url" class="form-control" name="website_url" id="website-url" value="{{ $companyInfo != null ? $companyInfo->website_url : '' }}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="industry" class="form-label">Industry Type</label>
                  <select class="form-control" name="industry" id="industry">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="employee-size" class="form-label">Employee Size</label>
                  <select class="form-control" name="employee_size" id="employee-size">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="district" class="form-label">District</label>
                  <select class="form-control js-example-basic-single" name="district">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="thana" class="form-label">Thana</label>
                  <select class="form-control js-example-basic-single" name="thana">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="company_address" class="form-label"><Address></Address> <span class="text-muted">Max 200 chr</span></label>
                <textarea type="text" class="form-control" name="company_address" id="company_address">{{ $companyInfo != null ? $companyInfo->company_address : '' }}</textarea>
              </div>
              <button type="submit" class="btn site-btn"><i class="fal fa-arrow-circle-up"></i> Update</button>
            </form>
          </div>
          <!-- Edit Profile Tab -->
          {{-- <div class="card p-3">
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
                  <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                </div>
              </div>
              <div class="heading py-2">
                <h5><b>Company Details Info</b></h5>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="company_name" class="form-label">CompanyName</label>
                  <input type="text" class="form-control" name="company_name" id="company_name">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="" class="form-label">New Entrepreneur ?</label>
                  <div aria-label="Basic radio toggle button group">

                    <input type="radio" class="btn-check" name="entrepreneur" id="yes" value="yes">
                    <label class="btn btn-outline-primary" for="yes" ><i class="bi bi-check-circle"></i> Yes</label>
                  
                    <input type="radio" class="btn-check" name="entrepreneur" id="no" value="no">
                    <label class="btn btn-outline-primary" for="no"><i class="fas fa-exclamation-circle"></i> No</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="trade_license" class="form-label">Trade License No</label>
                  <input type="text" class="form-control" name="trade_license" id="trade_license">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="website-url" class="form-label">Website URL</label>
                  <input type="website_url" class="form-control" name="website_url" id="website-url">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="industry" class="form-label">Industry Type</label>
                  <select class="form-control" name="industry" id="industry">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="employee-size" class="form-label">Employee Size</label>
                  <select class="form-control" name="employee_size" id="employee-size">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="district" class="form-label">District</label>
                  <select class="form-control js-example-basic-single" name="district">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="thana" class="form-label">Thana</label>
                  <select class="form-control js-example-basic-single" name="thana">
                    <option>Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="company_address" class="form-label"><Address></Address> <span class="text-muted">Max 200 chr</span></label>
                <textarea type="text" class="form-control" name="company_address" id="company_address"></textarea>
              </div>
              <button type="submit" class="btn site-btn"><i class="fal fa-arrow-circle-up"></i> Update</button>
            </form>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>
@endpush