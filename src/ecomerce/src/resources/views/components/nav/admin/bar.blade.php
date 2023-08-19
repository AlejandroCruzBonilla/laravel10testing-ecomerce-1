@if (Auth::user() && Auth::user()->hasAnyRole('admin'))
  <admin-bar class="admin__bar" @admin-bar-height="onAdminBarHeight">
    <div class="admin__bar-wrapper">
      <div class="admin__bar-content h-full flex items-center">
        <x-nav.admin.links></x-nav.admin.links>
      </div>
    </div>
  </admin-bar>
@endif
