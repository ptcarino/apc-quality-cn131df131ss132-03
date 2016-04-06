<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">GitHub</li>
            <li><a href="https://github.com/ptcarino/projectdiwa" target="_blank"><span>Download on GitHub</span></a></li>
            <li class="header">Database Management</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><span>Account</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('accounts') }}">List</a></li>
                    <li><a href="{{ url('accounts/create') }}">Add</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>City</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('cities') }}">List</a></li>
                    <li><a href="{{ url('cities/create') }}">Add</a></li>
                    <li><a href="{{ url('cities/edit') }}">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Helpline</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('helplines') }}">List</a></li>
                    <li><a href="{{ url('helplines/create') }}">Add</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Info Bulletin</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">List</a></li>
                    <li><a href="#">Add</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Location Records</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('location_records') }}">List</a></li>
                    <li><a href="{{ url('location_records/create') }}">Add</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Province</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('provinces') }}">List</a></li>
                    <li><a href="{{ url('provinces/create') }}">Add</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Region</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('regions') }}">List</a></li>
                    <li><a href="{{ url('regions/create') }}">Add</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>R.R.O.</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('rros') }}">List</a></li>
                    <li><a href="{{ url('rros/create') }}">Add</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Shelters</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('shelters') }}">List of Shelters</a></li>
                    <li><a href="{{ url('shelters/create') }}">Add a Shelter</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Needs</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('needs') }}">List of Needs</a></li>
                    <li><a href="{{ url('needs/create') }}">Request Needs</a></li>

                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>