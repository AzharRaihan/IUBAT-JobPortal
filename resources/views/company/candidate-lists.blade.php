@extends('layouts.website.website-layouts')
@section('page-title')
{{ isset($companyId) ? $companyId != null ? Auth::user()->company->company_name . ' |  Dashboard' : 'Company Dashboard' : 'Candidate Lists' }}
@endsection
@push('page-style')
<link rel="stylesheet" href="{{ asset('assets/website/css/company-user-dashboard.css') }}">
<style>
  .card-element{
    padding: 10px;
    border-top: 3px solid #002B36;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px;
  }
  .sl {
    background: #002B36;
    color: white;
    padding: 10px;
    border-radius: 5px;
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
          @include('layouts.company.profile-update-message')
          <div class="card p-3">
            <h4 class="text-center">All Candidates</h4>
            <div class="row">
              @foreach ($jobCandidates as $key=>$jobCandidate)
              <div class="col-12">
                <table class="table">
                  <tbody class="border">
                    <div class="my-2">
                      <span class="sl">Candidate {{ $key + 1 }}</span>
                    </div>
                    <tr class="row m-0 w-100">
                      <th scope="row" class="col-md-2 d-flex justify-content-between">Candidate Name <span>:</span>
                        </th>
                      <td class="col-md-10">{{ $jobCandidate->name }}</td>
                    </tr>
                    <tr class="row m-0 w-100">
                        <th scope="row" class="col-md-2 d-flex justify-content-between">
                          Candidate Email <span>:</span></th>
                        <td class="col-md-10">{{ $jobCandidate->email }}</td>
                    </tr>
                    <tr class="row m-0 w-100">
                      <th scope="row" class="col-md-2 d-flex justify-content-between">
                        Candidate Phone <span>:</span></th>
                      <td class="col-md-10">{{ $jobCandidate->phone }}</td>
                    </tr>
                    <tr class="row m-0 w-100">
                      <th scope="row" class="col-md-2 d-flex justify-content-between">
                        Candidate Address <span>:</span></th>
                      <td class="col-md-10">{{ $jobCandidate->address }}</td>
                    </tr>
                    <tr class="row m-0 w-100">
                      <th scope="row" class="col-md-2 d-flex justify-content-between">
                        Candidate Resume <span>:</span></th>
                      <td class="col-md-10">
                        @if ($jobCandidate->resume != null)
                        <a href="{{ asset('uploads/users/resume/'.$jobCandidate->resume->resume_name) }}">
                          Click View To Resume
                        </a>
                        @endif
                      </td>
                    </tr>
                    <tr class="row m-0 w-100">
                      <td class="col-md-10">
                        <div class="d-flex">
                          <button type="button" class="btn site-btn me-2" onclick="selectCandidate({{ $jobCandidate->id }})">Select For The Job</button>
                          <form method="post" action="{{ route('company.selected.candidate',$jobCandidate->id) }}" id="approval-form" style="display: none">
                            @csrf
                            <input type="hidden" name="job_id" value="{{ $jobId->id }}">
                          </form>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('page-script')
 <!-- Sweet Aleart Js -->
 <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript">
  function selectCandidate(id) {
   swal({
       title: 'Are you sure?',
       text: "You went to Select this Candidate ",
       type: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, approve it!',
       cancelButtonText: 'No, cancel!',
       confirmButtonClass: 'btn btn-success',
       cancelButtonClass: 'btn btn-danger',
       buttonsStyling: false,
       reverseButtons: true
   }).then((result) => {
       if (result.value) {
           event.preventDefault();
           document.getElementById('approval-form').submit();
       } else if (
           // Read more about handling dismissals
           result.dismiss === swal.DismissReason.cancel
       ) {
           swal(
               'Cancelled',
               'The post remain pending :)',
               'info'
           )
       }
   })
 }
</script>
@endpush