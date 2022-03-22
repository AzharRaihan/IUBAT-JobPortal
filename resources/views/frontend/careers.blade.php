@extends('layouts.frontend.frontend-layouts')
@section('page-title', '')
@push('page-css')
  <style>
  </style>
@endpush
@section('page-content')
<main class="main-container">
    <!-- Jon Basil -->
    @include('layouts.frontend.partials.join-basil')

    <section class="career-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <div class="career-obsective">
                        <div class="section-title">
                            <h4> Why Work With Basil? </h4>
                        </div>
                        <div class="section-contant">
                            <p> 
                                <span> </span>
                                The Basil family consists of over 3,500 employees spanning 85 countries. We’re still growing and exploring new markets 
                                – and we want the best people on our team! Come work with us if you’re looking for an international experience in a 
                                dynamic environment, with a truly friendly team that will help you grow and learn every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="follow-social-media">
                        <div class="section-title">
                            <h4> Follow Basil on </h4>
                        </div>
                        <div class="social-media">
                            <ul>
                                <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="career-card-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4> Browse and Apply </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="career-card-items">
                        <div class="career-info">
                            <div class="job-title">
                                <h4> Frontend Developer React Js </h4>
                            </div>
                            <address class="contact-info">
                                <p> <span>Address:</span> Dhaka Uttara Sector #7 </p>
                                <p> <span>Phone:</span> (+880) 1725229295 </p>
                                <p> <span>Email:</span> nahid@gmail.com </p>
                            </address>
                            <div class="Basil-btn">
                                <a href="{{ route('career.details') }}" class="btn btn-sm"> <span> Browse and Apply  </span> <i class='bx bx-chevrons-right'></i> </a>
                            </div>
                        </div>
                        <div class="career-location">
                            <div class="location-head">
                                <div class="location-name">
                                    <p> Bangladesh </p>
                                </div>
                                <div class="location-img">
                                    <img src="{{ asset('assets/frontend/img/bangladesh.png') }}" alt="country-image">
                                </div>
                            </div>
                            <div class="location-map">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.04745194145!2d90.39241872230873!3d23.871040499224666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43cc3768dc1%3A0x8ab583ff502586f3!2sSector%207%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1643879700940!5m2!1sen!2sbd" 
                                    width="150px" height="150px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="career-card-items">
                        <div class="career-info">
                            <div class="job-title">
                                <h4> Frontend Developer React Js </h4>
                            </div>
                            <address class="contact-info">
                                <p> <span>Address:</span> Dhaka Uttara Sector #7 </p>
                                <p> <span>Phone:</span> (+880) 1725229295 </p>
                                <p> <span>Email:</span> nahid@gmail.com </p>
                            </address>
                            <div class="Basil-btn">
                                <a href="{{ route('career.details') }}" class="btn btn-sm"> <span> Browse and Apply  </span> <i class='bx bx-chevrons-right'></i> </a>
                            </div>
                        </div>
                        <div class="career-location">
                            <div class="location-head">
                                <div class="location-name">
                                    <p> Bangladesh </p>
                                </div>
                                <div class="location-img">
                                    <img src="{{ asset('assets/frontend/img/bangladesh.png') }}" alt="country-image">
                                </div>
                            </div>
                            <div class="location-map">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.04745194145!2d90.39241872230873!3d23.871040499224666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43cc3768dc1%3A0x8ab583ff502586f3!2sSector%207%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1643879700940!5m2!1sen!2sbd" 
                                    width="150px" height="150px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="career-card-items">
                        <div class="career-info">
                            <div class="job-title">
                                <h4> Frontend Developer React Js </h4>
                            </div>
                            <address class="contact-info">
                                <p> <span>Address:</span> Dhaka Uttara Sector #7 </p>
                                <p> <span>Phone:</span> (+880) 1725229295 </p>
                                <p> <span>Email:</span> nahid@gmail.com </p>
                            </address>
                            <div class="Basil-btn">
                                <a href="{{ route('career.details') }}" class="btn btn-sm"> <span> Browse and Apply  </span> <i class='bx bx-chevrons-right'></i> </a>
                            </div>
                        </div>
                        <div class="career-location">
                            <div class="location-head">
                                <div class="location-name">
                                    <p> Bangladesh </p>
                                </div>
                                <div class="location-img">
                                    <img src="{{ asset('assets/frontend/img/bangladesh.png') }}" alt="country-image">
                                </div>
                            </div>
                            <div class="location-map">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.04745194145!2d90.39241872230873!3d23.871040499224666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43cc3768dc1%3A0x8ab583ff502586f3!2sSector%207%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1643879700940!5m2!1sen!2sbd" 
                                    width="150px" height="150px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="career-card-items">
                        <div class="career-info">
                            <div class="job-title">
                                <h4> Frontend Developer React Js </h4>
                            </div>
                            <address class="contact-info">
                                <p> <span>Address:</span> Dhaka Uttara Sector #7 </p>
                                <p> <span>Phone:</span> (+880) 1725229295 </p>
                                <p> <span>Email:</span> nahid@gmail.com </p>
                            </address>
                            <div class="Basil-btn">
                                <a href="{{ route('career.details') }}" class="btn btn-sm"> <span> Browse and Apply  </span> <i class='bx bx-chevrons-right'></i> </a>
                            </div>
                        </div>
                        <div class="career-location">
                            <div class="location-head">
                                <div class="location-name">
                                    <p> Bangladesh </p>
                                </div>
                                <div class="location-img">
                                    <img src="./assets/img/bangladesh.png" alt="">
                                </div>
                            </div>
                            <div class="location-map">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.04745194145!2d90.39241872230873!3d23.871040499224666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43cc3768dc1%3A0x8ab583ff502586f3!2sSector%207%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1643879700940!5m2!1sen!2sbd" 
                                    width="150px" height="150px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="career-card-items">
                        <div class="career-info">
                            <div class="job-title">
                                <h4> Frontend Developer React Js </h4>
                            </div>
                            <address class="contact-info">
                                <p> <span>Address:</span> Dhaka Uttara Sector #7 </p>
                                <p> <span>Phone:</span> (+880) 1725229295 </p>
                                <p> <span>Email:</span> nahid@gmail.com </p>
                            </address>
                            <div class="Basil-btn">
                                <a href="{{ route('career.details') }}" class="btn btn-sm"> <span> Browse and Apply  </span> <i class='bx bx-chevrons-right'></i> </a>
                            </div>
                        </div>
                        <div class="career-location">
                            <div class="location-head">
                                <div class="location-name">
                                    <p> Bangladesh </p>
                                </div>
                                <div class="location-img">
                                    <img src="./assets/img/bangladesh.png" alt="">
                                </div>
                            </div>
                            <div class="location-map">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.04745194145!2d90.39241872230873!3d23.871040499224666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43cc3768dc1%3A0x8ab583ff502586f3!2sSector%207%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1643879700940!5m2!1sen!2sbd" 
                                    width="150px" height="150px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="search-job-section">
                        <div class="search-title">
                            <h4> Search for a Job </h4>
                        </div>
                        <div class="filter-job">
                            <form action="" method="get">
                                <div class="form-group">
                                    <label>Search: </label>
                                    <input type="search" name="" class="form-control" id="" placeholder=" search now ">
                                </div>
                                <div class="form-group">
                                    <label>Department: </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>(:-- Department --:)</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> Contract type: </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>(:-- Contract type --:)</option>
                                        <option value="1"> Full time </option>
                                        <option value="2"> Part time </option>
                                        <option value="3"> Intern </option>
                                        <option value="3"> Consultant </option>
                                    </select>
                                </div>
                                <div class="Basil-btn">
                                    <a href="#" class="btn btn-sm"> <span> Search Now </span> <i class='bx bx-search'></i> </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('page-script')
@endpush