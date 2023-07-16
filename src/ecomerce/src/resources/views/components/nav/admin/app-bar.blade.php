@if (Auth::user() && Auth::user()->hasAnyRole('admin'))
    <template v-slot:extension>
        <div class="admin_bar w-full h-full px-2 flex items-center">
            <x-nav.admin.links></x-nav.admin.links>
        </div>
    </template>
@endif
