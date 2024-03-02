<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link " style="text-align: center">
        <span class="brand-text font-weight-bold ">Laravel Ecommarce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard' ) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.userList')}}" class="nav-link @if(Request::segment(2) == 'user' ) active @endif ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.list')}}" class="nav-link @if(Request::segment(2) == 'category' ) active @endif ">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('subcategory.list')}}" class="nav-link @if(Request::segment(2) == 'subcategory' ) active @endif ">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                          Sub Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.logout')}}" class="nav-link ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
