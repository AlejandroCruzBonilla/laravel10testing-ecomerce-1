@if (Route::has('login'))
    <div class="inline-flex items-center justify-center">
        <v-btn id="profile-dropdown" density="default" icon="mdi-account">
        </v-btn>
    </div>
    <v-menu activator="#profile-dropdown">
        <x-nav.auth-links></x-nav.auth-links>
    </v-menu>
@endif
