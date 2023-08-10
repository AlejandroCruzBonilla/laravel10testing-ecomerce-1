@if (Auth::user() && Auth::user()->hasAnyRole('admin'))
    <div class="admin_bar w-full h-full flex items-center">
        <x-nav.admin.links></x-nav.admin.links>
    </div>
@endif

