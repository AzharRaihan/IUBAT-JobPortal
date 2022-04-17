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
          <!-- User Sidebar -->
          @include('layouts.company.company-sidebar')
        </div>
        <div class="col-md-8">
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
      </div>
    </div>
  </section>
@endsection
@push('page-script')

<script>
  
</script>
@endpush