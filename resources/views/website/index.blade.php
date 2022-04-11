@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<style>
  #hero{
    width: 100%;
    height: 50vh;
    background-repeat: no-repeat;
  }
  .overlay{
    width: 100%;
    height: 50vh;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .form-control{
    border: 1px solid #c2000c;
  }
  .card{
    height: 100%;
  }
  .see-all{
    text-align: right;
  }
  .see-all i{
    font-size: 13px;
  }
  .see-all a{
    font-size: 15px;
  }
  .govt, .public, ul li{
    list-style-type: none;
  }
  .govt i{
    margin-right: 10px;
  }
  .public i{
    margin-right: 10px;
  }
  .job-item-wrap{
    display: flex;
    justify-content: space-around;
  }
  .job-item{
    color: white;
  }
  .job-item i{
    width: 50px;
    height: 50px;
    background: rgb(128, 128, 128, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin-right: 0px !important;
  }
  .job-card{
    display: flex;
    padding: 20px 10px;
  }
  .hto-job-title i{
    font-size: 23px;
    color: #C2000C;
  }
</style>
@endpush

@section('page-content')

  <!-- Search Or Banner -->
  <div id="hero" style="background-image: url({{ asset('assets/website/img/searchbar.jpg') }})">
    <div class="overlay">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="typed4" placeholder="Search key word :">
              <button class="btn contact-us-btn" type="button" id="button-addon2"><i class="bi bi-search"></i> Search</button>
            </div>
            <div class="job-item-wrap">
              <div class="job-item text-center">
                <i class="fal fa-suitcase m-0"></i>
                <p>Live Job</p>
                <span>390</span>
              </div>
              <div class="job-item text-center">
                <i class="fal fa-suitcase m-0"></i>
                <p>Vacancies</p>
                <span>390</span>
              </div>
              <div class="job-item text-center">
                <i class="bi bi-building m-0"></i>
                <p>Companies</p>
                <span>390</span>
              </div>
              <div class="job-item text-center">
                <i class="fa fa-spinner m-0"></i>
                <p>New Jobs</p>
                <span>390</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Matrials Section ======= -->
  <section class="matrials section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-12">
          <div class="card materials-body">
            <h6 class="border-bottom pb-2">
              <i class="far fa-list-ul me-2"></i>
              <span>Brows Category</span>
            </h6>
            <div class="row">
              @for ($i = 1; $i <= 30; $i++)
              <div class="col-md-4 py-1">
                <a href="{{ route('category') }}">
                  <i class="fal fa-arrow-alt-circle-right"></i>
                  <span>Category {{ $i }}</span>
                </a>
              </div>
              @endfor
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card materials-body">
            <div class="govt mb-3">
              <h6 class="border-bottom pb-2">
                <img src="{{ asset('assets/website/img/bangladesh.png') }}" alt="" height="20" height="20">
                <span>Govt Jobs</span>
              </h6>
              <ul class="p-0 m-0">
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 1</a></li>
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 2</a></li>
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 3</a></li>
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 4</a></li>
              </ul>
              <div class="see-all">
                <a href="">See All <span><i class="far fa-angle-double-right"></i></span></a>
              </div>
            </div>
            <div class="public">
              <h6 class="border-bottom pb-2">
                <i class="fa fa-suitcase"></i>
                <span>Private Jobs</span>
              </h6>
              <ul class="p-0 m-0">
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 1</a></li>
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 2</a></li>
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 3</a></li>
                <li><a href="#"><i class="fal fa-caret-circle-right"></i>Item 4</a></li>
              </ul>
              <div class="see-all">
                <a href="">See All <span><i class="far fa-angle-double-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Matrials -->

  <!-- ======= Counts Section ======= -->
  <div id="counts" class="counts" style="background-image: url({{ asset('assets/website/img/searchbar.jpg') }}); background-attachment: fixed;">
    <div class="overlay">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span><i class="fal fa-suitcase"></i></span>
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Total Jobs</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span><i class="fas fa-user-tie"></i></span>
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Vacancy</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span><i class="bi bi-building"></i></span>
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Company</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span><i class="fa fa-spinner"></i></span>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>New Jobs</p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Counts Section -->

  <!-- Hot Job -->
  <section class="section-bg">
    <div class="container">
      <div class="hto-job-title">
        <h6>
          <i class="fab fa-free-code-camp"></i> 
          Hot Josb</h6>
      </div>
      <div class="row">
        @for ($i = 1; $i <= 32; $i++)
          <div class="col-lg-3 col-md-4 col-sm-6 col-item">
            <div class="card">
              <div class="job-card">
                <div>
                  <img src="{{ asset('assets/website/img/bd.jpg') }}" alt="" height="50" width="50">
                </div>
                <div>
                  <p>Airlines</p>
                  <p>Airlines</p>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>
  <!-- Hot Job End -->

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
