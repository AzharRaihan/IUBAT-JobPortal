<div class="nav flex-column nav-pills mt-4 px-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <!-- Dashboard List -->
  <li class="element-items mb-2  active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="bi bi-speedometer2"></i> Dashboard</li>

  <!-- Edit Profile List -->
  <li class="element-items mb-2" id="v-pills-edit-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit-profile" role="tab" aria-controls="v-pills-edit-profile" aria-selected="false"><i class="bi bi-pencil-square"></i> Edit Profile</li>

  <!-- Change Password List -->
  <li class="element-items mb-2" id="v-pills-change-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-change-password" role="tab" aria-controls="v-pills-change-password" aria-selected="false"><i class="bi bi-key"></i> Change Password</li>

  <!-- Setting List -->
  <li class="element-items mb-2" id="v-pills-resume-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resume" role="tab" aria-controls="v-pills-resume" aria-selected="false"><i class="fal fa-briefcase"></i> Resume</li>

  <!-- Logout List -->
  <li class="element-items mb-2" id="v-pills-signout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-signout" role="tab" aria-controls="v-pills-signout" aria-selected="false">
    <a href="javascript:void(0);" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i> Sign Out
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </a>
  </li>
</div>