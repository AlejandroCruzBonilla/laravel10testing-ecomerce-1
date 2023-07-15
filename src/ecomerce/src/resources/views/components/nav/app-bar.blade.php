<v-app-bar scroll-behavior="hide" class="navigation__bar">
    {{ $navigation__bar }}
</v-app-bar>

<div class="nav-drawer lg:hidden">
    <v-navigation-drawer
      v-model="mobile_menu_drawer"
      location="left"
      temporary
      @update:model-value="toggle_mobile_menu_drawer">
        <x-nav.link-list></x-nav.link-list>
        <v-divider :thickness="3" class="border-opacity-100 w-4/5 mx-auto"></v-divider>
        <x-nav.auth-links></x-nav.auth-links>
    </v-navigation-drawer>
</div>
