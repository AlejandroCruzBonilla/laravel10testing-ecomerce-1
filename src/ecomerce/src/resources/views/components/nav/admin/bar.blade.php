@if (Auth::user() && Auth::user()->hasAnyRole('admin'))
    <v-system-bar height="50" class="admin__bar">
        <div class="admin__bar-wrapper h-full flex items-center">
            <x-nav.admin.links></x-nav.admin.links>
        </div>
    </v-system-bar>
@endif
