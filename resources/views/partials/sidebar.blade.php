<aside class="main-sidebar elevation-4 {{ config('admin.extensions.adminlte.theme.sidebar') ?: 'sidebar-dark-primary' }}">
    <a href="{{ admin_base_path('/') }}" class="brand-link {{ config('admin.extensions.adminlte.theme.logo') ?: '' }}">
        <img src="{{ admin_asset('vendor/pigzzz123/adminlte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{!! config('admin.logo', config('admin.name')) !!}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @each('adminlte::partials.menu', Admin::menu(), 'item')
            </ul>
        </nav>
    </div>
</aside>