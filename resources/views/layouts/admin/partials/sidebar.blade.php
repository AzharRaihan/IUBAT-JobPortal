<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="{{ route('admin.dashboard') }}" class="{{ Request::is('admin.dashboard') ? 'active' : '' }} waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="icon-grid"></i><span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{ route('admin.user') }}" class="waves-effect"><i class="icon-people"></i><span> Users </span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{ route('admin.role') }}" class="{{ Request::is('admin.role') ? 'active' : '' }} waves-effect"><i class="icon-check"></i><span> Roles </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-mixcloud"></i><span> Backups </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-book-open"></i><span> Page </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>
