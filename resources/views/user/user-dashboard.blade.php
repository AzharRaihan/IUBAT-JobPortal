@extends('layouts.website.website-layouts')
@section('page-title', '')
@push('page-style')
<style>
  .card{
    background: #f3f3f3;
    
  }
  .ambassador .card{
    padding: 20px 20px;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  }
  /* avater css start */
  .avatar-upload {
    position: relative;
    max-width: 205px;
    margin-bottom: 20px;
  }
  .avatar-upload .avatar-edit {
    position: absolute;
    right: 10px;
    z-index: 1;
    top: 105px;
  }
  .avatar-upload .avatar-edit input {
    display: none;
  }
  .avatar-upload .avatar-edit input+label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    cursor: pointer;
    font-weight: normal;
    transition: all .2s ease-in-out;
  }
  .avatar-upload .avatar-edit input+label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
  }
  .avatar-upload .avatar-edit input+label > i {
    color: #757575;
    position: absolute;
    top: 4px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
    font-size: 18px;
  }
  .avatar-upload .avatar-preview {
    width: 150px;
    height: 150px;
    position: relative;
    border-radius: 100%;
    border: 6px solid #F8F8F8;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
  }
  .avatar-upload .avatar-preview>div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
  .control-indicator{
    background: #000;
  }
  .redio_button_label > div{
    display: flex;
    justify-content: space-around;
  }
  .redio_button_label > div input{
    width: inherit !important;
    margin-bottom: 20px !important;
  }
  .user-avater span{
    font-size: 14px;
    font-weight: 600;
  }
  .description span{
    font-size: 14px;
    color: #757575;
  }
  /* .nav-pills li:last-child{
    border-bottom: none;
  } */
  .element-items{
    border: 1px solid #a8a8a8;
    padding: 10px 30px;
    border-radius: 7px;
    cursor: pointer;
    border-left: 3px solid;
    /* border-right: 3px solid; */
  }
  .element-items i {
    padding-right: 10px;
  }
  .update-avater{
    position: relative;
    left: 75px;
    top: -63px;
  }
  .update-avater i{
    color: #77090A;
    font-size: 25px;
    cursor: pointer;
  }
  /* avater css end */
  /* Responsive */
  @media only screen and (min-width: 768px) and (max-width: 991.98px) {  
  }
  @media only screen and (min-width: 576px) and (max-width: 767.98px) { 
  }
  @media only screen and (min-width: 450px) and (max-width: 575.98px) {   
  }
  @media only screen and (min-width: 310px) and (max-width: 449.98px) {  
  }
</style>
@endpush
@section('page-content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <form action="{{ route('user.update.avater') }}" method="POST">
              @csrf
              <div class="d-flex align-items-center border-bottom">
                <div class="form-group user-avater mt-4">
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                      <input type='file' id="imageUpload" name="thumbnail" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"><i class="bi bi-camera" data-bs-toggle="tooltip" data-bs-placement="right" title="Select an Image"></i></label>
                    </div>
                    <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url({{ asset('assets/application-default/img/user.png') }});">
                      </div>
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

            <div class="nav flex-column nav-pills mt-4 px-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <li class="element-items mb-2  active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-speedometer2"></i> Dashboard</li>
              <li class="element-items mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-pencil-square"></i> Edit Profile</li>
              <li class="element-items mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-sliders"></i> Setting</li>
              <li class="element-items mb-2" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="bi bi-box-arrow-right"></i> Sign Out</li>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="d-flex align-items-start">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">..f.</div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">..d.</div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">..ss.</div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">..dg.</div>
            </div>
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