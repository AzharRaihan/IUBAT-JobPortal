@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
<style>
  #hero{
    width: 100%;
    height: 50vh;
    background-repeat: no-repeat;
  }
  .overlay{
    width: 100%;
    height: 50vh;
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .form-control{
    border: 1px solid #c2000c;
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
              <button class="btn get-started-btn" type="button" id="button-addon2"><i class="bi bi-search"></i> Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- ======= Matrials Section ======= -->
  <section class="matrials section-bg">
    <div class="container">
      <div class="section-title title text-center">
        <h1>Matrials</h1>
        <p>Women In Digital materials are built by our community, which is made up of industry-leading technologists, instructors, and leaders. All curriculum developed by Women In Digital . You are free to share and adapt these materials.</p>
      </div>
      <div class="body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-4 my-lg-2 my-sm-1">
            <div class="materials-body d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/website/img/matrials/web.png') }}" alt="" class="me-3" width="90px" height="90px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 my-lg-2 my-sm-1">
            <div class="materials-body d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/website/img/matrials/htmlcss.png') }}" alt="" class="me-3" width="90px" height="90px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 my-lg-2 my-sm-1">
            <div class="materials-body d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/website/img/matrials/angular.png') }}" alt="" class="me-3" width="90px" height="90px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 my-lg-2 my-sm-1">
            <div class="materials-body d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/website/img/matrials/git.png') }}" alt="" class="me-3" width="90px" height="90px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 my-lg-2 my-sm-1">
            <div class="materials-body d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/website/img/matrials/web-accibility.png') }}" alt="" class="me-3" width="90px" height="90px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 my-lg-2 my-sm-1">
            <div class="materials-body d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/website/img/matrials/php.png') }}" alt="" class="me-3" width="90px" height="90px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Matrials -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
          <h3 class="text-white">Learning Today,Leading Tomorrow</h3>
          <div class="input-group">
            <input type="text" class="form-control" id="searchCourse" placeholder="">
            <button class="btn btn-warning text-white" type="button" id="button-addon2">Search</button>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Hero -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">
      <div class="row counters">
        <div class="col-lg-3 col-6 text-center">
          <span><i class="fas fa-user-graduate"></i></span>
          <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Students</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span><i class="fas fa-user-tie"></i></span>
          <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
          <p>Trainers</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span><i class="fas fa-book-reader"></i></span>
          <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span><i class="fas fa-bookmark"></i></span>
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Enroll</p>
        </div>
      </div>
    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses section-bg OwlCarouselWrap">
    <div class="container">
      <div class="section-title">
        <!--<h2>Courses</h2>
        <p>Regular Courses</p>-->
        <h1>Popular Courses</h1>
      </div>
      <div class="owl-carousel">
        <div>
          <div class="course-item">
            <img src="{{ asset('assets/website/img/course/laravel.png') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="" class="enroll">Enroll</a>
                <p class="price">$169</p>
              </div>
              <h3><a href="course-details.html">Laravel</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="course-footer">
                <div class="course-rank d-flex align-items-center justify-content-between">
                  <div>
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                  </div>
                  <div>
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="course-item">
            <img src="{{ asset('assets/website/img/course/enterprenure.png') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="" class="enroll">Enroll</a>
                <p class="price">$169</p>
              </div>
              <h3><a href="course-details.html">Enterprenureship</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="course-footer">
                <div class="course-rank d-flex align-items-center justify-content-between">
                  <div>
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                  </div>
                  <div>
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="course-item">
            <img src="{{ asset('assets/website/img/course/java.png') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="" class="enroll">Enroll</a>
                <p class="price">$169</p>
              </div>
              <h3><a href="course-details.html">Java</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="course-footer">
                <div class="course-rank d-flex align-items-center justify-content-between">
                  <div>
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                  </div>
                  <div>
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="course-item">
            <img src="{{ asset('assets/website/img/course/design-dev.png') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="" class="enroll">Enroll</a>
                <p class="price">$169</p>
              </div>
              <h3><a href="course-details.html">Web Design</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="course-footer">
                <div class="course-rank d-flex align-items-center justify-content-between">
                  <div>
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                  </div>
                  <div>
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="course-item">
            <img src="{{ asset('assets/website/img/course-1.jpg') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="" class="enroll">Enroll</a>
                <p class="price">$169</p>
              </div>
              <h3><a href="course-details.html">Website Design</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="course-footer">
                <div class="course-rank d-flex align-items-center justify-content-between">
                  <div>
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                  </div>
                  <div>
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Popular Courses Section -->

  <!-- ======= Our Mashtors Section ======= -->
  <section id="our-mashtor" class="our-mashtor OwlCarouselWrap">
    <div class="container">
      <div class="section-title">
        <!-- <h2>Mashtors</h2>
        <p>Our Mashtors</p> -->
        <h1>Our Mashtors</h1>
      </div>
      <div class="owl-carousel">
        <div>
          <div class="mashtor-item">
            <img src="{{ asset('assets/website/img/mashtors/partha.jpg') }}" alt="">
            <div class="mashtor-content">
              <h4><strong>Partha Chandra Sarker</strong></h4>
              <h5><strong>Graphic Designer</strong></h5>
              <p class="py-1">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer">
                <div class="trainer-rank d-flex align-items-center justify-content-between">
                  <strong>
                    $20/h
                  </strong>
                  <div class="ratting">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="mashtor-item">
            <img src="{{ asset('assets/website/img/mashtors/naveed.jpg') }}" class="img-fluid" alt="...">
            <div class="mashtor-content">
              <h4><strong>Naveed Khan Chowdhury</strong></h4>
              <h5><strong>Graphic Designer</strong></h5>
              <p class="py-1">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer">
                <div class="trainer-rank d-flex align-items-center justify-content-between">
                  <strong>
                    $20/h
                  </strong>
                  <div class="ratting">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="mashtor-item">
            <img src="{{ asset('assets/website/img/mashtors/moumita.jpg') }}" class="img-fluid" alt="...">
            <div class="mashtor-content">
              <h4><strong>Moumita Mahfuz</strong></h4>
              <h5><strong>Graphic Designer</strong></h5>
              <p class="py-1">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer">
                <div class="trainer-rank d-flex align-items-center justify-content-between">
                  <strong>
                    $15/h
                  </strong>
                  <div class="ratting">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="mashtor-item">
            <img src="{{ asset('assets/website/img/mashtors/raihan.jpg') }}" class="img-fluid" alt="...">
            <div class="mashtor-content">
              <h4><strong>Azhar Raihan</strong></h4>
              <h5><strong>Graphic Designer</strong></h5>
              <p class="py-1">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer">
                <div class="trainer-rank d-flex align-items-center justify-content-between">
                  <strong>
                    $15/h
                  </strong>
                  <div class="ratting">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="mashtor-item">
            <img src="{{ asset('assets/website/img/mashtors/peter.jpg') }}" class="img-fluid" alt="...">
            <div class="mashtor-content">
              <h4><strong>Peter</strong></h4>
              <h5><strong>Teach Starup Advisor</strong></h5>
              <p class="py-1">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer">
                <div class="trainer-rank d-flex align-items-center justify-content-between">
                  <strong>
                    $15/h
                  </strong>
                  <div class="ratting">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Mashtors Section -->

  <!-- Language Section -->
  <section class="language">
    <div class="container">
      <div class="ln-bd">
        <div class="row justify-content-lg-end">
          <div class="col-lg-6" style="background-color: rgb(255, 255, 255); opacity: 0.7;">
            <div class="ln-chield" >
              <h1>For Bangladeshi Learners</h1>
              <ul>
                <li>
                  <span><i class="bi bi-patch-check-fill"></i></span>
                  Talk in Bangladeshi with people who live in Bangladesh
                </li>
                <li>
                  <span><i class="bi bi-patch-check-fill"></i></span>
                  Learn seniors' actual experience and knowledge outside textbooks
                </li>
                <li>
                  <span><i class="bi bi-patch-check-fill"></i></span>
                  Ask questions for your dream to success
                </li>
                <li>
                  <span><i class="bi bi-patch-check-fill"></i></span>
                  Also available for universities and language schools
                </li>
              </ul>
              <h5>For Bangla Learners</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="ln-japan">
        <div class="row justify-content-lg-start">
          <div class="col-lg-6" style="background-color: rgb(255, 255, 255); opacity: 0.7;">
            <div class="ln-chield">
              <h1>For Japanese Learners</h1>
              <ul>
                <li>
                  <i class="bi bi-patch-check-fill"></i>
                  Connect to society by talking in bangladeshi with foreign young people
                </li>
                <li>
                  <i class="bi bi-patch-check-fill"></i>
                  Contribute on young people education with your experience and knowledge through language learning
                </li>
                <li>
                  <i class="bi bi-patch-check-fill"></i>
                  Here you can challenge new things
                </li>
                <li>
                  <i class="bi bi-patch-check-fill"></i>
                  Also available in elderly houses and nursing homesIt would be a big opportunity for foreign labors
                </li>
              </ul>
              <h5>For Bangladeshi Participants</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Language Section End -->

@endsection

@push('page-script')
  <script src="{{ asset('assets/website/js/typed.js') }}"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> --}}
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
