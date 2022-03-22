@extends('layouts.frontend.frontend-layouts')
@section('page-title', '')
@push('page-css')
  <style>
  </style>
@endpush
@section('page-content')
<main class="main-container">
  <section class="breadcrumb-section">
      <div class="breadcrumb-bg-color">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="breadcrumb-content">
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="section-contant">
                          <div class="section-title">
                              <h4> Join the Basil Team </h4>
                              <p> Are you looking for new and exciting career opportunities? Take a look at our list of open vacancies – perhaps you’
                                  re the exact person we’ve been looking for! </p>
                          </div>
                          <div class="Basil-btn">
                              <a href="#" class="btn btn-sm"> <span> Browse and Apply  </span> <i class='bx bx-chevrons-right'></i> </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="google-map-contact">
      <div class="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.9980886500825!2d90.40893163678392!3d23.871916339655147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d8c856ebff%3A0x7200c85aa16fabc4!2sDakshinkhan%20Police%20Station!5e0!3m2!1sen!2sbd!4v1644047802306!5m2!1sen!2sbd" width="100%" height="100vh" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
  </section>
  <section class="contact-form-section">
      <div class="container">
          <div class="office-information">
              <div class="row">
                  <div class="col-md-4">
                      <div class="office-items">
                          <div class="section-title">
                              <h4>CONTACT US ON WHATSAPP</h4>
                          </div>
                          <div class="section-contant">
                              <ul>
                                  <p> <b> WhatsApp us </b> </p>
                                  <li> (+880) 01725229295 </li>
                                  <li> (+880) 01725229294 </li>
                                  <li> (+880) 01725229293 </li>
                                  <li> (+880) 01725229292 </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="office-items">
                          <div class="section-title">
                              <h4> FIND A Basil OFFICE </h4>
                          </div>
                          <div class="section-contant">
                              <form action="#">
                                  <div class="form-group">
                                      <select class="form-control" id="selectOffice" style="position: relative;" >
                                          <option selected="selected" > (:-- Select Your Country --:) </option>
                                          <option role="option" data-user-option="" value="Print my checklist">Print my checklist</option>
                                          <option role="option" data-user-option="" value="Email my checklist">Email my checklist</option>
                                          <option role="option" data-user-option="" value="Clear my checklist">Clear my checklist</option>
                                          <option role="option" data-user-option="" value="Sign out of my checklist">Sign out of my checklist</option>
                                      </select>
                                      <div class="showcontent" style="display:none;">
                                          <div class="office-address">
                                              <address>
                                                  <div class="address-title">
                                                      <h5> Bangladesh </h5>
                                                  </div>
                                                  <ul>
                                                      <li> <span> Pearl Trade Centre, 7th floor Cha 90/3 Pragati Sarani North Badda Dhaka 1212, 
                                                          Bangladesh </span> </li>
                                                      <li> <b> Tel: </b> <span> +88 09611 492949</span> </li>
                                                  </ul>
                                              </address>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="office-items">
                          <div class="section-title">
                              <h4> COMPLIANCE REPORT </h4>
                          </div>
                          <div class="section-contant">
                              <div class="section-title">
                                  <p>CONTACT US ON WHATSAPP</p>
                              </div>
                              <article>
                                  <p> If you're working at a site audited by Basil and have concerns, please report information about labour 
                                      conditions or call us at:</p>
                              </article>
                              <ul>
                                  <li> 
                                      <p> <b> China: </b> <span> (+880) 01725229294 </span> </p>
                                  </li>
                                  <li> 
                                      <p> <b> China: </b> <span> (+880) 01725229294 </span> </p>
                                  </li>
                                  <li> 
                                      <p> <b> China: </b> <span> (+880) 01725229294 </span> </p>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="contact-form">
                      <form action="#" method="get" id="contact-now">
                          <div class="contact-header">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="contact-number">
                                          <div class="contact-title">
                                              <h4> Call Us Now </h4>
                                          </div>
                                          <h4> (+880) 1725229295 </h4>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="contact-filte">
                                          <div class="form-group">
                                              <select id="inputState" class="form-control" required>
                                                  <option selected> (:--- Find a Basil contact number ---:) </option>
                                                  <option>...</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="firstname"> First Name: * </label>
                                  <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="lastname"> Last Name: *</label>
                                  <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="Company"> Company: * </label>
                                  <input type="text" class="form-control" id="Company" placeholder="First Name" required>
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="email"> Email: * </label>
                                  <input type="email" class="form-control" id="email" placeholder="Email" required>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="contactNumber"> Contact Number: * </label>
                                  <input type="number" class="form-control" id="contactNumber" placeholder="Contact Number">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="inputState"> Select Country </label>
                                  <select id="inputState" class="form-control" required>
                                      <option selected> (:--- Select a Country ---:) </option>
                                      <option>...</option>
                                  </select>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="inputState"> Your question </label>
                                  <select id="inputState" class="form-control" required>
                                      <option selected> (:--- Your question is about ---:) </option>
                                      <option>...</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="inputAddress"> Address: * </label>
                                  <textarea  class="form-control" name="inputAddress" id="">

                                  </textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                          </div>
                          <div class="submit-and-cancel-btn">
                              <div class="form-submit-btn">
                                  <button class="submit" type="submit"> Submit </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>
@endsection
@push('page-script')
@endpush