@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
<style>
  .dashboard .card{
    width: 100%;
    border-top: 3px solid #C1000C;
    background: #F3F3F3;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
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
          <!-- Company Sidebar -->
          @include('layouts.company.company-sidebar')
        </div>
        <div class="col-md-8">
          <!-- Edit Profile Tab -->
          <div class="card p-3">
            <form action="{{ route('company.update-profile') }}" method="POST">
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
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
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
@endpush