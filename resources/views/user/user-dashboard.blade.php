<h1>User Dashboard</h1>

<a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
  <i class="fas fa-power-off mr-2"></i> Log Out
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
</a>
