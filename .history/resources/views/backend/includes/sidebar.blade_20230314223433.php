<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/upload'))
                }}" href="{{ route('admin.upload') }}">
                    <i class="nav-icon fas fa-upload"></i>
                    Upload File
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/master'))
                }}" href="{{ route('admin.master') }}">
                    <i class="nav-icon fas fa-database"></i>
                    Tambah BAB/EP
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/master'))
                }}" href="{{ route('admin.master') }}">
                    <i class=" nav-icon fas fa-percentage"></i>
                    Nilai
                </a>
            </li>
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->