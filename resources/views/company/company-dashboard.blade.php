Company  Dashboard




<a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
  <i class="fas fa-power-off mr-2"></i> Log Out
  <form id="logout-form" action="{{ route('company.logout') }}" method="POST" class="d-none">
    @csrf
  </form>
</a>

{{-- 
<li class="nav-item menu-items">
  <a class="nav-link href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    
    <span class="menu-icon">
      <i class="mdi mdi-speedometer"></i>
    </span>
    <span class="menu-title">Logout</span>
</a>    
<form id="frm-logout" action="{{ route('company.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</li>  --}}