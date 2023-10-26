<div class="sidebar-menu">
    <header class="logo1">
        <div href="" class="sidebar-icon">
            <span class="fa fa-bars"></span>
        </div>
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-tachometer"></i> <span>Dashboard</span>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li id="menu-academico">
                <a href="#">
                    <i class="fa fa-list-ul" aria-hidden="true"></i><span> Tour Packages</span>
                    <span class="fa fa-angle-right" style="float: right"></span>
                    <div class="clearfix"></div>
                </a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes">
                        <a href="{{ route('admin.tours_create') }}">Create</a>
                    </li>
                    <li id="menu-academico-avaliacoes">
                        <a href="{{ route('admin.manage.tours') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('/') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Manage Booking</span>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{ route('/') }}">
                    <i class="fa fa-table"></i>
                    <span>Manage Issues</span>
                    <div class="clearfix"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
