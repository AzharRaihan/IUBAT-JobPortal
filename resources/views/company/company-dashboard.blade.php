@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
<!-- Summernote Css CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
  .dashboard .card{
    width: 100%;
    border-top: 3px solid #C1000C;
    background: #F3F3F3;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 0px;
    margin-bottom: 24px;
  }
  input[type="radio"]:focus {
    outline: none;
  }
  .update-avater {
    position: relative;
    left: 36px;
    top: -63px;
  }
</style>
@endpush
@section('page-content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <form action="{{ route('company.update.avater') }}" method="POST" enctype="multipart/form-data"> 
              @csrf
              @method('put')
              <div class="d-flex align-items-center border-bottom">
                <div class="form-group user-avater mt-4">
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                      <input type='file' id="imageUpload" name="profile_photo" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"><i class="bi bi-camera" data-bs-toggle="tooltip" data-bs-placement="right" title="Select an Image"></i></label>
                    </div>
                    <div class="avatar-preview">
                      @if(Auth::user()->profile_photo != null)
                      <div id="imagePreview" style="background-image: url({{ asset('company/profile-pic/'. Auth::user()->profile_photo) }});">
                      </div>
                      @else
                      <div id="imagePreview" style="background-image: url({{ asset('assets/application-default/img/user.png') }});">
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="description ps-3">
                  <span>Hello</span>
                  <h5>{{ Auth::user()->name }}</h5>
                </div>
                <button type="submit" class="btn update-avater">
                  <i class="bi bi-check2-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Clic To Update"></i>
                </button>
              </div>
            </form>
            <!-- User Sidebar -->
            @include('layouts.user.user-sidebar')
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content" id="v-pills-tabContent">
            <!-- Dashboard Tab -->
            <div class="tab-pane fade show active dashboard" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <h6>Applied Jobs</h6>
                    <i class="fas fa-suitcase"></i>
                  </div>
                </div>
                <div class="col-md-4">
                  <a href="javascript:void(0)">
                    <div class="card">
                      <h6>View Resume</h6>
                      <i class="fal fa-briefcase"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <!-- Edit Profile Tab -->
            <div class="tab-pane fade" id="v-pills-edit-profile" role="tabpanel" aria-labelledby="v-pills-edit-profile-tab">
              <form action="{{ route('company.edit-profile') }}" method="POST">
                @csrf
                @method('put')
                <h5 class="pb-2"><b>Edit Profile</b></h4>
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
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ Auth::user()->phone }}">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Select Gender</label>
                    <div aria-label="Basic radio toggle button group">

                      <input type="radio" class="btn-check" name="gender" id="male" value="male"{{ Auth::user()->gender == 'male' ? 'checked' : '' }}>
                      <label class="btn btn-outline-primary" for="male" ><i class="fas fa-male"></i> Male</label>
                    
                      <input type="radio" class="btn-check" name="gender" id="female" value="female"{{ Auth::user()->gender == 'female' ? 'checked' : '' }}>
                      <label class="btn btn-outline-primary" for="female"><i class="fas fa-female"></i> Female</label>
                    
                      <input type="radio" class="btn-check" name="gender" id="other" value="other"{{ Auth::user()->gender == 'other' ? 'checked' : '' }}>
                      <label class="btn btn-outline-primary" for="other"><i class="fal fa-transgender"></i> Other</label>

                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address" id="" value="{{ Auth::user()->address }}">
                </div>
                <div class="mb-3">
                  <label for="bio" class="form-label">Bio <span class="text-muted">Max 200 chr</span></label>
                  <textarea type="text" class="form-control" name="bio" id="bio">{{ Auth::user()->bio }}</textarea>
                </div>
                <button type="submit" class="btn site-btn"><i class="fal fa-arrow-circle-up"></i> Update</button>
              </form>
            </div>

            <!-- Change Password Tab -->
            <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab">
              <form action="{{ route('company.update.password') }}" method="POST">
                @csrf
                @method('put')
                <h5 class="pb-2"><b>Change Password</b></h5>
                <div class="mb-3">
                  <label for="current_password" class="form-label">Old Password</label>
                  <input type="password" class="form-control" name="current_password" id="current_password">
                </div>
                <div class="row"> 
                  <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">New Passowrd</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn site-btn"><i class="fal fa-arrow-circle-up"></i> Update</button>
              </form>
            </div>

            <!-- Setting Tab -->
            <div class="tab-pane fade" id="v-pills-resume" role="tabpanel" aria-labelledby="v-pills-resume-tab">
              <form action="">
                <h5 class="pb-2"><strong>Resume/CV</strong></h5>
                  <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="" id="" value="">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Create Your Resume</label>
                    <textarea class="textarea" id="summernote" name="body"></textarea>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
<!-- Summernote -->
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
        $('#imagePreview').hide();
        $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUpload").change(function () {
      readURL(this);
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
      $('#summernote').summernote({
          height: 450,
      });
  });
</script>
@endpush