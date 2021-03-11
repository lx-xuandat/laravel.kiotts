<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
        <a href="/admin" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>

    {{-- Categories --}}
    <li class="nav-item">
        <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Categories
            </p>
        </a>
    </li>
</ul>
