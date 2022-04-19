@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<link rel="stylesheet" href="{{ asset('assets/website/css/company-user-dashboard.css') }}">
<!-- Summernote Css CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
  .card-element{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0px;
    border-top: 3px solid #C1000C;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px;
  }
  .note-dropdown-item h1{
    font-size: 2rem !important;
  }
  .note-dropdown-item h2{
    font-size: 1.75rem !important;
  }
  .note-dropdown-item h3{
    font-size: 1.50rem !important;
  }
  .note-dropdown-item h4{
    font-size: 1.25rem !important;
  }
  .note-dropdown-item h5{
    font-size: 1rem !important;
  }

</style>
@endpush
@section('page-content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- User Sidebar -->
          @include('layouts.company.company-sidebar')
        </div>
        <div class="col-md-8">
          <form action="{{ isset($jobPostEdit) ? route('company.update.job.post', $jobPostEdit->id) : route('company.store.job.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($jobPostEdit)
              @method('put')
            @endisset
            <div class="card p-3">
              <h5 class="pb-3 border-bottom"><b>Create Job Post</b></h4>
              <div class="row pt-3">
                <div class="col-md-6 mb-3">
                  <label for="job-title" class="form-label">Job Title</label>
                  <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" id="job-title" value="{{ old('job_title') }}">
                  @error('job_title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="company-name" class="form-label">Company Name</label>
                  <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" id="company-name" value="{{ old('company_name') }}">
                  @error('company_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="mb-3">
                <label for="job-location" class="form-label">Job Location</label>
                <textarea type="text" class="form-control" name="job_location" id="job-location">{{ old('job_location') }}</textarea>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="published-on" class="form-label">Published On</label>
                  <input type="date" class="form-control @error('published_on') is-invalid @enderror" name="published_on" id="published-on" value="{{ old('published_on') }}">
                  @error('published_on')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="deadline" class="form-label">Application Dedline</label>
                  <input type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" id="deadline" value="{{ old('deadline') }}">
                  @error('deadline')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="req-degree" class="form-label">Required Degree</label>
                  <input type="text" class="form-control @error('req_degree') is-invalid @enderror" name="req_degree" id="req-degree" value="{{ old('req_degree') }}">
                  @error('req_degree')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="age" class="form-label">Age</label>
                  <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" id="age" value="{{ old('age') }}">
                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="experience" class="form-label">Experience</label>
                  <input type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" id="experience" value="{{ old('experience') }}">
                  @error('experience')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="salary" class="form-label">Salary</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">BDT</span>
                    </div>
                    <input type="number" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                    @error('salary')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="employment-status" class="form-label">Employee Status</label>
                  <input type="text" class="form-control @error('employment_status') is-invalid @enderror" name="employment_status" id="employment-status" value="{{ old('employment_status') }}">
                  @error('employment_status')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="vacancy" class="form-label">Vacancy</label>
                  <input type="text" class="form-control @error('vacancy') is-invalid @enderror" name="vacancy" id="vacancy" value="{{ old('vacancy') }}">
                  @error('vacancy')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="mb-3">
                <label for="job-thumbnail" class="form-label">Job Thumbnail</label>
                <input type="file" class="form-control" name="job_thumbnail" id="job-thumbnail">
              </div>
              <div class="mb-3">
                <label for="report" class="form-label">Report</label>
                <textarea type="text" class="form-control" name="report" id="report">{{ old('report') }}</textarea>
              </div>
              <div>
                <label for="job-details" class="form-label">Job Details</label>
                <textarea class="form-control" id="summernote" name="description">
                </textarea>
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
<!-- Summernote Js CDN -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script type="text/javascript">
$('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
</script>
@endpush