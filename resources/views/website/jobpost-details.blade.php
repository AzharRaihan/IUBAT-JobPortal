@extends('layouts.website.website-layouts')
@section('page-title', 'Job Post Details')
@push('page-style')
<style>
  .card{
    /* padding: 20px 15px; */
  }
  .card-title{
    background: #002B36;
    padding: 6px 10px;
    color: white;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
  }
  .card-body{
    padding: 6px 12px 15px 12px;
  }
  .logo i{
    color: #002B36;
    font-size: 18px;
  }
  .description .item-i{
    width: 30px;
  }
  .search-bar, .search-body{
    background-color: white;
    padding: 20px;
    border-radius: 5px;
  }
  /* body{
    background: rgb(226, 226, 226);
  } */
  .card:hover{
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  }
  .company-logo img{
    object-fit: cover;
  }
  .report-bg{
    background: #FFDDE0;
    padding: 10px;
    border-radius: 5px;
  }
</style>
@endpush
@section('page-content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <p class="pt-4 ps-2">{!! $jobPost->description !!}</p>
            <div class="text-center">
              @if (Auth::user())
                @php
                  $resumeExist = App\Models\Resume::where('user_id', Auth::user()->id)->exists();
                  $existUserAndJob = App\Models\ApplyJob::where('user_id', Auth::user()->id)->where('job_id', $jobPost->id)->exists();
                  $now = Carbon\Carbon::now();
                  $today = date('Y-m-d', strtotime($now));
                @endphp
                @if (!$existUserAndJob)
                  @if ($today < $jobPost->deadline)
                    <a href="{{ $resumeExist == false ? 'javascript:void(0)' : route('apply.the.job', $jobPost->id) }}" class="btn site-btn" data-bs-toggle="{{ $resumeExist == false ? 'modal' : '' }}" data-bs-target="{{ $resumeExist == false ? '#myModal' : '' }}">Apply Now  <i class="bi bi-exclamation-circle"></i></a>
                  @else
                  <button class="btn site-btn" disabled>Dedline Over</button>
                  @endif
                @else
                <button class="btn site-btn" disabled>Already Applied</button>
                @endif
              @else
              <a href="{{ route('apply.the.job', $jobPost->id) }}" class="btn site-btn">Apply Now  <i class="bi bi-exclamation-circle"></i></a>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-title"><span class="me-2"><i class="fal fa-suitcase"></i></span> Job Summary</div>
          <div class="card-body">
            <p class="py-1"><b>Published On : </b>{{ date('F j, Y', strtotime($jobPost->published_on)) }}</p>
            <p class="py-1"><b>Vacancy : </b>{{ $jobPost->vacancy }}</p>
            <p class="py-1"><b>Employment Status :</b>
                @if($jobPost->employment_status == 'FT')
                {{ 'Full Time' }}
                @elseif($jobPost->employment_status == 'PT')
                {{ 'Part Time' }}
                @elseif($jobPost->employment_status == 'FLC')
                {{ 'Freelancing' }}
                @elseif($jobPost->employment_status == 'TJ')
                {{ 'Temporary Job' }}
                @else
                {{ 'Employee Status Not Selected' }}
                @endif
            </p>
            <p class="py-1"><b>Experience : </b>{{ $jobPost->experience }}</p>
            <p class="py-1"><b>Age : </b>{{ $jobPost->age }}</p>
            <p class="py-1"><b>Job Location : </b>{{ $jobPost->job_location }}</p>
            <p class="py-1"><b>Salary : </b>{{ $jobPost->salary }}</p>
            <p class="py-1"><b>Application Deadline : </b>{{ date('F j, Y', strtotime($jobPost->deadline)) }}</p>
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-title"><span class="me-2"><i class="bi bi-building"></i></span> Company Information</div>
          <div class="card-body">
            <p class="py-1"><b>Company Name : </b>{{ $jobPost->company->company_name }}</p>
            <p class="py-1"><b>Address : </b>{{ $jobPost->company->company_address }}</p>
            <p class="py-1"><b>Trade License : </b>{{ $jobPost->company->trade_license }}</p>
            <p class="py-1"><b>Website U : </b>{{ $jobPost->company->website_url }}</p>
          </div>
        </div>
        <div class="card">
          <div class="card-title"><span class="me-2"><i class="bi bi-exclamation-circle"></i></span> Report</div>
          <div class="card-body">
            <p class="report-bg">{{ $jobPost->report }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Upload CV / Resume</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{ route('user.store.resume') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-12 mb-3">
              <label for="resume" class="form-label">Upload Resume</label>
              <input type="file" class="form-control" name="resume_name" id="resume">
            </div>
          </div>
          <button type="submit" class="btn site-btn"><i class="fal fa-arrow-circle-up"></i> Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
@push('page-script')
  <script src="{{ asset('assets/website/js/typed.js') }}"></script>
  <script>
  var typed4 = new Typed('#typed4', {
    strings: [
      'Search key word : Frontend Developer',
      'Search key word : Backend Developer',
      'Search key word : Graphics Designer',
      'Search key word : Accountent',
      'Search key word : Data Entry',
    ],
    typeSpeed: 100,
    backSpeed: 0,
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: true
  });
</script>
@endpush
