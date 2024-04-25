<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div class="navbar-brand-box">
            <a href="index.html" class="logo">
                <i class="mdi mdi-alpha-x-circle"></i>
                <span>
                    VEHICLE APP
                </span>
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('admin/dashboard', []) }}" class="waves-effect"><i class="feather-airplay"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ url('admin/vehicle', []) }}" class="waves-effect"><i class="feather-airplay"></i><span>Vehicle</span></a>
                </li>
                <li>
                    <a href="{{ url('admin/booking', []) }}" class="waves-effect"><i class="feather-airplay"></i><span>Booking</span></a>
                </li>
                <li>
                    <a href="{{ url('admin/returned', []) }}" class="waves-effect"><i class="feather-airplay"></i><span>Returned</span></a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>