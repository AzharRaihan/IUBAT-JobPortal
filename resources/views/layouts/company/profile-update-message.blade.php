@php
  $authUserId = Auth::user()->id;
  $existCompany = App\Models\Company::where('user_id', $authUserId)->exists();
@endphp
@if (!$existCompany)
<div class="alert alert-danger" role="alert">
  Please Compleate Your Profile
</div>
@endif



