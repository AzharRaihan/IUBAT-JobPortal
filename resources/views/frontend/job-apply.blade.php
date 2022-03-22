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
    <section class="job-apply-form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4> Join the Basil Team </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="job-apply-form">
                        <form action="#" method="get" id="job-apply-now">
                            <div class="personal-information">
                                <div class="section-title">
                                    <h4> Personal Information </h4>
                                    <!-- <a href="#" class="btn btn-sm"> </a> -->
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
                                        <label for="email"> Email: * </label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contactNumber"> Contact Number: * </label>
                                        <input type="number" class="form-control" id="contactNumber" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress"> Address: * </label>
                                    <textarea  class="form-control" name="inputAddress" id="">

                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control" required>
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="positionTitle"> Position Title: * </label>
                                    <input type="text" class="form-control" id="positionTitle" placeholder="Position Title" required>
                                </div>
                            </div>
                            <div class="educational-information">
                                <div class="section-title">
                                    <h4> Last Education History </h4>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="University"> University </label>
                                        <input type="text" class="form-control" id="University" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="startTime">Start Date: </label>
                                        <input type="date" class="form-control" name="startTime" id="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="endtime">End Date: </label>
                                        <input type="date" class="form-control" id="endtime">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="major"> Major: * </label>
                                        <select id="major" class="form-control" required>
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Degree"> Degree: * </label>
                                        <input type="text" class="form-control" id="Degree" placeholder="Degree" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Location"> Location: * </label>
                                        <input type="text" class="form-control" id="Location" placeholder="Location" required>
                                    </div>
                                </div>
                            </div>
                            <div class="working-information">
                                <div class="section-title">
                                    <h4> Last  Working Experience </h4>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Company"> Company </label>
                                        <input type="text" class="form-control" id="Company" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="startTime">Start Date: </label>
                                        <input type="date" class="form-control" name="startTime" id="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="endtime">End Date: </label>
                                        <input type="date" class="form-control" id="endtime">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Position"> Position title: * </label>
                                        <input type="text" class="form-control" id="Position" placeholder="Position title" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Location"> Location: * </label>
                                        <input type="text" class="form-control" id="Location" placeholder="Location" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Degree"> Job Responsibility: * </label>
                                        <textarea class="form-control" name="" id="">

                                        </textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="uploadCV"> Upload CV: * </label>
                                        <input type="file" class="form-control" id="uploadCV" required>
                                    </div>
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
                                <div class="Basil-btn">
                                    <a href="#" class="btn btn-sm cancle-button"> <span> Cancle Now </span> <i class="fas fa-times"></i> </a>
                                </div>
                                
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