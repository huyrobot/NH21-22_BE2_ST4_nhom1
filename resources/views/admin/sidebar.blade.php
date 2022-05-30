<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/admin') }}" class="brand-link">
        <img  src="{{ asset('/images') }}/newLogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administrators</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/images') }}/userTest.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">@php
                        if (isset(Auth::user()->name) && (Auth::user()->name)!= null){
                            echo Auth::user()->name;
                            $_SESSION["kiemTraDangNhap"] = 1;
                        }
                        else{
                            echo 'Error Login';
                        }
                    @endphp</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/menus/listUsers" class="nav-link ">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/listProduct" class="nav-link ">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/listBlog" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/listHastagProduct" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Product Hastag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/listHastagBlog" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Blog Hastag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/listComment" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Comments</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Add Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/menus/addUsers" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/addProduct" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/menus/addBlog" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/addHastagProduct" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Product Hastag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/addHastagBlog" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Blog Hastag</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
