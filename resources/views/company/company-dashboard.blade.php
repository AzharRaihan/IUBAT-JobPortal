Company  Dashboard
<a href="javascript:void(0);" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right"></i> Log Out
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </a>