@if (Auth::user() && Auth::user()->hasAnyRole('admin'))
    <div class="admin__bar">
        <div class="admin__bar-wrapper h-full flex items-center">
            <x-nav.admin.links></x-nav.admin.links>
        </div>
    </div>
@endif
