@extends('layouts.website.website-layouts')
@section('page-title', 'Companies Job Post')
@push('page-style')
<style>
  .card{
    padding: 20px 15px;
  }
  .logo i{
    color: #002B36;
    font-size: 18px;
  }
  .description{

  }
  .description .item-i{
    width: 30px;
  }
  .search-bar, .search-body{
    background-color: white;
    padding: 20px;
    border-radius: 5px;
  }
  body{
    background: rgb(226, 226, 226);
  }
  .card:hover{
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  }
  a{
    color: 
  }
  .company-logo img{
    object-fit: cover;
  }
</style>
@endpush
@section('page-content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="search-bar mb-3">
          <form action="{{ route('job.search') }}" method="GET">
            @csrf
            <div class="input-group">
              <input type="text" class="form-control" id="typed4" placeholder="Search key word :" name="search">
              <button class="btn contact-us-btn" type="submit" id="button-addon2"><i class="bi bi-search"></i> Search Job</button>
            </div>
          </form>
        </div>
        <div class="search-body">
          @if (count($jobPosts) > 0)
          <h4 class="py-3 text-center">{{ $companyName->company_name }} All Job Posts</h4>
          <div class="row">
            @foreach ($jobPosts as $jobPost)
            <div class="col-md-6 col-item">
              <div class="card">
                <a href="{{ route('jobpost.details',$jobPost->id) }}" target="blank">
                  <div class="row">
                    <div class="col-9">
                      <div class="logo pb-2">
                        <span><i class="bi bi-award"></i></span>
                        Featured
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="description">
                          <div class="py-2">
                            <h6><strong>{{ $jobPost->job_title }}</strong></h6>
                            <span>{{ $jobPost->company_name }}</span>
                          </div>
                          <div class="d-flex">
                            <div class="item-i">
                              <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <span>{{ $jobPost->job_location }}</span>
                          </div>
                          <div class="d-flex">
                            <div class="item-i">
                              <i class="fas fa-graduation-cap"></i>
                            </div>
                            <span>{{ $jobPost->req_degree }}</span>
                          </div>
                          <div class="d-flex">
                            <div class="item-i">
                              <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <span>Published On : {{ date('F j, Y', strtotime($jobPost->published_on)) }}</span>
                          </div>
                          <div class="d-flex">
                            <div class="item-i">
                              <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <span>Application Deadline : {{ date('F j, Y', strtotime($jobPost->deadline)) }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="company-logo">
                        @php
                          $path = public_path('uploads/job-thumbnail/'. $jobPost->job_thumbnail)
                        @endphp
                        @if(File::exists($path))
                        <img src="{{ $jobPost->job_thumbnail != null ? asset('uploads/job-thumbnail/'. $jobPost->job_thumbnail) : asset('assets/application-default/img/gallery-default.png') }}" alt="{{ $jobPost->job_title }}" height="70" width="70">
                        @else
                        <img src="{{ asset('assets/application-default/img/gallery-default.png') }}" alt="{{ $jobPost->job_title }}" height="70" width="70">
                        @endif
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
          @else
          <div class="col-12">
            <div class="card empty">
              <div class="d-flex justify-content-center align-items-center flex-column">
                <span>
                  <i class="fal fa-suitcase"></i>
                </span>
                <p class="py-1"><b>Sorry No Job Founds</b></p>
                <p>Please Try Something else</p>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>


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
