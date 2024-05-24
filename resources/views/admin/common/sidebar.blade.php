<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('add_menue') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Add Menue
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('menue') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Manage Menue
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('add_review') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Add Review
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('manage_review') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Manage Review
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('manage_chefs') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Manage Chefs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('add_chefs') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Add Chefs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('manage_book_message') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>
                            Manage Book Message
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
